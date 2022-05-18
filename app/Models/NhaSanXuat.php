<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhaSanXuat extends Model
{
    protected $table='nha_san_xuat';
    protected $fillable=['mansx', 'tennsx', 'xuatxu', 'mieuta', 'ngaytao', 'ngaysua'];

    protected $primaryKey='mansx';
}
