<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }

    public function myTimesheet(){
        $attendance = Attendance::where(['user_id'=>Auth::user()->id])->whereMonth('date',date('m')-1)->orderBy('date','asc')->get();
        // dd($attendance);
        return view('my_lily.timesheet', compact('attendance'));
    }

    public function profile()
    {
     return view('home.profile');            
    }

    public function admin()
    {
     return view('admin.admin');            
    }
}
