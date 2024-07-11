<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use  DataTables;
class AjaxController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = Teacher::select('*');

            return DataTables::of($data)->addIndexColumn()->make(true);
        }
        return view('index');
    }

    public function getdata(){
        $data=Teacher::select('t_fish');
        return Datatables::of($data)->make(true);
    }
}
