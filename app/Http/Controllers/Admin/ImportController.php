<?php

namespace App\Http\Controllers\Admin;
use App\Imports\StudentImport;
use \Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function student_import_index(){
        $groups=Group::all();

        return view('admin.student.import_index',compact('groups'));
    }

    public function student_import_file(Request $request){
           $request->validate([
            'group_id'=>'required',
            'import_file'=>'required',
           ]);

           Excel::import(new StudentImport, $request->file('import_file'));
           return redirect()->back()->with('success','saqlandi');
    }

}
