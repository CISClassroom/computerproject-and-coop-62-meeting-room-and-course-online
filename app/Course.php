<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Course extends Model
{
    //
    protected $fillable = [
        'coure_name', 'coure_name_dr', 'coure_day', 'coure_time', 'coure_number', 'coure_room'
    ];
}

