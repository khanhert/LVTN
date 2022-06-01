@extends('master_user')
@section('title', 'Đăng Ký');
@section('dangky')
    @include('layout_user.header')

    <section id="form">
        <!--form-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center ">Đăng Ký Tài Khoản</h2>
                    <form action="{{ URL('khach_hang/dang_ky') }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="form-group">
                            <label>Tên Khách Hàng</label>
                            <input type="text" id="tenkhach" class="form-control" name="tenkhach">
                        </div>
                        <div class="form-group">
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio"  name="gioitinh" id="inlineRadio1"
                                  value="1">
                              <label class="form-check-label" for="inlineRadio1">Nam</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="gioitinh" id="inlineRadio2"
                                  value="0">
                              <label class="form-check-label" for="inlineRadio2">Nữ</label>
                          </div>
                      </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email </label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label id="tb" for="exampleInputEmail1">Mật Khẩu </label>
                            <input type="password" 
                            autocomplete="on" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label id="thongbao" for="exampleInputEmail1">Xác Mật Khẩu  </label>
                            <input type="password" name="passcheck" id="passwordcheck" onkeyup="kiemtratrung()"
                            autocomplete="on"  class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Năm sinh</label>
                            <input type="date" name="ngaysinh" id="ngaysinh" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Số Điện Thoại</label>
                            <input type="text" name="sdt" id="sdt" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" name="diachi" id="diachi" class="form-control">
                        </div>
                        <button onclick="checkinfo()" type="submit" class="btn btn-primary">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--/form-->
    @include('layout_user.footer')
@endsection
@section('script')
    <script>
        let pass = document.getElementById('password');
        let passcheck = document.getElementById('passwordcheck');
        let tenkhach=document.getElementById('tenkhach');
        let email=document.getElementById('email');
        let diachi=document.getElementById('diachi');
        let sdt=document.getElementById('sdt');
        let ngaysinh=document.getElementById('ngaysinh')

        function kiemtratrung() {
            if (pass.value != passcheck.value) {
                let thongbao = document.getElementById('thongbao').innerHTML = "Mật khẩu chưa trùng khớp";
                
            }
            else if(pass.value == passcheck.value){
              let thongbao = document.getElementById('thongbao').innerHTML = "Mật trùng khớp";
            }
        }
            function checkinfo(){

              if(pass.lenght<8){
                let thongbao = document.getElementById('tb').innerHTML = "Mật phải có 8 ký tự trở lên";
              }

              if(tenkhach.value==''){
                alert('tên khách không được trống');
              }
             else if(email.value=='')
              {
                alert('chưa nhập email');
              }
              else if(diachi.value=='')
              {
                alert('Hãy nhập địa chỉ');
              }
              else if(sdt.value=='')
              {
                alert('Chưa nhập số điện thoại');
              }
              else if(pass.value=='')
              {
                alert('Mật Khẩu còn thiếu');
              }
              else if(passcheck.value=='')
              {
                alert('Vui lòng xác nhận mật khẩu');
              }
        }

    </script>
@endsection
