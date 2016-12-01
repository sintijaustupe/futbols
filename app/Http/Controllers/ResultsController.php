<?php

namespace App\Http\Controllers;

use App\Results;
use App\Team;
use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function __construct()
    {
        //
    }
    
    public function index()
    {
        return view('results_show', array('results' => Results::all()));
    }
}

