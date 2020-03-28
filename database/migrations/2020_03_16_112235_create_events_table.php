<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('event_name');  //หัวข้อ
            $table->string('room_name');  // ห้อง
            $table->date('start_date');  //วันที่เริ่มจอง
            $table->date('end_date');    //วันที่สิ้นสุด
            $table->string('t_start');  //เวลาเริ่ม
            $table->string('t_end');    //เวลาสิ้นสุด

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
