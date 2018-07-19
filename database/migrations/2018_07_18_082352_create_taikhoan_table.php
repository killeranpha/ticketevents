<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaikhoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taikhoan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenTaiKhoan',20);
            $table->string('matKhau',32);
            $table->string('email');
            $table->string('hoVaTen',30);
            $table->date('ngaySinh');
            $table->tinyInteger('idGioiTinh');
            $table->integer('CMND');
            $table->string('soDienThoai');
            $table->tinyInteger('laAdmin');
            $table->tinyInteger('laNhaToChuc');
            $table->tinyInteger('laNguoiDung');
            $table->tinyInteger('active');
            $table->integer('soTien');
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
        Schema::dropIfExists('taikhoan');
    }
}
