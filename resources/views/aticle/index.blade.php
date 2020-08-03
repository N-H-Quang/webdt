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
                        <li class="category3"><span>liên hệ</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-contact-area">
    <div class="container">
        <div class="row">
            
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <div class="contact-us-area">
                    @isset($aticle)
                    @foreach ($aticle as $item)
                    <div class="article" style="display: flex;margin-bottom: 10px;padding-bottom: 10px;border: 1px solid #f2f2f2;">
                        <div class="ariticle_avatar">
                        <a href="{{route('get.detail.article',[$item->a_slug,$item->id])}}">
                        <img style="width: 200px;height :100px; max-width: none" src="{{pare_url_file($item->a_avatar)}}"/></a>
                        </div>
                        <div class="ariticle_infor" style="width: 80%; margin-left: 10px;display:inline-block">
                        <h2 style="margin-bottom: 0"><a href="{{route('get.detail.article',[$item->a_slug,$item->id])}}">{{$item->a_name}}</a></h2>
                        <p>{!!$item->a_description!!}</p>
                        <p>{{$item->a_author_id}} <span>{{$item->created_at}}</span></p>
                        </div>
                    </div>
                    @endforeach
                    @endisset
                </div>
                {!!$aticle->links()!!}					
            </div>
            @include('admin::components.acticlehot')
            
        </div>
    </div>	
</div>
<style>
    .contact-us-area h2
    {
    font-size: 16px !important;
    }
    .contact-us-area h3
    {
    font-size: 12px !important;
    }
    .contact-us-area h4
    {
    font-size: 10px !important;
    }
    .contact-us-area p
    {
    font-size: 13px !important;
    }
</style>
@endsection