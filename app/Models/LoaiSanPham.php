<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    protected $table='loai_san_pham';
    protected $fillable=['maloai', 'tenloai', 'mieuta', 'madanhmuc', 'ngaytao', 'ngaysua'];

    protected $primaryKey='maloai';
}
