<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if($request->ajax())
        {
            $data = Teacher::select('*');
            // dd($data);
            return DataTables::of($data)
            ->addColumn('action',function($data){
                return '<form   action="'.route('admin.teachers.show', $data->id).'" enctype="multipart/form-data" method="get">
                   <button type="submit" class="btn btn-inverse-light btn-icon">
                    <i class="mdi mdi-eye text-primary"></i>
                    </button>
                      <button type="button" id="'.$data->id.'" class="btn btn-inverse-light btn-icon delete" >  <i class="mdi mdi-delete text-danger"></i></button>
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
