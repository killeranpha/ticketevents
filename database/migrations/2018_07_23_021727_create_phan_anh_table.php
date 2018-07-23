<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhanAnhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phanAnh', function (Blueprint $table) {
            $table->integer('idKieuPhanAnh');
            $table->longText('noiDungPhanAnh');
            $table->string('emailRiengCuaNguoiPhanAnh');
            $table->date('ngayPhanAnh');
            $table->date('ngayTiepNhan');
            $table->longText('noiDungXuLy');
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
        Schema::dropIfExists('phanAnh');
    }
}
