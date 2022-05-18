<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table='san_pham';
    protected $fillable=[
        'masp', 'tensp', 'tenurl', 'dongia', 'mansx', 'soluong', 'maloai', 'magiam', 'dacdiem', 'thongsokythuat', 'cacbaitap', 'hinhanh', 'hinhanhphu1', 'hinhanhphu2', 'ngaytao', 'ngaysua'
    ];
    protected $primaryKey = 'masp';
}
