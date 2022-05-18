<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="item active">
            @foreach ($rec as $item)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img style="width: 260px ; height: 250px" src="{{ URL::asset('resources/css_js_images_master_user/')}}/images/images/{{$item->hinhanh}}" alt="" />
                            <h2>{{number_format($item->dongia)}}</h2>
                            <p  style=" text-centter width: 200px;overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 2;height: 53px;display: -webkit-box;-webkit-box-orient: vertical;">{{$item->tensp}}</p>
                            <a href="" name="{{ $item->masp }}" id="btnThemVaoGioHang" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="choose">
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="{{url('/san_pham')}}/{{$item->tenurl}}-{{$item->masp}}"><i class="fa fa-plus-square"></i>Xem Chi tiết</a></li>
                              
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="item">	
            @foreach ($rec2 as $item1)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img style="width: 260px ; height: 250px" src="{{ URL::asset('resources/css_js_images_master_user/')}}/images/images/{{$item1->hinhanh}}" alt="" />
                            <h2>{{number_format($item1->dongia)}}</h2>
                            <p  style=" text-centter width: 200px;overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 2;height: 53px;display: -webkit-box;-webkit-box-orient: vertical;">{{$item1->tensp}}</p>
                            <a href="" name="{{ $item1->masp }}" id="btnThemVaoGioHang" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="choose">
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="{{url('/san_pham')}}/{{$item->tenurl}}-{{$item1->masp}}"><i class="fa fa-plus-square"></i>Xem Chi tiết</a></li>
                              
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
  
    <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
        <i class="fa fa-angle-left"></i>
    </a>
    <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
        <i class="fa fa-angle-right"></i>
    </a>
    
</div>
