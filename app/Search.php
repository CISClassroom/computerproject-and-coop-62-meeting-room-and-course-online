<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Search extends Model
{
    public static function getWord($word){
        return DB::table('events')->where('event_name',$word)->get();  /* ไปทำการSearch ที่table('events') พร้อมค้นหาคำที่ event_name */
    }
    public static function search($word){  /* ใน$word ให้ไปทำการค้น */
        return DB::table('events')->select('event_name')->where("event_name","LIKE","%{$word}%")->get();
    }
}