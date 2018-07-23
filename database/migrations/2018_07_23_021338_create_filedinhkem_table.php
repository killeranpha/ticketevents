<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiledinhkemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filedinhkem', function (Blueprint $table) {
            $table->increments('id');
            $table->string('maHinhAnh', 32);
            $table->string('kieuHinhAnh');
            $table->integer('idDoiTuong');
            $table->integer('namTaoRaHinh');
            $table->string('kieuFileDinhKem');
            $table->string('duongDan');
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
        Schema::dropIfExists('filedinhkem');
    }
}
