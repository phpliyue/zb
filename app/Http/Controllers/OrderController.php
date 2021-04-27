<?php


namespace App\Http\Controllers;


class OrderController
{
    public function orderList()
    {
        return view('admin.order.orderList');
    }

    public function orderEdit()
    {
        return view('admin.order.orderEdit');
    }
    public function orderAdd()
    {
        return view('admin.order.orderAdd');
    }
}