<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppsController extends Controller
{


    // User List Page
    public function user_list()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('.content.apps.user.app-user-list', ['pageConfigs' => $pageConfigs]);
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
    public function access_roles()
    {
        $pageConfigs = ['pageHeader' => true,];

        return view('.content.apps.rolesPermission.app-access-roles', ['pageConfigs' => $pageConfigs]);
    }

    // Access permission App
    public function access_permission()
    {
        $pageConfigs = ['pageHeader' => false,];

        return view('.content.apps.rolesPermission.app-access-permission', ['pageConfigs' => $pageConfigs]);
    }



}
