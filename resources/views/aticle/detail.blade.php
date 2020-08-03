@extends('layout.app')
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container-inner">
                    <ul>
                        <li class="home">
                            <a href="index.html">Trang chủ</a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="home">
                            <a href="index.html">Bài Viết</a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="category3"><span>chi tiết bài viết</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-contact-area">
    <div class="container">
        <div class="row">
            @isset($aticledetail)
            <div class="aticledetail" >
                <div class="banner-area">
                    <h1>{{$aticledetail->a_name}}</h1>
                    <p>Lăng Văn Nhàn<span style="padding-left: 10px"><i class="fa fa-clock-o">10 h trước</i></span> </p>
                </div>
                <div class="banner-img">
                    <img src="{{pare_url_file($aticledetail->a_avatar)}}" style="width:100%; height: 450px">
                </div>
                <div class="content" style="text-align: left">
                    {!!$aticledetail->a_content!!}
                </div>
            </div>
            @endisset
            <div class="aticlelist " style="text-align: center">
                <h1 style="color: coral">Danh Sách Bài viết</h1>
            <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true }' style="margin: auto">
                @isset($aticle)
                @foreach ($aticle as $item)
                <div class="carousel-cell" style="display: block">
                   
                    <div style="position: relative">
                    <img src="{{pare_url_file($item->a_avatar)}}">
                    <h1 style="position: absolute; color: black;top: 50%;transform: translateY(-25px) translateX(10px);"><a href="{{route('get.detail.article',[$item->a_slug,$item->id])}}">{{$item->a_name}}</a></h1>
                    </div>
              </div>
              @endforeach
              @endisset
        </div>
    </div>
    </div>
</div>
<style>

    .content h2 
    {
        font-size: 1.4rem !important;
    }
    .content
    {
        font-family: cursive;
    }
    .main-carousel img
    {
        width: 100%;
        height: 450px;
    }

    .carousel-cell {
  width: 100%; /* full width */ /* height of carousel */
  margin-right: 10px;
}
.main-carousel
{
    max-width: 90%;
    max-height: 450px;
}

    .main-contact-area h1
    {
    color: #333;
    }
    .main-contact-area h2
    {
    font-size: 20px ;
    }
    .main-contact-area h3
    {
    font-size: 16px !important;
    }
    .main-contact-area h4
    {
    font-size: 10px !important;
    }
    .main-contact-area p
    {
    font-size: 16px !important;
    }
</style>
@endsection
@section('carosel')
<link rel="stylesheet" href="{{asset('css/carosel.css')}}">
<script  src="{{asset('js/carosel.js')}}"></script>
<script>
    $('.main-carousel').flickity({
        // options
        cellAlign: 'left',
        contain: true
    });
    
</script>
@endsection 