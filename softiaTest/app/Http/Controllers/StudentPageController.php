<?php

namespace App\Http\Controllers;

use App\Model\Certificate;
use App\Model\Convention;
use App\Model\Student;
use Illuminate\Http\Request;

class StudentPageController extends Controller
{
    public function OpenPage()
    {
        return view('student')->with('allConventions', Convention::all());
    }

    public function add(Request $request)
    {
        if ($request->get('firstname'))
        {
            $student = new Student();

            $student->firstname = $request->get('firstname');
            $student->lastname = $request->get('lastname');
            $student->mail = $request->get('mail');
            $student->convention_id = $request->get('convention_id');

            $student->save();
        }

        return redirect('/student')->with('allConventions', Convention::all());
    }
}
