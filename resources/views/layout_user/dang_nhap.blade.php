@extends('master_user')
@section('title','Đăng nhập');
@section('dangnhap')
@include('layout_user.header')
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="login-form"><!--login form-->
                    <h2>Đăng Nhập</h2>
                    <form action="#">
                        <input type="email" placeholder="Email" />
                        <input type="password" placeholder="Password" />
                        <span>
                            <input type="checkbox" class="checkbox"> 
                            Lưu Đăng Nhập
                        </span>
                        <button type="submit" class="btn btn-default">Login</button>
                        <br>
                        <a href="{{url('khach_hang/login')}}" style="background:#dd4b39 ;color:white " class="google btn"><i class="fa fa-google fa-fw">
                        </i> Login with Google+
                      </a>
                      <a href="#" style="background:#3B5998 ;color:white " class="google btn"><i class="fa fa-google fa-fw">
                    </i> Login with Facebook
                  </a>
                    </form>
                </div><!--/login form-->
            </div>
        </div>
    </div>
</section><!--/form-->
@include('layout_user.footer')
@endsection