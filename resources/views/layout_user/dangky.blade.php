@extends('master_user')
@section('title','Đăng nhập');
@section('dangky')
@include('layout_user.header')

<section id="form"><!--form-->
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <h2 class="text-center ">Đăng Ký Tài Khoản</h2>
            <form>
                <div class="form-group">
                    <label>Tên Khách Hàng</label>
                    <input type="text" class="form-control" >
                  </div>
                  <div class="form-group">
                    <input type="radio"> Nam<br>
                    <input type="radio"> Nữ
                  </div>
                  <div class="form-group">
                    <label>Năm sinh</label>
                    <input type="date" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Số Điện Thoại</label>
                    <input type="text" class="form-control" >
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email </label>
                  <input type="email" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <input type="text" class="form-control" >
                </div>
                <button type="submit" class="btn btn-primary">Đăng ký</button>
              </form>
        </div>
        </div>
    </div>
</section><!--/form-->
@include('layout_user.footer')
@endsection
