<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin_login(Request $request){

        $request->validate([
            'email' => 'bail|required|email',
            'password' => 'bail|required',
        ]);
        $userdata = array(
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => 1
        );

        if(Auth::attempt($userdata)) {
            return redirect('/admin/dashboard');
        }
        else {
            return redirect('/admin/login')->withInput()->with('error','Adresse e-mail ou mot de passe invalide');
        }

    }

    public function admin_logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}
