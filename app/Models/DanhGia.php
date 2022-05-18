<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhGia extends Model
{
    protected $table='danh_gia';
    protected $fillable=[
        'madanhgia', 'noidungdanhgia', 'makhach', 'ngaytao', 'ngaysua'
    ];
}
