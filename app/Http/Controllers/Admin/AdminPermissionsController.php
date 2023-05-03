<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class AdminPermissionsController extends Controller
{
    //
    public function GetAllPermissions(){
        $permissions = Permission::all();
        return view("admin.pages.roles.GetAllPermissions")->with("permissions",$permissions);
    }
    public function CreatePermission(){
        return view("admin.pages.roles.CreatePermission");
    }
    public function CreatePermissionPost(Request $request){
        $request->validate([
            "permission_name"=>"required|string|unique:roles,name"
        ]);
        Permission::create([
            'name' => $request->permission_name
        ]);
        return redirect()->route("GetAllPermissions");
    }
}
