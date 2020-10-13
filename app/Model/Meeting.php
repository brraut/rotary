<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $fillable = ['name','language','weekly_meeting','meeting_notice', 'attendent','venue', 'google_map','description'];
}
