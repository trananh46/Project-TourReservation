<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = 'khachhang';
    public $timestamps = false;
    public $primaryKey = 'idKhachHang';
}
