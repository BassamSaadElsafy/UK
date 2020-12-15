<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\StudentDatatable;

use Illuminate\Http\Request;
use \App\Student;

class StudentController extends Controller
{

    public function index(StudentDatatable $std)
    {
        return $std->render('admin.students.index' , ['title' => 'Students']);
    }


    public function create()
    {
        return view('admin.students.create' , ['title' => 'Create Student']);
    }

    public function store(Request $request)
    {

        // dd($request->all());

        $data = $this->validate(request() , [
            'name'             => 'required',
            'course_name'      => 'required',
            'completed'        => 'required',
            'status'           => 'required',
            //'certificate_id'   => 'required|email|unique:admins',
            'certificate_link' => 'required|min:6'
        ] , [] , [
            'name'             =>  'name',
            'course_name'      =>  'course name',
            'completed'        =>  'completed',
            'status'           =>  'Status',
            //'certificate_id'   =>  'certificate id',
            'certificate_link' =>  'certificate link'
       ]);

        $certificated_id='abc'.rand(1,1000000);
        $check = Student::where('certificate_id', $certificated_id)->first();
        
        while($check != null)
        {
   
            $certificated_id='abc'.rand(1,1000000);
            $check = Student::where('certificate_id', $certificated_id)->first();

        }

        $data['certificate_id'] = $certificated_id;
    
        Student::create($data);

        session()->flash('success' , 'Student Created Successfully');
        return redirect(aurl('students'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $std = Student::find($id);
        return view('admin.students.edit' , ['title' => 'Edit Student' , 'std' => $std]);
    }

    
    public function update(Request $request, $id)
    {
        $data = $this->validate(request() , [
            'name'             => 'required',
            'course_name'      => 'required',
            'completed'        => 'required',
            'status'           => 'required',
            //'certificate_id'   => 'required|email|unique:admins',
            'certificate_link' => 'required|min:6'
        ] , [] , [
            'name'             =>  'name',
            'course_name'      =>  'course name',
            'completed'        =>  'completed',
            'status'           =>  'Status',
            //'certificate_id'   =>  'certificate id',
            'certificate_link' =>  'certificate link'
       ]);
      
       
        Student::where('id' , $id)->update($data);

        session()->flash('success' , 'Student Updated Successfully');
        return redirect(aurl('students'));
    }

    public function destroy($id)
    {
        Student::find($id)->delete();
        session()->flash('success' , 'Student Deleted Successfully');
        return back();
    }

    public function multi_delete(){
        if(is_array(request('item'))){
            Student::destroy(request('item'));
            session()->flash('success' , 'Records Deleted Successfully');
        }
        else{
            Student::find(request('item'))->delete();
            session()->flash('success' , 'Record Deleted Successfully');
        }
        return back();
    }
}
