<div class="brands-name">
    <ul class="nav nav-pills nav-stacked">
        @foreach ($nsx as $item)
            
                 <li><a href="{{url('nha_san_xuat')}}/{{$item->mansx}}"> <span class="pull-right">({{$item->sosp}})</span>{{$item->tennsx}}</a></li>   
           
        @endforeach
        
    </ul>
</div>