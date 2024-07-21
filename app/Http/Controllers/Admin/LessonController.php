<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Davomat;
use App\Models\Group;
use  DataTables;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $data=Lesson::all();

            return DataTables::of($data)
            ->addColumn('g_name',function(Lesson $data){
                return $data->groups->g_name;
            })
            ->addColumn('t_fish',function(Lesson $data){
                return $data->groups->teacher->t_fish;
            })
            ->addColumn('lesson_data',function(Lesson $data){
                return $data->lessonData->format('d-m-Y');
            })
            ->addColumn('lesson_time',function(Lesson $data){
                return $data->lessonTime->format('H:i');
            })
            ->addColumn('create_data',function(Lesson $data){
                return $data->created_at->format('d-m-Y');
            })

            ->addColumn('action',function($data){
                return '<a class="btn btn-sm btn-info">tugagan</a>
                        <a href="'.route('admin.lessons.show',$data->id).'" class="btn btn-sm btn-outline-primary"><i class="mdi mdi-eye" ></i></a>
                        <a class="btn btn-sm btn-outline-danger"><i class="mdi mdi-pencil" ></i></a>';
            })
            ->addIndexColumn()->make(true);
        }


        return view('admin.lesson.lesson_index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groups=Group::all();
        return view('admin.lesson.lesson_create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'lesson_data'=>'required',
            'lesson_time'=>'required',
            'group_id'=>'required'
        ]);

        $lesson=new Lesson([
            'group_id'=>$request->get('group_id'),
            'lessonData'=>$request->get('lesson_data'),
            'lessonTime'=>$request->get('lesson_time')
        ]);
        $lesson->save();
        $lesson_data=Lesson::orderBy('created_at','desc')->first();
        $lesson_id=$lesson_data->id;
        $id=$request->get('group_id');
        $group=Group::findOrFail($id);
        foreach($group->student as $item){
            $davomat=new Davomat([
                'student_id'=>$item->id,
                'group_id'=>$id,
                'lesson_id'=>$lesson_id,
                'chesk'=>0

            ]);
            $davomat->save();
        }




        return redirect()->back()->with('success','Dars Muofaqiyatli yaratildi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Davomat::where('lesson_id','=',$id)->get();
        // dd($data);
        return view('admin.lesson.lesson_show',compact('data'));
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
