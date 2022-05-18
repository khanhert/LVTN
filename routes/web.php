<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GioHangController;
use App\Http\Controllers\TrangChuController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\TestLayout;
use App\Models\SanPham;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('/')->group(function () {
    Route::get('/', [SanPhamController::class, 'index']);
    Route::get('/san_pham/{masp}', [SanPhamController::class, 'show']);
    Route::get('/loai_san_pham/{maloai}', [SanPhamController::class, 'dstheoLoai']);
    Route::get('/nha_san_xuat/{mansx}', [SanPhamController::class, 'dstheoNSX']);
});
Route::prefix('/gio_hang')->group(function(){
    Route::get('thong_tin_gio_hang',[GioHangController::class,'ThongTinGioHang']);
    Route::post('them_vao_gio_hang/{masp}',[GioHangController::class,'themvaoGioHang']);
    Route::post('cap_nhat_gio_hang', [GioHangController::class, 'CapNhatGioHang']);
    Route::get('xoa_mat_hang/{masp}', [GioHangController::class, 'XoaMatHang']);
});
