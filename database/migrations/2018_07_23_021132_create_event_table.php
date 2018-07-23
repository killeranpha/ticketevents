<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->mediumText('moTaChiTiet');
            $table->dateTime('ngayGioDienRa');
            $table->mediumText('diaDiemDienRa');
            $table->string('kinhDo');
            $table->string('viDo');
            $table->integer('soLuongLike');
            $table->integer('doUuTien');
            $table->mediumText('tagList');
            $table->string('trangThai');
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
        Schema::dropIfExists('event');
    }
}
