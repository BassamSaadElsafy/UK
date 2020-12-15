<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\UsersDatatable;

use Illuminate\Http\Request;
use \App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UsersDatatable $users)
    {
        return $users->render('admin.users.index' , ['title' => trans('admin.users')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create' , ['title' => trans('admin.create_user')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate(request() , [
            'name'     => 'required',
            'level'    => 'required|in:user,vendor,company',     //Only user Or vendot Or company you can insert
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:6'
        ] , [] , [
            'name'     => trans('admin.name'),
            'level'    => trans('admin.level'),
            'email'    => trans('admin.email'),
            'password' => trans('admin.password')
        ]);
        
        $data['password'] = bcrypt(request('password'));
        User::create($data);

        session()->flash('success' , trans('admin.admin_created'));
        return redirect(aurl('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit' , ['title' => trans('admin.edit_record') , 'user' => $user]);
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
        $data = $this->validate(request() , [
            'name'     => 'required',
            'level'    => 'required|in:user,vendor,company',
            'email'    => 'required|email|unique:users,email,'.$id,
            'password' => 'sometimes|nullable|min:6'
        ] , [] , [
            'name'     => trans('admin.name'),
            'level'    => trans('admin.level'),
            'email'    => trans('admin.email'),
            'password' => trans('admin.password')
        ]);
        
        if(request()->has('password')){
            $data['password'] = bcrypt(request('password'));
        }
        
        User::where('id' , $id)->update($data);

        session()->flash('success' , trans('admin.admin_updated_successfully'));
        return redirect(aurl('users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        session()->flash('success' , trans('admin.admin_deleted'));
        return back();
    }

    public function multi_delete(){
        if(is_array(request('item'))){
            User::destroy(request('item'));
            session()->flash('success' , trans('admin.admin_deleted'));
        }
        // else{
        //     User::find(request('item'))->delete();
        //     session()->flash('success' , trans('admin.admin_deleted'));
        // }
        return back();
    }
}
