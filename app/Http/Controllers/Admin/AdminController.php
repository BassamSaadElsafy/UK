<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\AdminDatatable;

use Illuminate\Http\Request;
use \App\Admin;
use Hash;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AdminDatatable $admin)
    {
        //return $admin->render('admin.admins.index' , ['title' => trans('admin.admins')]);

        $admin = Admin::first();
        return view('admin.admins.index' , ['title' => 'admin', 'admin' => $admin]);    
    }
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admin.admins.edit' , ['title' => trans('admin.edit_record') , 'admin' => $admin]);
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate(request() , [
            'name' => 'required',
            'email' => 'required|email|unique:admins,email,'.$id,
            'old_password' => 'required|min:6',
            'new_password' => 'sometimes|nullable|min:6',
            'conf_pass' => 'sometimes|nullable|same:new_password|min:6'
        ] , [] , [
            'name'     => trans('admin.name'),
            'email'    =>  trans('admin.email'),
            'old_password' =>  trans('admin.password'),
            'new_password' => 'New Password',
            'conf_pass' =>  'Confirm Password'
        ]);
        

        if (Hash::check($request->old_password, admin()->user()->password ))
        {

            if( !empty($request->new_password) && !empty($request->conf_pass) )
            {
                $data['password'] = bcrypt(request('new_password'));
            }
            else
            {
                $data['password'] = bcrypt(request('old_password'));
            }
            
      
        }else{

            session()->flash('error' , 'Invalid Old Password');
            return back();        
        }

      
        Admin::where('id' , $id)->update(
            [
                'name'   => $request->name,
                'email'  => $request->email,
                'password'  => $data['password']
            ]
        );

        session()->flash('success' , trans('admin.admin_updated_successfully'));
        return redirect(aurl('admin'));
    }

}
