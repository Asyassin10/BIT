<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class AdminRolesController extends Controller
{
    //
    public function GetAllRoles(){
        $roles = Role::all();
        return view("admin.pages.roles.GetAllRoles")->with("roles",$roles);
    }
    public function GetRoleDetails(int $role_id){
        $role = Role::find($role_id);
        $permissions = Permission::all();
        //return $role->hasPermissionTo($permissions[0]);
        /* $user = User::find(1);
        $roles = $user->getRoleNames();
        return $roles; */
        return view("admin.pages.roles.GetRoleDetails")->with("role",$role)->with("permissions",$permissions);
    }
    public function AssignPermissionToRole(int $role_id , int $permission_id){
        $role = Role::find($role_id);
        $permission = Permission::find($permission_id);
        $role->givePermissionTo($permission);
        return redirect()->route("GetRoleDetails",["role_id"=>$role_id]);
    }
    public function UnAssignPermissionToRole(int $role_id , int $permission_id){
        $role = Role::find($role_id);
        $permission = Permission::find($permission_id);
        $role->revokePermissionTo($permission);
        return redirect()->route("GetRoleDetails",["role_id"=>$role_id]);
    }
    public function SaveRolePermissionData(Request $request,int $role_id){
        $role = Role::find($role_id);
        $permissions = $request->permissions;
        foreach($permissions as $p){
            $role->givePermissionTo($p);
        }
        return redirect()->route("GetRoleDetails",["role_id"=>$role_id]);
    }
    public function CreateRole(){
        return view("admin.pages.roles.CreateRole");
    }
    public function CreateRolePost(Request $request){
        $request->validate([
            "role_name"=>"required|string|unique:roles,name"
        ]);
        Role::create([
            'name' => $request->role_name
        ]);
        return redirect()->route("GetAllRoles");
    }
    public function UpdateRole(){}
    public function UpdateRolePost(){}
}
