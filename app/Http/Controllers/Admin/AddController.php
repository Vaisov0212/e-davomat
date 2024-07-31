<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Group;
use App\Models\Courses;
use DataTables;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function group_student_add(Request $request){

        $student_id=$request->get('student_id');
        $group_id=$request->get('group_id');

        $student=Student::findOrFail($student_id);

        if(is_null($student->s_groups)){
            $student->s_groups()->attach($group_id);
                    return redirect()->back()->with('success','o`quvchi guruhga qo`shildi');
        }
        else{
            $count=0;
            foreach($student->s_groups as $group){
                if( $group->id==$group_id){
                    $count++;
                    return redirect()->back()->with('message','o`quvchi bu guruhda bor');
                    break;
                }
             }
             if($count==0){
                $student->s_groups()->attach($group_id);
                    return redirect()->back()->with('success','o`quvchi guruhga qo`shildi');
             }
        }
    }


    public function group_student_logaut(Request $request){

        $this->validate($request,[
            'group_id'=>'required',
            'student_id'=>'required'
        ]);

            $group_id=$request->get('group_id');
            $student_id=$request->get('student_id');
            $group=Group::findOrFail($group_id);
            $group->student()->detach($student_id);
            return response()->json([
                'status'=>true
            ]);
    }
}
