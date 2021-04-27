<?php


namespace App\Http\Controllers;


use App\Http\Model\UserModel;
use http\Env\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{

    public function companyList()
    {
        $userInfo = Db::table('zb_user')->get();

        return view('admin.company.companyList');
    }

    public function companyAdd()
    {
        return view('admin.company.companyAdd');
    }

    public function companyEdit()
    {
        return view('admin.company.companyEdit');
    }

    public function saveCompany(Request $request)
    {
        dd($request);
    }
}