<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Group;
use App\Models\Lesson;
use App\Models\Davomat;
use App\Models\Teacher;
class DavomatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $this->validate($request,[
            'davomat_id'=>'required',
        ]);

            $id=$request->get('davomat_id');
            $davomat=Davomat::findOrFail($id);
            if($davomat->chesk==1){
                $davomat->chesk=0;
                $davomat->save();

            }
            else{
                $davomat->chesk=1;
                $davomat->save();
            }
            $status= $davomat->chesk;
            return response()->json([
                'd_id'=>$id,
                'd_status'=>$status,
                'status'=>true,
               ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $id=$request->get('davomat_id');
        // $davomat=Davomat::findOrFail($id);
        // $davomat->chesk=$request->get('check');
        // $davomat->save();
        // return redirect()->back()->with('success');

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
    //    $davomat=Davomat::where('lesson_id','=',$lesson_id)->andWhere('student_id',$id);
        dd($davomat);
        // $davomat=Davomat::where('student_id','=',$id)->get();
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
