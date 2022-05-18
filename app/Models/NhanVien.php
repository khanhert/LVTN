<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    protected $table='nhan_vien';
    protected $fillable=['manv', 'tennv', 'ngaysinh', 'gioitinh', 'sdt', 'email', 'diachi', 'idchucvu', 'password', 'ngaytao', 'ngaysua'];
}
