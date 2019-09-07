<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = ['name','email','gender','dob','mobile','date_of_joining','department_id','designation_id','location_id','holiday_calendar_id','supervisor','employment_status','status'];

    /* === Department Relation === */
    public function department(){
        return $this->belongsTo('App\Models\Department','department_id','id');
    }

    /* === Designation Relation === */
    public function designation(){
        return $this->belongsTo('App\Models\Designation','designation_id','id');
    }

    /* === Loaction Relation === */
    public function location(){
        return $this->belongsTo('App\Models\Location','location_id','id');
    }

    /* === Holiday Calendar Relation === */
    public function holidayCalendar(){
        return $this->belongsTo('App\Models\HolidayCalendar','holiday_calendar_id','id');
    }

    /* === Attendance Relation*/
    public function attendance(){
    	return $this->hasMany('App\Models\Attendance','user_id','id');
    }
}
