<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function agent(){
        return view('manager.home.index');
    }
}
