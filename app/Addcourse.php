<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Addcourse extends Model
{
   /* public static function getInfo($id){
        return DB::table('addcourses')
        ->where('id',$id)
        ->get();
     }

    public static function getList($id){
        return DB::table('addcourses')
        ->where('id',$id)
        ->join('users','users.users_id','addcourses.id')
        ->join('courses','courses.courses_id','addcourses.id')
        ->get();
      }*/
   
    protected $fillable = [
        'users_id', 'courses_id'
    ];
}
