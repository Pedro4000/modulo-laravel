<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{User, Message, Topic};

class HomeController extends Controller
{
    public function index(Request $request) {

        $topics = Topic::all();

        return view('home', [
            'topics' => Topic::all() ?? [],
        ]);
    }

    public function register(Request $request) {
        
        return view('register', [

        ]);
    }

    
}
