<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    protected $table='chi_tiet_don_hang';
    protected $fillable=['maddh', 'madh', 'masp', 'soluong', 'dongia', 'thanhtien', 'thue', 'makhach', 'sdt', 'email', 'diachi', 'ngaytao', 'ngaysua'];
}
