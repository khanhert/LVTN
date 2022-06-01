<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class GioHangController extends Controller
{
    public function themvaoGioHang(Request $request, $masp)
    {

        $sp = DB::table('san_pham')->where('masp', $masp)->first();
        if ($sp == null)
            echo json_encode(array('n' => "0"));
        else {
            Cart::add($sp->masp, $sp->tensp, $request->SoLuong, $sp->dongia, ['hinh' => $sp->hinhanh]);
            echo json_encode(array('n' => Cart::count()));
        }
    }
    public function ThongTinGioHang()
    {
        return view('layout_user.thong_tin_gio_hang');
    }
    public function CapNhatGioHang(Request $request)
    {
        $rowID = $request->Th_rowID;
        $soLuong = $request->Th_soluong * 1;
        Cart::update($rowID, $soLuong);
        return redirect('gio_hang/thong_tin_gio_hang');
    }
    public function XoaMatHang($masp)
    {
        Cart::remove($masp);
        return redirect()->back();
    }
    public function tienhanhDatHang(Request $request)
    {
        if (Session::has('user')) {
            return redirect('gio_hang/thong_tin_khach_hang');
        } else {
            return redirect('/khach_hang/dang_nhap');
        }
    }
}
