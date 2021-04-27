<?php


namespace App\Http\Controllers;
/*
 * 油品管理
 * */
class OilController extends Controller
{
    public function oilList()
    {
        return view('admin.oil.oilList');
    }

    public function oilAdd()
    {
        return view('admin.oil.oilAdd');
    }

    public function oilEdit()
    {
        return view('admin.oil.oilEdit');
    }

    public function oilGoodsList()
    {
        return view('admin.oil.oilGoodsList');
    }

    public function oilGoodsAdd()
    {
        return view('admin.oil.oilGoodsAdd');
    }

    public function oilGoodsEdit()
    {
        return view('admin.oil.oilGoodsEdit');
    }
}