<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChucVu extends Model
{

    protected $table='chuc_vu';
    protected $fillable=[
        'idchucvu', 'chucvu'
    ];
}
