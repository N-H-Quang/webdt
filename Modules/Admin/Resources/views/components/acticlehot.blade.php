<div class="col-4 col-sm-4 col-md-4 col-lg-4">
    <h5>Bài viết Nổi Bật</h5>
    <div class="listacticlehot">
        @foreach ($aticlehot as $item)
            
       
        <div class="acticle-item">
            <div class="acticle-img">
                <a href="">
                    <img src={{pare_url_file($item->a_avatar)}}>
                </a>
            </div>
            <div class="acticle_info">
            <h3 style="font-size: 16px;margin-top: 10px;margin-bottom: 10px">{{$item->a_name}}</h3>
            <p>{{$item->a_description}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>