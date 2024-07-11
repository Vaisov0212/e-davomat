<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Teacher;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

            $groups=Group::all();
            // dd($groups);
            return view('admin.group.g_index',compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $teacher=Teacher::find(2)->group();
        // dd($teacher);
        $teachers=Teacher::all();
        return view('admin.group.g_create',compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'money'=>'required',
            'teacher'=>'required'
        ]);

        $groups=new Group([
            'g_name'=> $request->post('name'),
            'g_money'=>$request->post('money'),
            'tech_id'=>$request->post('teacher')
        ]);
        $groups->save();
        return redirect()->back()->with('success','Guruh yaratildi !');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $group=Group::findOrfail($id);

        return view('admin.group.g_show',compact('group'));
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
