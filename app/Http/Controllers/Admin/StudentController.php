<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;

use Illuminate\Http\Request;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // return view('admin.student.index');
        return view('registration');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
                $this->validate($request,[
                        'card_id'=>'required',
                        'studentName'=>'required',
                        // 'studentImg'=>'required',
                        'studentGroup'=>'required',
                         'genderType' =>'required'
                ]);

                $student= new Student([
                    'card_id' => $request->get('card_id'),
                    'studentFish'=> $request->get('studentName'),
                    'studentImg'=>'1',
                    'studentGroup'=>$request->get('studentGroup'),
                     'genderType' =>$request->get('genderType'),
                ]);
                $student->save();
                return redirect()->route('admin.student.create')->with('success',"malumot saqlandi");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
