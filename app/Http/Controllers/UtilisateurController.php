<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UtilisateurController extends Controller
{
    public function store(Request $request) {
                
        dd($request->all());
    }

    public function register(Request $request) {

    }


    public function login(Request $request) {

        return view('login');
    }
}
