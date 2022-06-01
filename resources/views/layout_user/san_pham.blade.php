@foreach ($sp as $item)
    <div class="col-sm-4">
        <div class="product-image-wrapper">

            <div class="single-products">

                <div class="productinfo text-center">
                    <img style="width: 260px ; height: 250px"
                        src="{{ URL::asset('resources/css_js_images_master_user/') }}/images/images/{{ $item->hinhanh }}"
                        alt="" />
                    <h2></h2>
                    <p
                        style=" text-centter width: 200px;overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 2;height: 53px;display: -webkit-box;-webkit-box-orient: vertical;">
                        {{ $item->tensp }}</p>
                    <a class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>

                </div>

                <div class="product-overlay">
                    <div class="overlay-content">
                        <h2>{{ number_format($item->dongia) }}</h2>
                        <p>{{ $item->tensp }}</p>
                        @if ($item->soluong > 0)
                            <a href="#" name="{{ $item->masp }}" id="btnThemVaoGioHang" href=""
                                class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                                cart</a>
                        @elseif($item->soluong == 0)
                            <p style="color: red">Hết Hàng</p>
                        @endif

                    </div>

                </div>

            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="{{ url('/san_pham') }}/{{ $item->tenurl }}-{{ $item->masp }}"><i
                                class="fa fa-plus-square"></i>Xem Chi tiết</a></li>
                    <select id="SoLuong" style=" text-align: center">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </ul>

            </div>

        </div>
    </div>
@endforeach
@section('script')
    <script>
        $("*[id^=btnThemVaoGioHang]").click(function() {
            var id = $(this).attr('name');
            var SoLuong = $("#SoLuong").val();

            if (SoLuong <= 0) {
                alert('Vui lòng chọn Số lượng >0');
                return false;
            }

            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: '{{ url('gio_hang/them_vao_gio_hang/') }}/' + id,
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": id,
                    SoLuong:SoLuong
                },
                success: function(data) {
                    if (data.n == 0)
                        alert('Thêm vào giỏ hàng không thành công');
                        
                    else {
                        
                        alert('Thêm vào giỏ hàng thành công');
                       
                    }

                },
                error: function(xhr, status, error) {
                    alert(error);
                }
            });
            return false;
        });
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover();
        });
    </script>
@endsection
