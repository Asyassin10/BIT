<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminUserAuthorizationController extends Controller
{
    //
    public function getAllUser(){
        $users = User::all();
        $roles_app = Role::all();
        foreach($users as $user){
            //$user->assignRole('User');
            $user->roles;
            /* foreach ($roles as $role) {
                echo $role->name;
            } */
        }
        //return $users;
        return view("admin.pages.users.getAllUser")
            ->with("roles_app",$roles_app)
            ->with("users",$users);
    }
}
