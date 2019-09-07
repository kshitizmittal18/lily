<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $locations = Location::all();
        return view('location.index', compact('locations'));
    }

    public function create()
    {
        return view('location.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|regex:/^[a-zA-Z0-9 _,.-]+$/|unique:locations',
            'description' => 'required|regex:/^[a-zA-Z0-9 _,.-]+$/',
        ], [
            'name.required'        => 'Location name is required',
            'name.regex'           => 'Alpha numeric equired',
            'description.required' => 'Description is required',
        ]);

        $insert = Location::create($request->all());

        if ($insert) {
            echo "success";
            $notification = array(
                'message'    => 'Location Added Successfully',
                'alert-type' => 'success',
            );
        } else {
            echo "error";
            $notification = array(
                'message'    => 'Some problem Has Been Occured',
                'alert_type' => 'error',
            );

        }
        return redirect()->route('location.index')->with($notification);
    }

    public function edit($id)
    {
        $location = Location::where('id', $id)->first();
        return view('location.edit', compact('location'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->validate([
            'name'        => 'required|regex:/^[a-zA-Z0-9 _,.-]+$/',
            'description' => 'required|regex:/^[a-zA-Z0-9 _,.-]+$/',
        ], [
            'name.required'        => 'Designation name is required',
            'name.regex'           => 'Alpha Numeric Required',
            'description.required' => 'Description is required',
            'description.regex'    => 'Alpha Numeric Required',
        ]);

        $arr = ['name' => $request->name, 'description' => $request->description, 'status' => (@$request->status ? '1' : '0')];

        $update = Location::where('id', $id)->update($arr);

        if ($update) {
            echo "success";
            $notification = array(
                'message'    => 'Designation Updated Successfully',
                'alert-type' => 'success',
            );
        } else {
            echo "error";
            $notification = array(
                'message'    => 'Some problem Has Been Occured',
                'alert_type' => 'error',
            );

        }
        return redirect()->route('location.index')->with($notification);
    }
}
