<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddcoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addcourses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('users_id');        //ชื่อ-นามสกุล ||Join คอลัมของผู้ใช้งาน	
            $table->integer('courses_id');      //คอร์สอบรม  ||Join ชื่อคอร์สอบรมมา
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
        Schema::dropIfExists('addcourses');
    }
}
