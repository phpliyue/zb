<?php


namespace App\Http\Controllers;


class CustomerController
{
    public function customerList()
    {
        return view('admin.customer.customerList');
    }

    public function customerAdd()
    {
        return view('admin.customer.customerAdd');
    }

    public function customerEdit()
    {
        return view('admin.customer.customerEdit');
    }
}