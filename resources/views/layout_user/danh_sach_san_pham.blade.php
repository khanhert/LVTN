@extends('master_user')
@section('title','Danh sách Sản')
@section('danhsachsanpham')
@include('layout_user.header')
@include('layout_user.slider')

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    @include('layout_user.danh_muc')
                
                    <div class="brands_products"><!--brands_products-->
                        <h2>Brands</h2>
                        @include('layout_user.nha_san_xuat')
                    </div><!--/brands_products-->


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
                <div class="features_items"><!--Product-->
                    <h2   class="title text-center"> Danh Sách Sản Phẩm </h2>
                        @include('layout_user.san_pham')
                </div><!--features_items-->
                <ul class="pagination justify-content-center ">
                   {{$sp->links()}}
                </ul>
            </div>
            
        </div>
    </div>
</section>
@endsection