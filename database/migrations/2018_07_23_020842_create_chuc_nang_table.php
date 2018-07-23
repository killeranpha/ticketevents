<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChucNangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chucNang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->string('duongDan');
            $table->tinyInteger('isPublic');
            $table->integer('idNhomChucNang');
            $table->tinyInteger('thuTu');
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
        Schema::dropIfExists('chucNang');
    }
}
