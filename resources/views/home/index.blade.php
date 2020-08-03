@extends('layout.app')
@section('content')
<!-- header area end -->
<!-- start home slider -->
<div class="slider-area an-1 hm-1">
    <!-- slider -->
    @include('master.slide')
    <!-- slider end-->
</div>
<!-- end home slider -->
<!-- product section start -->
<div class="our-product-area">
<div class="container">
    <!-- area title start -->
    <div class="area-title">
        <h2>Sản phẩm nổi bật</h2>
    </div>
    <!-- area title end -->
    <!-- our-product area start -->
    <div class="row">
        <div class="col-md-12">
            <div class="features-tab">
                <!-- Nav tabs -->
                <!-- Tab pans -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                        <div class="row">
                            <div class="features-curosel">
                                @foreach ($producthot as $item)
                                <div class="col-lg-12 col-md-12">
                                    <!-- single-product start -->
                                    <div class="single-product ">
                                        <div class="product-img">
                                            @if($item->pro_number==0)
                                            <span  style="color: white;
                                                background-color: silver;
                                                position: absolute;
                                                border-radius: 5px 5px;
                                                font-size: 15px">Tạm Hết hàng</span>	
                                            @endif
                                            @if($item->pro_sale>0)
                                            <span style="
                                                right: 0;
                                                background-image: linear-gradient(-90deg,#ec1f1f 0%,#ff9c00 100%); border-radius: 10px;padding: 1px 7px;padding-left: 0;padding-right: 10px;
                                                position: absolute ;">{{$item->pro_sale}} %</span>
                                            @endif
                                            <a href="{{route('get.detail.product',[$item->pro_slug,$item->id])}}">
                                            <img class="primary-image" src="{{pare_url_file($item->pro_avatar)}}" class="h-100 img-responsive" alt="" >
                                            </a>
                                            <div class="action-zoom">
                                                <div class="add-to-cart">
                                                    <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <div class="action-buttons">
                                                    <div class="add-to-links">
                                                        <div class="add-to-wishlist">
                                                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a href="{{route('add.shopping.carts',[$item->id])}}" title="Add to Cart"><i class="icon-bag"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="quickviewbtn">
                                                        <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">{{$item->pro_price}}</span>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">{{$item->pro_name}}</a></h2>
                                            <p>{{$item->pro_description}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- our-product area end -->	
    </div>
</div>
@include('admin::components.productsuggest')
<div  id="productsview"></div>
<!-- product section end -->
<!-- banner-area start -->
{{-- @include('master.banner') --}}
<!-- banner-area end -->
<!-- latestpost area start -->
<div class="latest-post-area">
    <div class="container">
        <div class="area-title">
            <h2>Bài Viết Mới</h2>
        </div>
        <div class="row">
            <div class="all-singlepost">
                <!-- single latestpost start -->
                @foreach ($article as $item)
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-post">
                        <div class="post-thumb">
                            <a href="{{route('get.detail.article',[$item->a_slug,$item->id])}}">
                            <img src="{{pare_url_file($item->a_avatar)}}" alt="" id='img_a_avatar'/>
                            </a>
                        </div>
                        <div class="post-thumb-info">
                            <div class="post-time">
                                <a href="{{route('get.detail.article',[$item->a_slug,$item->id])}}">{{$item->a_name}}</a>
                                <span>/</span>
                                <span>Post by</span>
                                <span>BootExperts</span>
                            </div>
                            <div class="postexcerpt">
                                <p>{{$item->a_description_seo}}</p>
                                <a href="#" class="read-more">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- latestpost area end -->
<!-- block category area start -->
<div class="block-category">
    <div class="container">
        <div class="row">
            @isset($Category)
            <!-- featured block start -->
            @foreach ($Category as $item)
            <div class="col-md-4">
                <!-- block title start -->
                <div class="block-title">
                    <h2>{{$item->c_name}}</h2>
                </div>
                <!-- block title end -->
                <!-- block carousel start -->
                @isset($item->products)
                <div class="block-carousel">
                    @foreach($item->products as $items)
                    <div class="block-content">
                        <!-- single block start -->
                        <div class="single-block">
                            <div class="block-image pull-left">
                                <a href="{{route('get.detail.product',[$items->pro_slug,$items->id])}}"><img src="{{pare_url_file($items->pro_avatar)}}" width="170px" height="208px"  alt="" /></a>
                            </div>
                            <div class="category-info">
                                <h3><a href="{{route('get.detail.product',[$items->pro_slug,$items->id])}}">{{$items->pro_name}}</a></h3>
                                <p>{{$items->pro_description}}</p>
                                <div class="cat-price">{{number_format($items->pro_price*$items->pro_sale/100,0,',','.')}} <span class="old-price">{{number_format($items->pro_price,0,',','.')}}</span></div>
                                <div class="cat-rating">
                                    @for($i=1;$i<=5;$i++)
                                    <a href="#"><i class="fa fa-star {{$items->pro_total_rating!=0? ($items->pro_total_number/$items->pro_total_rating>=$i ?'active':''):' '}}"></i></a>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- block carousel end -->
            </div>
            <!-- featured block end -->	
            @endisset
            @endforeach
            @endisset
        </div>
    </div>
</div>
<!-- block category area end -->
<!-- testimonial area start -->
<div class="testimonial-area lap-ruffel">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="crusial-carousel">
                    <div class="crusial-content">
                        <p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
                        <span>BootExperts</span>
                    </div>
                    <div class="crusial-content">
                        <p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
                        <span>Lavoro Store!</span>
                    </div>
                    <div class="crusial-content">
                        <p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
                        <span>MR Selim Rana</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial area end -->
<!-- Brand Logo Area Start -->
<div class="brand-area">
    <div class="container">
        <div class="row">
            <div class="brand-carousel">
                <div class="brand-item"><a href="#"><img src="img/brand/bg1-brand.jpg" alt="" /></a></div>
                <div class="brand-item"><a href="#"><img src="img/brand/bg2-brand.jpg" alt="" /></a></div>
                <div class="brand-item"><a href="#"><img src="img/brand/bg3-brand.jpg" alt="" /></a></div>
                <div class="brand-item"><a href="#"><img src="img/brand/bg4-brand.jpg" alt="" /></a></div>
                <div class="brand-item"><a href="#"><img src="img/brand/bg5-brand.jpg" alt="" /></a></div>
                <div class="brand-item"><a href="#"><img src="img/brand/bg2-brand.jpg" alt="" /></a></div>
                <div class="brand-item"><a href="#"><img src="img/brand/bg3-brand.jpg" alt="" /></a></div>
                <div class="brand-item"><a href="#"><img src="img/brand/bg4-brand.jpg" alt="" /></a></div>
            </div>
        </div>
    </div>
</div>
<!-- Brand Logo Area End -->
@endsection
@section("style")
<style>
    .category-info	.active
    {
    color: #ff9c00;
    }
</style>
@endsection
@section('script')
<script>
    $(function()
     {
	let checkren=false;
    let routerenderproduct="{{route("post.product.viewed")}}";
    $(document).on('scroll', function(){
     if($(window).scrollTop()>400 && checkren==false)
    {
    
     let arrayproduct=localStorage.getItem('products');
     arrayproduct=$.parseJSON(arrayproduct);
     if(arrayproduct.length>0)
     {
    $.ajax({
                  type:'POST',
                  url:routerenderproduct,
                  data:{id:arrayproduct},
                  success:function(data) {
					  console.log(arrayproduct);
                    $("#productsview").html(" ").append(data.data)
                  }
               });
     }
	 checkren=true;
    }
    });
     })
    
</script>
@endsection