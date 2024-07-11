<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use DataTables;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if($request->ajax())
        {
            $data = Teacher::select('*');
            // dd($data);
            return DataTables::of($data)
            ->addColumn('action',function($data){
                return '<form   action="'.route('admin.teachers.show', $data->id).'" enctype="multipart/form-data" method="get">
                   <button type="submit" class="btn btn-inverse-danger btn-icon">
                    <i class="mdi mdi-email-open"></i>
                    </button>
                    </form>';
            })->addIndexColumn()->make(true);
        }

        return view('admin.teacher.t_index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teacher.t_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'fish'=>'required|min:3',
            'gendr'=>'required',
            'tel'=>'required|min:9|max:9',
            'sana'=>'required',

        ]);
        $email=$request->post('email');
        if($email==null){
            $email="";
        }
        $addres=$request->post('addres');
        if($addres==null){
            $addres="";
        }
        $teachers=new Teacher([
            't_img'=>'user.jpg',
            't_fish'=>$request->post('fish'),
            't_gendr'=>$request->post('gendr'),
            't_email'=>$email,
            't_tel'=>$request->post('tel'),
            't_sana'=>$request->post('sana'),
            't_addres'=>$addres,
        ]);
        $teachers->save();
        return redirect()->back()->with('success','Muofaqiyatli yaratildi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $groups=Teacher::findOrFail($id)->group();
        // dd($groups);
        $teacher=Teacher::findOrFail($id);
        return view('admin.teacher.t_show', compact('teacher'));
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
        $teacher=Teacher::findOrFail($id);
        $teacher->delete();
        return redirect()->back()->with('success','Ma`lumot o`chirildi');
    }
}
