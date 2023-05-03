<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserAuthorizationController extends Controller
{
    //
    public function getAllUser(){
        $users = User::all();
        return view("admin.pages.users.getAllUser")->with("users",$users);
    }
}
