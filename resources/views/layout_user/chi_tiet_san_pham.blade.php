@extends('master_user')
@section('title', 'Chi tiết sản phẩm')
@section('chitiet')
    @include('layout_user.header')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        @include('layout_user.danh_muc')
                        <div class="brands_products">
                            <!--brands_products-->
                            <h2>Brands</h2>
                            @include('layout_user.nha_san_xuat')
                        </div>
                        <!--/brands_products-->


                        <!--price-range
                                                        <div class="price-range">
                                                            <h2>Price Range</h2>
                                                            <div class="well text-center">
                                                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                                                 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                                                            </div>
                                                        </div>
                                                        /price-range-->



                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="product-details">
                        <!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="{{ URL::asset('resources/css_js_images_master_user/') }}/images/images/{{ $masp->hinhanh }}"
                                    alt="" />
                            </div>
                            <div id="similar-product" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <a href=""><img style="width:90px ;height:90px"
                                                src="{{ URL::asset('resources/css_js_images_master_user/') }}/images/images/{{ $masp->hinhanh }}"
                                                alt="" /></a>
                                        <a href=""><img style="width:90px ;height:90px"
                                                src="{{ URL::asset('resources/css_js_images_master_user/') }}/images/images/{{ $masp->hinhanhphu1 }}"
                                                alt="" /></a>
                                        <a href=""><img style="width:90px ;height:90px"
                                                src="{{ URL::asset('resources/css_js_images_master_user/') }}/images/images/{{ $masp->hinhanhphu2 }}"
                                                alt="" /></a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-sm-7">
                            <div class="product-information">
                                <!--/product-information-->
                                <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                                <h2>{{ $masp->tensp }}</h2>
                                <img src="images/product-details/rating.png" alt="" />
                                <span>
                                    @foreach ($giam as $disc)
                                        @if ($masp->magiam == $disc->magiam)
                                            <h2 style="color: red">-{{ $disc->phantramgiam }}%</h2>
                                            <span><del style="color: red">{{ number_format($masp->dongia) }}</del></span>
                                            <span>{{ number_format($masp->dongia - ($masp->dongia * $disc->phantramgiam) / 100) }}</span>
                                        @endif
                                    @endforeach
                                    @if($masp->magiam == null)
                                            <span>{{ number_format($masp->dongia) }}</span>
                                    @endif
                                  
                                </span>
                                <span>
                                    <label>Số Lượng:</label>
                                    <input type="text" value="3" />
                                    <button type="button" class="btn btn-fefault cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        + Giỏ Hàng
                                    </button>
                                </span>
                                <p><b>Trạng thái:</b>
                                    @if ($masp->soluong == 0) 
                                        <b style="color: rgb(194, 54, 61)">Hết Hàng</b>
                                    @elseif($masp->soluong>0)
                                        <b style="color: rgb(54, 194, 54)">Còn Hàng</b>
                                @endif</p>
                                <!-- <p><b>Condition:</b> New</p>-->
                                @foreach ($brand as $item)
                                    @php
                                        if ($item->mansx == $masp->mansx) {
                                            echo "<p><b>Nhà Sản Xuất:</b>$item->tennsx</p>
                                                                <p><b>Xuất sứ:</b>$item->xuatsu</p>";
                                        }
                                    @endphp
                                @endforeach

                            </div>
                            <!--/product-information-->
                        </div>
                    </div>
                    <div class="category-tab shop-details-tab">
                        <!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li><a href="#details" data-toggle="tab">Details</a></li>
                                <li class="active"><a href="#reviews" data-toggle="tab">Reviews</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="details">
                                <div class="col-sm-12">
                                    <p>
                                    <h3>Đặc điểm</h3>
                                    {!! $masp->dacdiem !!}
                                    </p>
                                    <br>
                                    <p>
                                    <h3>Thông Số Kỹ Thuật</h3>
                                    {!! $masp->thongsokythuat !!}
                                    </p>

                                </div>
                            </div>
                            <div class="tab-pane fade active in" id="reviews">
                                <div class="col-sm-12">
                                    <ul>
                                        <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                                        <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                        <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur.</p>
                                    <p><b>Write Your Review</b></p>

                                    <form action="#">
                                        <span>
                                            <input type="text" placeholder="Your Name" />
                                            <input type="email" placeholder="Email Address" />
                                        </span>
                                        <textarea id="editor" name=""></textarea>

                                        <button type="button" class="btn btn-default pull-right">
                                            Gửi
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--/category-tab-->
                    <!--/product-details-->
                    <div class="recommended_items">
                        <!--recommended_items-->
                        <h2 class="title text-center">Sản Phẩm Gợi Ý</h2>
                        @include('layout_user.recommen')
                    </div>
                    <!--/recommended_items-->

                </div>
            </div>
        </div>
    </section>
    @include('layout_user.footer')

@endsection
@section('script')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
