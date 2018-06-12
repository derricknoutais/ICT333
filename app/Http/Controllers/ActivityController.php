<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;

class ActivityController extends Controller
{
    public function index(){

        $flatRates = Activity::where('type', 'Flat Rate')->get();

        $perTutorials = Activity::where('type', 'Per Tutorial')->get();

        $perStudents = Activity::where('type', 'Per Student')->get();

        return view('patternBuilder', compact('flatRates', 'perTutorials', 'perStudents'));

    }
}
