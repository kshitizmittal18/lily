<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    protected $fillable = ['holiday_name','holiday_date','holiday_type','holiday_description','holiday_status','holiday_calendar_id'];
}
