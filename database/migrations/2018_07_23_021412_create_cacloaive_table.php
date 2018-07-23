<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCacloaiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cacloaive', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->integer('idEvent');
            $table->integer('giaTien');
            $table->integer('soLuongToiDa');
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
        Schema::dropIfExists('cacloaive');
    }
}
