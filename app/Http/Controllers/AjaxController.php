<?php

namespace App\Http\Controllers;

// use App\Models\Lessson;
use App\Models\Lesson;
use Illuminate\Http\Request;
use  DataTables;
class AjaxController extends Controller
{
    public function index(Request $request)
    {

        $data = Lesson::select('*');

        if($request->ajax())
        {
            $data = Lesson::select('*');

            return DataTables::of($data)  ->addColumn('intro', function(Lesson $data) {
                return $data->groups->g_name ;
            })->addIndexColumn()->make(true);
        }
        return view('index');
    }

    public function getdata(){
        $data=Teacher::select('t_fish');
        return Datatables::of($data)->make(true);
    }
}
