<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function department()
    {
        $departments = Department::all();
        return view('department.index', ['departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'name'        => 'required|unique:departments',
            'code'        => 'required|unique:departments',
            'description' => 'required|regex:/^[a-zA-Z0-9 _,.-]+$/',
        ], [
            'name.required'        => 'Name is required',
            'code'                 => 'Code is required',
            'description.required' => 'Description name is required',
        ]);

        $insert = Department::create($request->all());

        if ($insert) {
            echo "success";
            $notification = array(
                'message'    => 'Department Added Successfully',
                'alert-type' => 'success',
            );
        } else {
            echo "error";
            $notification = array(
                'message'    => 'Some problem Has Been Occured',
                'alert_type' => 'error',
            );

        }
        return redirect()->route('department.index')->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::where('id', $id)->first();
        return view('department.edit', compact('department'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->validate([
            'name'        => 'required',
            'code'        => 'required',
            'description' => 'required|regex:/^[a-zA-Z0-9 _,.-]+$/',
        ], [
            'name.required'        => 'Name is required',
            'code'                 => 'Code is required',
            'description.required' => 'Description name is required',
        ]);

        $arr = ['name' => $request->name,'code'=>$request->code, 'description' => $request->description, 'status' => (@$request->status ? '1' : '0')];

        $update = Department::where('id', $id)->update($arr);

        if ($update) {
            echo "success";
            $notification = array(
                'message'    => 'Department Updated Successfully',
                'alert-type' => 'success',
            );
        } else {
            echo "error";
            $notification = array(
                'message'    => 'Some problem Has Been Occurred',
                'alert_type' => 'error',
            );

        }
        return redirect()->route('department.index')->with($notification);

    }
}
