<div class="panel-group category-products" id="accordian">
    <!--category-productsr-->
    <div class="panel panel-default">
        @foreach ($menu as $item)
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#{{ $item->madanhmuc }}">
                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                        {{ $item->tendanhmuc }}
                    </a>

                </h4>
            </div>
            <div id="{{ $item->madanhmuc }}" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul>
                        @foreach ($cat as $loai)
                            <li value="{{$item->madanhmuc}}">
                                @if ($item->madanhmuc==$loai->madanhmuc)
                                    <a href="{{url('loai_san_pham')}}/{{$loai->maloai}}">{{$loai->tenloai}}</a>   
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!--/category-products-->
