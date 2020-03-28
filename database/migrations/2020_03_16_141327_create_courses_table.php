<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coure_name');       //ชื่อคอร์ส
            $table->string('coure_name_dr');    //ชื่อผู้สอน
            $table->date('coure_day');          //วันที่อบรม	
            $table->string('coure_time');       //เวลาอบรม
            $table->integer('coure_number');	//ที่นั่ง
            $table->string('coure_room');       //สถานที่
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
