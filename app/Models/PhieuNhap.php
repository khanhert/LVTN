<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhieuNhap extends Model
{
    protected $table='phieu_nhap';
    protected $fillable=['maphieu', 'masp', 'dvt', 'soluong', 'dongia', 'thanhtien', 'ngaytao', 'ngaysua'];
}
