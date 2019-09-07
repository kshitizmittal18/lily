<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HolidayCalendar extends Model
{
    protected $fillable = ['name','description','status','year'];

    /* === Holidays Relation === */
    public function holidays(){
    	return $this->hasMany('App\Models\Holiday','holiday_calendar_id','id');
    }
}
