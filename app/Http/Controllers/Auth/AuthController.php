<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Dcblogdev\MsGraph\Facades\MsGraph;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Exception;
use Spatie\Permission\Models\Role;

class AuthController extends Controller
{

    public function connect_office()
    {
        return MsGraph::connect();
    }

    public function logout_office()
    {
        return MsGraph::disconnect('/');
    }

    public function redirect()
    {
        $data =  MsGraph::get('me');

        if ($data['mail'] == null) {
            $email = $data['userPrincipalName'];
        } else {
            $email = $data['mail'];
        }
        $name = $data["displayName"];
        $id_office = $data["id"];

        try {
            $finduser = User::where('id_office', $id_office)->first();

            if ($finduser) {

                Auth::login($finduser);

                return redirect()->route('admin.dashboard');
            } else {
                $role = Role::find(2);
                $newUser = User::updateOrCreate(['email' => $email], [
                    'name' => $name,
                    'id_office' => $id_office,
                    'password' => Hash::make('password'),
                ]);
                $newUser->assignRole($role);

                Auth::login($newUser);


                return redirect()->route('admin.dashboard');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
