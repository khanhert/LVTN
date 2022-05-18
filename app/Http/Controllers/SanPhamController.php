<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\GiamGia;
use App\Models\LoaiSanPham;
use App\Models\NhaSanXuat;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu=DanhMuc::get();
        $cat=LoaiSanPham::get();
        $sp=SanPham::orderBy('ngaytao','Desc')->limit(6)->get();
        $nsx=DB::table('nha_san_xuat')->join('san_pham','san_pham.mansx','=','nha_san_xuat.mansx')->select(array('nha_san_xuat.mansx','tennsx',DB::raw('COUNT(san_pham.masp) as sosp')))->groupBy('nha_san_xuat.mansx','tennsx')->get();
        $rec=SanPham::orderBy('maloai','Desc')->limit(3)->get();
        $rec2=SanPham::orderBy('maloai','ASC')->limit(3)->get();
        return view('layout_user.index_user',['menu'=>$menu,'cat'=>$cat,'sp'=>$sp,'nsx'=>$nsx,'rec'=>$rec,'rec2'=>$rec2]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($masp)
    {
        $arr_chuoi = explode('-', $masp);
        $_masp = $arr_chuoi[count($arr_chuoi) - 1];
        $masp=SanPham::find($_masp);
        $giamgia=GiamGia::get();
        $brand=NhaSanXuat::where('nha_san_xuat.mansx','=',$masp->mansx)->get();
        $menu=DanhMuc::get();
        $cat=LoaiSanPham::get();
        $sp=SanPham::orderBy('ngaytao','Desc')->limit(6)->get();
        $nsx=DB::table('nha_san_xuat')->join('san_pham','san_pham.mansx','=','nha_san_xuat.mansx')->select(array('nha_san_xuat.mansx','tennsx',DB::raw('COUNT(san_pham.masp) as sosp')))->groupBy('nha_san_xuat.mansx','tennsx')->get();
        $rec=SanPham::where('san_pham.maloai','=',$masp->maloai)->limit(3)->get();
        $rec2=SanPham::where('san_pham.mansx','=',$masp->mansx)->limit(3)->get();

        
        return view('layout_user.chi_tiet_san_pham',['masp'=>$masp,'nsx'=>$nsx,'menu'=>$menu,'cat'=>$cat,'sp'=>$sp,'nsx'=>$nsx,'rec'=>$rec,'rec2'=>$rec2,'brand'=>$brand,'giam'=>$giamgia]);
    }
    public function dstheoLoai($maloai){
        $arr_chuoi = explode('/', $maloai);
        $_maloai = $arr_chuoi[count($arr_chuoi) - 1];
        $maloai=LoaiSanPham::find($_maloai);
        $menu=DanhMuc::get();
        $nsx=DB::table('nha_san_xuat')->join('san_pham','san_pham.mansx','=','nha_san_xuat.mansx')->select(array('nha_san_xuat.mansx','tennsx',DB::raw('COUNT(san_pham.masp) as sosp')))->groupBy('nha_san_xuat.mansx','tennsx')->get();
        $sp=SanPham::where('san_pham.maloai','=',$maloai->maloai)->Paginate(10);
        $cat=LoaiSanPham::get();
        return view('layout_user.danh_sach_san_pham',['nsx'=>$nsx,'menu'=>$menu,'sp'=>$sp,'cat'=>$cat]);
    }
    public function dstheoNSX($mansx){
        $arr_chuoi = explode('/', $mansx);
        $_mansx = $arr_chuoi[count($arr_chuoi) - 1];
        $mansx=NhaSanXuat::find($_mansx);
        $menu=DanhMuc::get();
        $cat=LoaiSanPham::get();
        $nsx=DB::table('nha_san_xuat')->join('san_pham','san_pham.mansx','=','nha_san_xuat.mansx')->select(array('nha_san_xuat.mansx','tennsx',DB::raw('COUNT(san_pham.masp) as sosp')))->groupBy('nha_san_xuat.mansx','tennsx')->get();
        $sp=SanPham::where('san_pham.mansx','=',$mansx->mansx)->Paginate(10);
        return view('layout_user.danh_sach_san_pham',['nsx'=>$nsx,'menu'=>$menu,'sp'=>$sp,'cat'=>$cat]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
