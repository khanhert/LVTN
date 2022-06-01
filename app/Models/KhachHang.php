<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table='khach_hang';
    protected $fillable=[
        'makhach', 'tenkhach', 'gioitinh', 'namsinh', 'sdt', 'email', 'diachi', 'ma_mang_xa_hoi','mang_xa_hoi' ,'ngaytao', 'ngaysua'
    ];
    public $timestamps = false; //set time to false
    public $date = false;
    public function khachhang()
    {
        return $this->belongsTo(Khach_hang::class);
    }
    protected $primaryKey='makhach';
}
