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
        $user->password = Hash::make($request->get('password'));
        $user->save();

        return redirect()->route('home');
    }

    public function logout(Request $request) {

        $request->session()->forget('user');
        
        return redirect()->route('home');
    }


    public function login(Request $request) {

        return view('login');
    }

    public function loginAttemps(Request $request) {

        
        $user = User::where('email', $request->get('email'))->get()->first();
        
        if (isset($user) && Hash::check($request->get('password'), $user->password)) {
            $request->session()->put('user', $user);
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with('danger', 'Mauvais mdp');
        }
    }
}
