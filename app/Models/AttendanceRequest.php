<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttendanceRequest extends Model
{
    protected $fillable = ['user_id','application_date','attendance_id','new_first_half','new_second_half','reason','request_status','comments','action_by'];
}
