<?php

namespace App\Http\Controllers\Adminpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
class Dashboard extends Controller
{
    //
    public function index() {

        $profiles=Profile::all();
        return view("report",compact('profiles'));
    }
    
}
