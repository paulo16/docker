<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use Debugbar;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("users.list") ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.add');
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
            'email' => 'email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation'=>'required',
            'lastname' => 'required',
        ]);

        $user= new User();
        $user->name= $request->get('name') ? $request->get('name') : '';
        $user->telephone= $request->get('telephone') ? $request->get('telephone') : '';
        $user->lastname= $request->get('lastname') ? $request->get('lastname') : '';
        $user->email= $request->get('email') ? $request->get('email') : '';
        $user->password= $request->get('password') ? bcrypt($request->get('password')) : ''; 
        if ($request->hasFile('photo')) {
            $user->photo = $request->file('photo')->store('public/avatars');
        }


        return $user->save()? redirect()->route('users.index'): 
        redirect()->route('users.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return  view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= User::find($id);
        return view('users.edit',compact('user'));
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
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'required|confirmed',
            'password_confirmation'=>'required',
            'lastname' => 'required',
        ]);

        $user= User::find($id);
        $user->name= $request->get('name') ? $request->get('name') : '';
        $user->telephone= $request->get('telephone') ? $request->get('telephone') : '';
        $user->lastname= $request->get('lastname') ? $request->get('lastname') : '';
        $user->email= $request->get('email') ? $request->get('email') : '';
        $user->password= $request->get('password') ? bcrypt($request->get('password')) : ''; 

        Debugbar::info($request->file('photo'));
        Debugbar::info("Rien");
        if ($request->hasFile('photo')) {
             Storage::delete($user->photo);
            $user->photo = $request->file('photo')->store('public/avatars');
        }

        if($user->save()) {
            return redirect(route('users.show',$id));
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
        $user = User::find($id);
        Storage::delete($user->photo);
        return $user->delete();
    }

    public function data(Request $request){

        $users = DB::table('users')->select(['id as user_id','name', 'lastname', 'telephone as telephone','email' ,'created_at',DB::raw("CONCAT(name,' ',lastname) as username")])->orderBy('id', 'desc');

        $datatables = Datatables::of($users)
        ->addColumn('action', function ($model) {

            $url_edit='<a href=":url" class="green" ><i class="ace-icon fa fa-pencil bigger-130"></i></a>';
            $url_show='<a href=":url" class="blue" ><i class="ace-icon fa fa-search-plus bigger-130"></i></a>';
            $delete='<a data-id=":id" class="red delete"><i class="ace-icon fa fa-trash-o bigger-130 "></i></a>';

            $show = route('users.show', $model->user_id);
            $edit = route('users.edit', $model->user_id);
            $del =str_replace(":id",$model->user_id,$delete); 

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
