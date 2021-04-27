<?php


namespace App\Http\Controllers;
use App\Http\Model\UserModel;
/*
 * 用户操作
 * */
class UserController
{
    public function userList()
    {
        return view('admin.user.userList');
    }

    public function userAdd()
    {
        return view('admin.user.userAdd');
    }

    public function userEdit()
    {
        return view('admin.user.userEdit');
    }

    public function roleList()
    {
        return view('admin.user.roleList');
    }
    public function roleAdd()
    {
        return view('admin.user.roleAdd');
    }
    public function roleEdit()
    {
        return view('admin.user.roleEdit');
    }
}