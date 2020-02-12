<?php

namespace App\Http\Controllers;

use App\Model\Certificate;
use App\Model\Convention;
use App\Model\Student;
use Illuminate\Http\Request;

class ConventionPageController extends Controller
{
    public function OpenPage()
    {
        return view('convention');
    }

    public function add(Request $request)
    {
        if ($request->get('name'))
        {
            $convention = new Convention();

            $convention->name = $request->get('name');
            $convention->nbHours = $request->get('nbHours');

            $convention->save();
        }

        return redirect('convention');
    }
}
