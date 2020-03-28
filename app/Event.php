<?php

namespace App;
use DB;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'event_name', 'start_date', 'end_date', 'room_name', 't_start', 't_end'
    ];

}
