<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nhanvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $nhanvien) {
            $nhanvien->increments('idNhanVien');
            $nhanvien->string('nameNhanVien', 100);
            $nhanvien->string('userName', 100);
            $nhanvien->string('passWord', 50);
            $nhanvien->char('sđt', 10);
            $nhanvien->unsignedInteger('quyen');
            $nhanvien->foreign('quyen')->references('idQuyen')->on('quyen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('nhanvien');
    }
}
