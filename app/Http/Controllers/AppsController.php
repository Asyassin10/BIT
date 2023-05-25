<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class AppsController extends Controller
{

    public function CreateUser(Request $request){
        $request->validate([
            "name"=>"required|max:255",
            "email"=>"required|email|max:255",
            "password"=>"required|max:255",
        ]);
        $user = User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
            ]);
        return redirect()->back();
    }
    // User List Page
    public function user_list()
    {
        $pageConfigs = ['pageHeader' => false];
        $users_count = User::all();
        $permissions = Permission::all();
        $roles = Role::all();
        return view('.content.apps.user.app-user-list', ['pageConfigs' => $pageConfigs])
        ->with("permissions",$permissions)
        ->with("roles",$roles)
        ->with("users_count",$users_count);
    }

    // User Account Page
    public function user_view_account()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('.content.apps.user.app-user-view-account', ['pageConfigs' => $pageConfigs]);
    }

    // User Security Page
    public function user_view_security()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('.content.apps.user.app-user-view-security', ['pageConfigs' => $pageConfigs]);
    }

    // User Billing and Plans Page
    public function user_view_billing()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('.content.apps.user.app-user-view-billing', ['pageConfigs' => $pageConfigs]);
    }

    // User Notification Page
    public function user_view_notifications()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('.content.apps.user.app-user-view-notifications', ['pageConfigs' => $pageConfigs]);
    }

    // User Connections Page
    public function user_view_connections()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('.content.apps.user.app-user-view-connections', ['pageConfigs' => $pageConfigs]);
    }






    // File manager App


    // Access Roles App
    /* public function access_roles()
    {
        $pageConfigs = ['pageHeader' => true,];
        $roles = Role::all();
        $permissions = Permission::all();
        return view('.content.apps.rolesPermission.app-access-roles', ['pageConfigs' => $pageConfigs])
            ->with("permissions",$permissions)
            ->with("roles",$roles);
    } */

    // Access permission App
    public function access_permission()
    {
        $pageConfigs = ['pageHeader' => false,];
        $ermissions = Permission::all();
        $users = User::all();

        return view('.content.apps.rolesPermission.app-access-permission', ['pageConfigs' => $pageConfigs])
        ->with("ermissions",$ermissions)
        ->with("users",$users);
    }
    public function AssignUserToPermission(int $permission_id,int $user_id){
        $user = User::find($user_id);
        $permission = Permission::find($permission_id);
        $user->givePermissionTo($permission);
        return redirect()->back();
    }
    public function DeleteUserToPermission(int $permission_id,int $user_id){
        $user = User::find($user_id);
        $permission = Permission::find($permission_id);
        $user->revokePermissionTo($permission);
        return redirect()->back();
    }




}
