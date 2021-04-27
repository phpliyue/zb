<?php


namespace App\Http\Controllers;


class LoginController extends Controller
{
    //登入页面
    public function login()
    {
        return view('login');
    }
}