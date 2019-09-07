<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetail;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Location;
use App\User;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = UserDetail::all();
        return view('user.index', compact('users'));
    }

    public function create(){
    	return view('user.create');
    }

    public function store(Request $request){
    	$request->validate([
            'name'    => 'required|regex:/^[a-zA-Z0-9 _,.-]+$/',
            'email' => 'required|email|unique:users',
            'gender' => 'required|in:male,female',
            'password' => 'required'
        ]);
        // dd($request);
    	try {
            DB::beginTransaction();
	            $userInsert = User::create(['name'=>$request->name,'email'=>$request->email,'password'=>Hash::make($request->password)]);
	            $userDetailsInsert = UserDetail::create($request->all());
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
        }

        if ($userInsert) {
            echo "success";
            $notification = array(
                'message'    => 'User Inserted Successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('user.edit',$userInsert)->with($notification);

        } else {
            echo "error";
            $notification = array(
                'message'    => 'Some problem Has Been Occured',
                'alert_type' => 'error',
            );
            return redirect()->route('user.index')->with($notification);
        }
    }

    public function edit($id)
    {
    	$user = UserDetail::where(['id'=>$id])->first();

    	$departments = Department::where(['status'=>1])->pluck('name','id')->all();
    	$designations = Designation::where(['status'=>1])->pluck('name','id')->all();
    	$locations = Location::where(['status'=>1])->pluck('name','id')->all();

    	$supervisors = UserDetail::where('id', '!=' , $id)->where(['status'=>1])->pluck('name','id')->all();
    	
        return view('user.layout',compact('user','departments','designations','locations','supervisors'));
    }

    public function update(Request $request, $id){
    	dd($request);
    }
}
