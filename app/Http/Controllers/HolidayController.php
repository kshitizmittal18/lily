<?php

namespace App\Http\Controllers;
use App\Models\Holiday;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $holiday_calendar_id = $id;
        return view('holiday_calendar.holiday.create',compact('holiday_calendar_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $input = $request->validate([
            'holiday_name' => 'required',
            'holiday_date' => 'required',
            'holiday_type' => 'required',
            'holiday_description' => 'required|regex:/^[a-zA-Z0-9 _,.-]+$/',
        ], [
            'holiday_name' => 'Holiday name is required',
            'holiday_date' => 'Holiday date is required',
            'holiday_type' => 'Holiday type is required',
            'holiday_description' => 'Holiday description is required',
        ]);

        $insert = Holiday::create($request->all()+['holiday_calendar_id'=>$id]);

        if ($insert) {
            echo "success";
            $notification = array(
                'message'    => 'Holiday Added Successfully',
                'alert-type' => 'success',
            );
        } else {
            echo "error";
            $notification = array(
                'message'    => 'Some problem Has Been Occurred',
                'alert_type' => 'error',
            );

        }
        return redirect()->route('holiday_calendar.edit',$id)->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
