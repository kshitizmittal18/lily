<?php

namespace App\Http\Controllers;

use App\Models\HolidayCalendar;
use App\Models\Holiday;
use Illuminate\Http\Request;

class HolidayCalendarController extends Controller
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
    public function index()
    {
        $calendars = HolidayCalendar::all();

        $instance = new \Google\Holidays();
        $holidays = $instance->withApiKey('AIzaSyACN53bcnlB_1MDXY8BqfXuMb42XjGUQ3E')
                     ->inCountry('US')
                     ->withMinimalOutput()
                     ->list();
        dd($holidays);

        return view('holiday_calendar.index',compact('calendars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('holiday_calendar.create');
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
            'name'        => 'required',
            'description' => 'required|regex:/^[a-zA-Z0-9 _,.-]+$/',
        ], [
            'name.required'        => 'Name is required',
            'description.required' => 'Description name is required',
        ]);

        $insert = HolidayCalendar::create($request->all()+['year'=>date('Y')]);

        if ($insert) {
            echo "success";
            $notification = array(
                'message'    => 'Calendar Added Successfully',
                'alert-type' => 'success',
            );
        } else {
            echo "error";
            $notification = array(
                'message'    => 'Some problem Has Been Occurred',
                'alert_type' => 'error',
            );

        }
        return redirect()->route('holiday_calendar.index')->with($notification);
    }

    // *
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     
    public function edit($id)
    {
        $calendar = HolidayCalendar::where('id', $id)->first();
        $holidays = Holiday::where(['holiday_calendar_id'=>$id])->get();
        return view('holiday_calendar.edit', compact('calendar','holidays'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     $input = $request->validate([
    //         'name'        => 'required',
    //         'description' => 'required|regex:/^[a-zA-Z0-9 _,.-]+$/',
    //     ], [
    //         'name.required'        => 'Name is required',
    //         'description.required' => 'Description name is required',
    //     ]);

    //     $arr = ['name' => $request->name, 'description' => $request->description, 'status' => (@$request->status ? '1' : '0')];

    //     $update = Department::where('id', $id)->update($arr);

    //     if ($update) {
    //         echo "success";
    //         $notification = array(
    //             'message'    => 'Department Updated Successfully',
    //             'alert-type' => 'success',
    //         );
    //     } else {
    //         echo "error";
    //         $notification = array(
    //             'message'    => 'Some problem Has Been Occured',
    //             'alert_type' => 'error',
    //         );

    //     }
    //     return redirect()->route('department.index')->with($notification);

    // }
}
