<?php

namespace App\Http\Controllers;
use App\Accessoire;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use Debugbar;
use Illuminate\Support\Facades\Storage;

class AccessoireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("accessoires.list") ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accessoires.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'reference' => 'required',
            'prix' => 'required',
        ]);

        $accessoire= new Accessoire();
        $accessoire->reference= $request->get('reference') ? $request->get('reference') : '';
        $accessoire->modele= $request->get('modele') ? $request->get('modele') : '';
        $accessoire->serie= $request->get('serie') ? $request->get('serie') : '';
        $accessoire->couleur= $request->get('couleur') ? $request->get('couleur') : '';
        $accessoire->quantite= $request->get('quantite') ? $request->get('quantite') : '';
        $accessoire->prix= $request->get('prix') ? $request->get('prix') : '';  
        if ($request->hasFile('image')) {
            $accessoire->image= $request->file('image')->store('public/accessoires');
        }


        return $accessoire->save()? redirect()->route('accessoires.index'): 
        redirect()->route('accessoires.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $accessoire = Accessoire::find($id);

        return  view('accessoires.show',compact('accessoire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $accessoire= Accessoire::find($id);
        return view('accessoires.edit',compact('accessoire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'reference' => 'required',
            'prix' => 'required',
        ]);

        $accessoire= Accessoire::find($id);
        $accessoire->reference= $request->get('reference') ? $request->get('reference') : '';
        $accessoire->modele= $request->get('modele') ? $request->get('modele') : '';
        $accessoire->serie= $request->get('serie') ? $request->get('serie') : '';
        $accessoire->couleur= $request->get('couleur') ? $request->get('couleur') : '';
        $accessoire->quantite= $request->get('quantite') ? $request->get('quantite') : '';
        $accessoire->prix= $request->get('prix') ? $request->get('prix') : '';  
        if ($request->hasFile('image')) {
             Storage::delete($accessoire->image);
            $accessoire->image= $request->file('image')->store('public/accessoires');
        }

        if($accessoire->save()) {
            return redirect(route('accessoires.show',$id));
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $accessoire = Accessoire::find($id);
        Storage::delete($accessoire->image);
        return $accessoire->delete();
    }

    public function data(Request $request){

        $accessoires = DB::table('accessoires')->select(['id as accessoire_id','reference', 'modele', 'serie','couleur' ,'quantite','prix','created_at'])->orderBy('id', 'desc');

        $datatables = Datatables::of($accessoires)
        ->addColumn('action', function ($model) {

            $url_edit='<a href=":url" class="green" ><i class="ace-icon fa fa-pencil bigger-130"></i></a>';
            $url_show='<a href=":url" class="blue" ><i class="ace-icon fa fa-search-plus bigger-130"></i></a>';
            $delete='<a data-id=":id" class="red delete"><i class="ace-icon fa fa-trash-o bigger-130 "></i></a>';

            $show = route('accessoires.show', $model->accessoire_id);
            $edit = route('accessoires.edit', $model->accessoire_id);
            $del =str_replace(":id",$model->accessoire_id,$delete); 

            $url_show =str_replace(":url",$show,$url_show);
            $url_edit=str_replace(":url",$edit,$url_edit);

            $action = '<div class="hidden-sm hidden-xs action-buttons">'.$url_show.'&nbsp;'.$url_edit.'&nbsp;'.$del.'<div>';
            return $action;
        }) 
        ->editColumn('created_at', function ($model){           
            return $model->created_at ? with(new Carbon($model->created_at))->format('d/m/Y') : '';
        });

        // les filtres 
        // Global search function
        if ($keyword = $request->get('search')['value']) {
            //Debugbar::info($keyword);
            // override accessoires.name global search

            $datatables->filterColumn('created_at', function ($query, $keyword) {
                $query->whereRaw("DATE_FORMAT(created_at,'%d/%m/%Y') like ?", ["%$keyword%"]);
            });

        }


        return $datatables->make(true);
    }

    /**
     * Show the form for editing the specified resource.
     *     
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */


    public function delete(Request $request,$id){

        return response()->json($this->destroy($id));
    }
}
