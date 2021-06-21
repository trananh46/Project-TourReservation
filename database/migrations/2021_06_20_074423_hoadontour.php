<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Hoadontour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadontour', function (Blueprint $hoadontour) {
            $hoadontour->increments('idHoaDon');
            $hoadontour->unsignedInteger('idTour');
            $hoadontour->unsignedInteger('idKhachHang');
            $hoadontour->string('nameKhachHang', 100);
            $hoadontour->char('sdt', 10);
            $hoadontour->integer('soLuongNguoiLon');
            $hoadontour->integer('soLuongTreEm');
            $hoadontour->date('ngayDatTour');
            $hoadontour->text('ghiChu');
            $hoadontour->tinyInteger('trangThai');
            $hoadontour->foreign('idTour')->references('idTour')->on('tour');
            $hoadontour->foreign('idKhachHang')->references('idKhachHang')->on('khachhang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hoadontour');
    }
}
