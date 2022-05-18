<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiamGia extends Model
{
    protected $table='giam_gia';
    protected $fillable=[
        'magiam', 'phantramgiam', 'noidung', 'ngaytao', 'ngaysua'
    ];
}
