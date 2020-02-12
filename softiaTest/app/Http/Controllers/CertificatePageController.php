<?php

namespace App\Http\Controllers;

use App\Model\Certificate;
use App\Model\Convention;
use App\Model\Student;
use Illuminate\Http\Request;

class CertificatePageController extends Controller
{
    public function OpenPage()
    {
        \JavaScript::put([
            'allStudents' => Student::all(),
            'allConventions' => Convention::all(),
        ]);

        return view('certificate')->with('allStudents', Student::all());
    }

    public function add(Request $request)
    {
        if ($request->get('student_id'))
        {
            $certificate = new Certificate();

            $certificate->message = $request->get('message');
            $certificate->student_id = $request->get('student_id');
            $certificate->convention_id = $request->get('convention_id');

            $certificate->save();
        }

        return redirect('/certificate')->with('allStudents', Student::all());
    }
}
