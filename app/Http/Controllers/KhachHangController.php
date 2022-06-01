<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Dflydev\DotAccessData\Data;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KhachHangController extends Controller
{
    public function index()
    {
        return view('layout_user.dang_nhap');
    }
    public function loginGoogle(Request $request)
    {
        if ($request->session()->has('user')) {
            return redirect('/')->with('alert', 'Bạn Đã Đăng Nhập');
        } else
            return Socialite::driver('google')->redirect();
    }
    public function callbackGoogle(Request $request)
    {
        try {
            $users = Socialite::driver('google')->user();

            $_user = KhachHang::where('email', $users->getEmail())->first();
            if (!$_user) {
                $saveUser = KhachHang::updateOrCreate([
                    'ma_mang_xa_hoi' => $users->getId(),
                    'tenkhach' => $users->getName(),
                    'gioitinh' => '',
                    'email' => $users->getEmail(),
                    'sdt' => '',
                    'mang_xa_hoi' => 'GOOGLE'

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
                Alert::success('Đăng nhập thành công');
                return redirect('/');
            } else
                Alert::error('Đăng nhập không thành công');
            return redirect();
            return redirect('/');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function logout(Request $request)
    {
        if ($request->session()->has('user')) {
            $request->session()->forget('user');
            return redirect('/')->with('alert', 'Bạn Đã Đăng Xuất');
        }
    }

    public function signin()
    {
        return view('layout_user.dangky');
    }
    public function dangky(Request $request)
    {

        $this->validate(
            $request,
            [
                'gioitinh' => 'required',
            ]

        );
        $khach = KhachHang::select('makhach', 'email')->where('email', $request->email)->get();
        if (count($khach) > 0) {
            Alert::error('Email đã được sử dụng');
            return redirect('/khach_hang/dang_ky');
        }
        $data = $request->all();
        $kh = new KhachHang();

        $kh->tenkhach = $data['tenkhach'];
        $kh->email = $data['email'];
        $kh->gioitinh = $data['gioitinh'];
        $kh->diachi = $data['diachi'];
        $kh->matkhau = md5($data['password']);
        $kh->sdt = $data['sdt'];
        $kh->namsinh = $data['ngaysinh'];
        $result = $kh->save();

        if ($result) {
            Alert::success('Đăng ký thành công');
            return redirect('/khach_hang/dang_nhap');
        } else {
            Alert::error('Đăng ký không thành công');
            return redirect('/khach_hang/dang_ky');
        }
    }
    public function PostLogin(Request $request)
    {

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',

        ]);
        if ($request->session()->has('user')) {
            Alert::waring('Bạn đã đăng nhập');
            return redirect('/');
        } else {
            $email = $request->input('email');
            $password = $request->input('password');
            $kh = KhachHang::where(['matkhau' => md5($password), 'email' => $email])->first();

            if ($kh) {
                $request->session()->put('user', $kh);
                Alert::success('Đăng nhập thành công');
                return redirect('/');
            } else {
                Alert::error('Đăng nhập không thành công');
                return redirect('/khach_hang/dang_nhap');
            }
        }
    }
 
 
}
