<?php

namespace App\Http\Controllers;

use App\Client;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use Debugbar;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("clients.list") ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id= Auth::user()->id;
        return view('clients.add', compact('user_id'));
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
            'lastname' => 'required',
            'telephone' => 'required',
        ]);

        return Client::create($request->all())? redirect()->route('clients.index'): 
        redirect()->route('clients.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);

        return  view('clients.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client= Client::find($id);
        $user_id= Auth::user()->id;
        return view('clients.edit',compact('client','user_id'));
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
        //dd($request);
        $this->validate($request, [
            'name' => 'required',
            'telephone' => 'required',
        ]);

                //Debugbar::info($request);
        $client= Client::find($id);
        $client->name= $request->get('name') ? $request->get('name') : '';
        $client->lastname= $request->get('lastname') ? $request->get('lastname') : '';
        $client->email= $request->get('email') ? $request->get('email') : '';
        $client->telephone= $request->get('telephone') ? $request->get('telephone') : ''; 

        if($client->save()) {
            return redirect(route('clients.show',$id));
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
        $client = Client::find($id);
        return $client->delete();
    }

    public function data(Request $request){

        $clients = DB::table('clients')->join('users', 'clients.user_id', '=', 'users.id')
        ->select(['clients.id as client_id','clients.name as name', 'clients.lastname as lastname', 'clients.telephone as telephone','clients.email as email' ,'clients.created_at as created_at',DB::raw("CONCAT(users.name,' ',users.lastname) as username")]);

        $datatables = Datatables::of($clients)
        ->addColumn('action', function ($model) {

            $url_edit='<a href=":url" class="green" ><i class="ace-icon fa fa-pencil bigger-130"></i></a>';
            $url_show='<a href=":url" class="blue" ><i class="ace-icon fa fa-search-plus bigger-130"></i></a>';
            $delete='<a data-id=":id" class="red delete"><i class="ace-icon fa fa-trash-o bigger-130 "></i></a>';

            $show = route('clients.show', $model->client_id);
            $edit = route('clients.edit', $model->client_id);
            $del =str_replace(":id",$model->client_id,$delete); 

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
            // override users.name global search

            $datatables->filterColumn('username', function($query, $keyword) {
                $sql = "CONCAT(users.name,' ',users.lastname)  like ?";
                $query->whereRaw($sql, ["%{$keyword}%"]);
            });

            $datatables->filterColumn('created_at', function ($query, $keyword) {
                $query->whereRaw("DATE_FORMAT(clients.created_at,'%d/%m/%Y') like ?", ["%$keyword%"]);
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


    /**
     * Show the form for editing the specified resource.
     *     
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function dataclient(Request $request){

        Debugbar::info($request->get('client'));

         $client = Client::where('name','LIKE',"%{$request->get('client')}%")
                    ->orWhere('lastname','LIKE',"%{$request->get('client')}%")
                    ->orWhere('telephone','LIKE',"%{$request->get('client')}%")
                    ->orWhere('email','LIKE',"%{$request->get('client')}%")
                    ->first();
                    
       Debugbar::info($client);

        return response()->json($client);

    }
}
