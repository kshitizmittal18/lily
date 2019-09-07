<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
	protected $table = 'attendance';
    protected $fillable = ['user_id','date','first_half','second_half'];

    /* === User Relation === */
    public function user(){
        return $this->belongsTo('App\Models\UserDetail','user_id','id');
    }
}
