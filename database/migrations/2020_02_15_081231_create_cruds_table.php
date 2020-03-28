<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cruds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');      //ชื่อเรื่อง	
            $table->string('last_name');       //ชื่อผู้สอน	
            $table->string('ep');              //บทเรียน	
            $table->string('video');           //VDO
            $table->string('image');           //รูปภาพ
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
        Schema::dropIfExists('cruds');
    }
}
