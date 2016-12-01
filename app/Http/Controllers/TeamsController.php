<?php

namespace App\Http\Controllers;

use App\Teams;
use App\Player;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    // Middleware
    public function __construct()
    {
        // 
    }
    public function create()
    {
        return view('teams_create', array('teams' => Team::all()));        
    }

    public function store(Request $request)
    {
        $data = $request->all();
        
        $rules = array(
            'teams' => 'required|min:1|max:255',
        );
        
        $this->validate($request, $rules);
        
        $teams = new Team();
        $teams->name = $data['teams'];
        $teams->save();

        return redirect('admin')->withMessage('Team added!');
    }
    public function index()
    {
        return view('teams_show', array('teams' => Teams::all()));
    }
}


