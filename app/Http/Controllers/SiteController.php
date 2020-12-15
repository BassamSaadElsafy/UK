<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Student;

class SiteController extends Controller
{
    public function certificate(Request $request)
    {
        $certificate_id = $request->certificate_id;
        $student = Student::where('certificate_id', $certificate_id)->first();
        if($student)
        {
            return view('uk.certificate', ['student' => $student]);
        }
        else
        {
            session()->flash('uk_error' , 'Invalid Certificate Id!');
            return back();
        }
    }
}
