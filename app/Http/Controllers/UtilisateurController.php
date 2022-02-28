<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UtilisateurController extends Controller
{
    public function store(Request $request) {
         
        $user = new User();
        $user->firstName = $request->get('firstName');
        $user->lastName = $request->get('lastName');
        $user->nickName = $request->get('nickName');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->newPassword);

        $user->save();
        return redirect()->route('home');
    }

    public function register(Request $request) {

    }


    public function login(Request $request) {

        return view('login');
    }
}
