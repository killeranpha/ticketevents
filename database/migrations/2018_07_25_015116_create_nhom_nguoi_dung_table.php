<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhomNguoiDungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhomNguoiDung', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->integer('thuTu');
            $table->timestamps();
            $table->tinyInteger('daXoa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhomNguoiDung');
    }
}
