<?php


namespace App\Http\Controllers;


class VehicleController
{
    public function vehicleList()
    {
        return view('admin.vehicle.vehicleList');
    }
    public function vehicleAdd()
    {
        return view('admin.vehicle.vehicleAdd');
    }

    public function vehicleEdit()
    {
        return view('admin.vehicle.vehicleEdit');
    }
}