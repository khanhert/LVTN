<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonDatHang extends Model
{
    protected $table='don_dat_hang';
    protected $fillable=['madh', 'makhach', 'thanhtien', 'ngaytao', 'ngaysua'];

}
