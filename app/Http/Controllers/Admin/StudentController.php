<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Group;
use App\Models\Courses;
use DataTables;
use Illuminate\Http\Request;


class StudentController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = Student::select('*');
            // dd($data);
            return DataTables::of($data)
            ->addColumn('action',function($data){
                return '<form   action="'.route('admin.student.show', $data->id).'" enctype="multipart/form-data" method="get">
                   <button type="submit" class="btn btn-light btn-sm">
                    <i class="mdi mdi-eye text-primary"></i>
                    </button>
                    </form>';

            })->addIndexColumn()->make(true);
        }

        return view('admin.student.index');


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groups=Group::all();
        return view('admin.student.create',compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request,[
                'card_id'=>'required',
                'studentName'=>'required',
                't_sana'=>'required',
                'tel'=>'required',
                'genderType' =>'required',
                 'group_name' =>'required'
        ]);
        $student= new Student([
            'card_id' => $request->get('card_id'),
            'studentFish'=> $request->get('studentName'),
            'st_sana'=>$request->get('t_sana'),
            'studentGroup'=>$request->get('studentGroup'),
            'genderType' =>$request->get('genderType'),
            'tel' =>$request->get('tel')
        ]);
        $student->save();

            $g_id=$request->get('group_name');
            $student->s_groups()->attach($g_id);



        return redirect()->route('admin.student.create')->with('success',"malumot saqlandi");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $groups_all=Group::all();
        $student=Student::findOrFail($id);
        return view('admin.student.s_show',compact('student','groups_all'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
