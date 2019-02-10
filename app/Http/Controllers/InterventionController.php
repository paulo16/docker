<?php

namespace App\Http\Controllers;
use App\Intervention;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use Debugbar;
use Illuminate\Support\Facades\Storage;

class InterventionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("interventions.list") ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$intervention = new Intervention();
        return view('interventions.add');
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
            'name' => 'required',
        ]);

        $client= new Client();
        $client->name= $request->get('name') ? $request->get('name') : '';
        $client->lastname= $request->get('lastname') ? $request->get('lastname') : '';
        $client->telephone= $request->get('telephone') ? $request->get('telephone') : '';
        $client->email= $request->get('email') ? $request->get('email') : '';

        $moto= new Moto();
        $moto->nom= $request->get('nom') ? $request->get('nom') : '';
        $moto->matricule= $request->get('matricule') ? $request->get('matricule') : '';
        $moto->couleur= $request->get('couleur') ? $request->get('couleur') : '';
        $moto->modele= $request->get('modele') ? $request->get('modele') : '';



        $intervention->name= $request->get('name') ? $request->get('name') : '';
        $intervention= new Intervention();
        $intervention->name= $request->get('name') ? $request->get('name') : '';
        $intervention->telephone= $request->get('telephone') ? $request->get('telephone') : '';
        $intervention->lastname= $request->get('lastname') ? $request->get('lastname') : '';
        $intervention->email= $request->get('email') ? $request->get('email') : '';
        $intervention->password= $request->get('password') ? bcrypt($request->get('password')) : ''; 
        if ($request->hasFile('photo')) {
            $intervention->photo = $request->file('photo')->store('public/avatars');
        }


        return $intervention->save()? redirect()->route('interventions.index'): 
        redirect()->route('interventions.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $intervention = Intervention::find($id);

        return  view('interventions.show',compact('intervention'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $intervention= Intervention::find($id);
        return view('interventions.edit',compact('intervention'));
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
            'name' => 'required',
            'email' => 'required|email|unique:interventions,email,'.$id,
            'password' => 'required|confirmed',
            'password_confirmation'=>'required',
            'lastname' => 'required',
        ]);

        $intervention= Intervention::find($id);
        $intervention->name= $request->get('name') ? $request->get('name') : '';
        $intervention->telephone= $request->get('telephone') ? $request->get('telephone') : '';
        $intervention->lastname= $request->get('lastname') ? $request->get('lastname') : '';
        $intervention->email= $request->get('email') ? $request->get('email') : '';
        $intervention->password= $request->get('password') ? bcrypt($request->get('password')) : ''; 

        Debugbar::info($request->file('photo'));
        Debugbar::info("Rien");
        if ($request->hasFile('photo')) {
         Storage::delete($intervention->photo);
         $intervention->photo = $request->file('photo')->store('public/avatars');
     }

     if($intervention->save()) {
        return redirect(route('interventions.show',$id));
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
        $intervention = Intervention::find($id);
        Storage::delete($intervention->photo);
        return $intervention->delete();
    }

    public function data(Request $request){

        $interventions = DB::table('interventions')->select(['id as intervention_id','name', 'lastname', 'telephone as telephone','email' ,'created_at',DB::raw("CONCAT(name,' ',lastname) as interventionname")])->orderBy('id', 'desc');

        $datatables = Datatables::of($interventions)
        ->addColumn('action', function ($model) {

            $url_edit='<a href=":url" class="green" ><i class="ace-icon fa fa-pencil bigger-130"></i></a>';
            $url_show='<a href=":url" class="blue" ><i class="ace-icon fa fa-search-plus bigger-130"></i></a>';
            $delete='<a data-id=":id" class="red delete"><i class="ace-icon fa fa-trash-o bigger-130 "></i></a>';

            $show = route('interventions.show', $model->intervention_id);
            $edit = route('interventions.edit', $model->intervention_id);
            $del =str_replace(":id",$model->intervention_id,$delete); 

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
            // override interventions.name global search

            $datatables->filterColumn('interventionname', function($query, $keyword) {
                $sql = "CONCAT(name,' ',lastname)  like ?";
                $query->whereRaw($sql, ["%{$keyword}%"]);
            });

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
