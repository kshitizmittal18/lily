<?php
namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $designations = Designation::all();
        return view('designation.index', compact('designations'));
    }

    public function create()
    {
        return view('designation.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|regex:/^[a-zA-Z0-9 _,.-]+$/|unique:designations',
            'description' => 'required|regex:/^[a-zA-Z0-9 _,.-]+$/',
        ], [
            'name.required'        => 'Designation name is required',
            'name.regex'           => 'Alpha numeric equired',
            'description.required' => 'Description is required',
        ]);

        $insert = Designation::create($request->all());

        if ($insert) {
            echo "success";
            $notification = array(
                'message'    => 'Designation Added Successfully',
                'alert-type' => 'success',
            );
        } else {
            echo "error";
            $notification = array(
                'message'    => 'Some problem Has Been Occured',
                'alert_type' => 'error',
            );

        }
        return redirect()->route('designation.index')->with($notification);
    }

    public function edit($id)
    {
        $designation = Designation::where('id', $id)->first();
        return view('designation.edit', compact('designation'));
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

        $arr = ['name' => $request->name, 'code'=>$request->code, 'description' => $request->description, 'status' => (@$request->status ? '1' : '0')];

        $update = Designation::where('id', $id)->update($arr);

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
        return redirect()->route('designation.index')->with($notification);
    }
}
