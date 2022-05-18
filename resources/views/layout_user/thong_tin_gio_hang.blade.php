@extends('master_user')
@section('title', 'Giỏ Hàng')
@section('giohang')
@include('layout_user.header')

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="#">Trang Chủ</a></li>
              <li class="active">Giỏ Hàng</li>
            </ol>
        </div>
        @if (Cart::count()===0)
        <h3 style="text-align: center;">Giỏ hàng rỗng, 
            <a href="{{url('/')}}">Tiếp tục mua hàng</a>
        </h3>
        @else
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Sản Phẩm</td>
                        <td class="description"></td>
                         <td class="quantity">Số Lượng</td>
                         <td class="price">Giá Tiền</td>
                        <td class="total">Thành Tiền</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach (Cart::content() as $row)
                    <tr>
                        <td class="cart_product">
                            <a href=""><img style="width:100px;heigh:200px" src="{{ URL::asset('resources/css_js_images_master_user/images/images')}}/{{$row->options->hinh}}" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{$row->name}}</a></h4>
                           
                        </td>
                        <td class="cart_quantity">
                            <form class="form-inline" method="post" action="{{ url('gio_hang/cap_nhat_gio_hang')}}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" value="{{ $row->rowId }}" name="Th_rowID">
                           <!-- <select name="Th_soluong" class="form-control" style="width: 100px; text-align: center;">
                                {{-- @for ($i = 1; $i <= 10; $i++)
                                    @if ($i == ($row->qty*1))
                                     <option value="{{ $i }}" selected="selected">{{ $i }}</option>
                                 @else
                                     <option value="{{ $i }}">{{ $i }}</option>
                                 @endif
                             @endfor --}}
                                </select>!-->
                                <input type="number" name="Th_soluong" class="form-control quantity" min="1" max="100" value="{{$row->qty}}">
                                <input type="submit" name="Th_submit" value="Cập nhật" class="btn btn-primary btn-sm">
                            </form>	
                        </td>
                        <td class="cart_price">
                            <p>{{number_format($row->price)}}đ</p>
                        </td>
                       
                        <td class="cart_total">
                            <p class="cart_total_price">{{ number_format($row->qty*$row->price) }} đ</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href="{{url('gio_hang/xoa_mat_hang/')}}/{{$row->rowId}}"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                            <table class="table table-condensed total-result">
                                <tr>
                                   
                                </tr>
                                <tr class="shipping-cost">
                                    <td>Tổng tiền</td>
                                    <td><span><?php echo Cart::subtotal(); ?></span></td>									
                                </tr>
                                <tr>
                                    <td> <a href="{{url('gio_hang/tien_hanh_dat_hang')}}" style="text-align:right" class=" btn btn-primary "> Tiến Hành Đặt Hàng</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                  
                </tbody>
            </table>
       
        </div>
        @endif
        
    </div>
</section> <!--/#cart_items-->

@include('layout_user.footer')
@endsection