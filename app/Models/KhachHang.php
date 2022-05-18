<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table='khach_hang';
    protected $fillable=[
        'makhach', 'tenkhach', 'gioitinh', 'namsinh', 'sdt', 'email', 'diachi', 'ma_mang_xa_hoi', 'ngaytao', 'ngaysua'
    ];
}
