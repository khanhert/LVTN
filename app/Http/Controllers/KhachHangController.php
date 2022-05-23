<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    public function index()
    {
        return view('layout_user.dang_nhap');
    }
    public function loginGoogle(Request $request){
        if ($request->session()->has('user')) {
            return redirect('/')->with('alert', 'Bạn Đã Đăng Nhập');
        } else
            return Socialite::driver('google')->redirect();
    }
    public function callbackGoogle(Request $request)
    {
        try {
            $users = Socialite::driver('google')->user();
           //dd($users);
            $_user = KhachHang::where('email', $users->getEmail())->first();
            if (!$_user) {
                $saveUser = KhachHang::updateOrCreate([
                    'ma_mang_xa_hoi' => $users->getId(),
                    'tenkhach' => $users->getName(),
                    'gioitinh'=>'',
                    'email' => $users->getEmail(),
                    'sdt'=>'',
                    'mang_xa_hoi'=>'GOOGLE'
                    
                ]);
            } else {
                $saveUser = KhachHang::updateOrCreate([
                    'ma_mang_xa_hoi' => $users->getId(),

                ]);
                $saveuser = KhachHang::where('email', $users->getEmail())->first();
            }
            $useraccount = KhachHang::where('email', $users->getEmail())->first();
            if ($useraccount) {
                $request->session()->put('user', $useraccount);
                return redirect('/');
            } else
                return redirect()->back()->with('alert', 'Đăng nhập không thành công');
            return redirect('/');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
