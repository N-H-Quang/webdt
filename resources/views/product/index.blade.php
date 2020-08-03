@extends('layout.app')
@section('content')
<!-- category-banner area end -->
<!-- breadcrumbs area start -->
<</div>
<!-- category-banner area end -->
<!-- breadcrumbs area start -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container-inner">
                    <ul>
                        <li class="home">
                            <a href="/">Trang chủ</a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        @isset($cateproduct->c_name)
                            
                        
                        <li class="category3">{{$cateproduct->c_name}}<span></span></li>
                        @endisset
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs area end -->
<!-- shop-with-sidebar Start -->
<div class="shop-with-sidebar">
    <div class="container">
        <div class="row">
            <!-- left sidebar start -->
            <div class="col-md-3 col-sm-12 col-xs-12 text-left">
                <div class="topbar-left">
                    <aside class="widge-topbar">
                        <div class="bar-title">
                            <div class="bar-ping"><img src="{{asset('img/bar-ping.png')}}" alt=""></div>
                            <h2>Lọc Điều kiện</h2>
                        </div>
                    </aside>
                    {{-- <aside class="sidebar-content">
                        <div class="sidebar-title">
                            <h6>Categories</h6>
                        </div>
                        <ul class="sidebar-tags">
                            <li><a href="#">Acsessories</a><span> (14)</span></li>
                            <li><a href="#">Afternoon</a><span> (14)</span></li>
                            <li><a href="#">Attachment</a><span> (14)</span></li>
                            <li><a href="#">Beauty</a><span> (14)</span></li>
                        </ul>
                    </aside> --}}
                    <aside class="sidebar-content">
                        <div class="sidebar-title">
                            <h6>Khoảng giá</h6>
                        </div>
                        <ul class="price_sort">
                        <li><a class="{{request()->get('price')==1 ? 'active':''}}" href="{{request()->fullUrlWithQuery(['price'=>1])}}">Dưới 1 triệu</a></li>
                            <li><a class="{{request()->get('price')==2 ? 'active':''}}" href="{{request()->fullUrlWithQuery(['price'=>2])}}">1.000.000-3.000.000</a></li>
                            <li><a class="{{request()->get('price')==3 ? 'active':''}}" href="{{request()->fullUrlWithQuery(['price'=>3])}}">3.000.000-5.000.000</a></li>
                            <li><a class="{{request()->get('price')==4 ? 'active':''}}" href="{{request()->fullUrlWithQuery(['price'=>4])}}">3.000.000-7.000.000</a></li>
                            <li><a class="{{request()->get('price')==5 ? 'active':''}}" href="{{request()->fullUrlWithQuery(['price'=>5])}}">7.000.000-10.000.000</a></li>
                            <li><a class="{{request()->get('price')==6 ?'active':''}}" href="{{request()->fullUrlWithQuery(['price'=>6])}}">Hơn 10 triệu</a></li>
                        </ul>
                    </aside>
                    <aside class="widge-topbar">
                        <div class="bar-title">
                            <div class="bar-ping"><img src="{{asset('img/bar-ping.png')}}" alt=""></div>
                            <h2>Tags</h2>
                        </div>
                        <div class="exp-tags">
                            <div class="tags">
                                <a href="#">Nokia</a>
                                <a href="#">Iphone</a>
                                <a href="#">Giá rẻ</a>
                                <a href="#">hàng củ</a>
                                <a href="#">Đồ gia dụng</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            <!-- left sidebar end -->
            <!-- right sidebar start -->
            <div class="col-md-9 col-sm-12 col-xs-12">
                <!-- shop toolbar start -->
                <div class="shop-content-area">
                    <div class="shop-toolbar">
                        <div class="col-md-12 col-sm-12 col-xs-12 nopadding-left text-right">
                            <form class="tree-most" id="form_order" method="get">
                                <div class="orderby-wrapper">
                                    <label>Sắp xếp</label>
                                    <select name="orderby" class="orderby">
                                        <option value="md" {{request()->get('orderby')=='md' ?'Selected':''}} >Mặc Định</option>
                                        <option value="desc" {{request()->get('orderby')=='desc' ?'Selected':''}}>Mới Nhất</option>
                                        <option value="asc" {{request()->get('orderby')=='asc' ?'Selected':''}}>Sản phẩm củ</option>
                                        <option value="price_max" {{request()->get('orderby')=='price_max' ?'Selected':''}}>Giá tăng dần</option>
                                        <option value="price_min" {{request()->get('orderby')=='price_min' ?'Selected':''}}>giá giảm dần</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                   
                    </div>
                </div>
                <!-- shop toolbar end -->
                <!-- product-row start -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="shop-grid-tab">
                        <div class="row">
                            @foreach ($product as $item)
                            <div class="shop-product-tab first-sale">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="two-product">
                                        <!-- single-product start -->
                                        <div class="single-product">
                                            @if($item->pro_number==0)
														<span  style="color: white;
														background-color: silver;
														position: absolute;
														border-radius: 5px 5px;
                                                        font-size: 15px;
                                                        z-index:9;">Tạm Hết hàng</span>	
														@endif
														@if($item->pro_sale>0)
														<span style="
														right: 0;
														background-image: linear-gradient(-90deg,#ec1f1f 0%,#ff9c00 100%); border-radius: 10px;padding: 1px 7px;padding-left: 0;padding-right: 10px;
                                                    position: absolute ;
                                                    z-index: 9;">{{$item->pro_sale}} %</span>
														@endif
                                            <span class="sale-text">Sale</span>

                                            <div class="product-img">
                                            <a href="{{route('get.detail.product',[$item->pro_slug,$item->id])}}">
                                                <img class="primary-image" src="{{asset(pare_url_file($item->pro_avatar))}}" alt="" />
                                                <img class="secondary-image" src="{{asset(pare_url_file($item->pro_avatar))}}" alt="" />
                                                </a>
                                                <div class="action-zoom">
                                                    <div class="add-to-cart">
                                                        <a href="{{route('get.detail.product',[$item->pro_slug,$item->id])}}" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="{{route('get.detail.product',[$item->pro_slug,$item->id])}}" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="{{route('add.shopping.carts',[$item->id])}}" title="Add to Cart"><i class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="{{route('get.detail.product',[$item->pro_slug,$item->id])}}" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">{{number_format($item->pro_price,0,',','.')}}</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="{{route('get.detail.product',[$item->pro_slug,$item->id])}}">{{$item->pro_name}}</a></h2>
                                                <p>   {{$item->pro_description}}                                       
                                                    </p >
                                            </div>
                                        </div>
                                        <!-- single-product end -->
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{$product->appends($query)->links()}}
                        </div>
                        <!-- product-row end -->
                        <!-- product-row start -->
                    </div>
                    <!-- list view -->
                    <div class="tab-pane fade" id="shop-list-tab">
                        <div class="list-view">
                            <!-- single-product start -->
                            <div class="product-list-wrapper">
                                <div class="single-product">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="product-img">
                                            <a href="#">
                                            <img class="primary-image" src="{{asset('img/products/product-7.jpg')}}" alt="" />
                                            <img class="secondary-image" src="{{asset('img/products/product-2.jpg')}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Cras neque metus</a></h2>
                                            <div class="rating-price">
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="price-boxes">
                                                    <span class="new-price">$110.00</span>
                                                </div>
                                            </div>
                                            <div class="product-desc">
                                                <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
                                            </div>
                                            <div class="actions-e">
                                                <div class="action-buttons">
                                                    <div class="add-to-cart">
                                                        <a href="#">Add to cart</a>
                                                    </div>
                                                    <div class="add-to-links">
                                                        <div class="add-to-wishlist">
                                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->	
                            <!-- single-product start -->
                            <div class="product-list-wrapper">
                                <div class="single-product">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="product-img">
                                            <a href="#">
                                            <img class="primary-image" src="{{asset('img/products/product-7.jpg')}}" alt="" />
                                            <img class="secondary-image" src="{{asset('img/products/product-8.jpg')}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Donec non est</a></h2>
                                            <div class="rating-price">
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="price-boxes">
                                                    <span class="new-price">$450.00</span>
                                                </div>
                                            </div>
                                            <div class="product-desc">
                                                <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
                                            </div>
                                            <div class="actions-e">
                                                <div class="action-buttons">
                                                    <div class="add-to-cart">
                                                        <a href="#">Add to cart</a>
                                                    </div>
                                                    <div class="add-to-links">
                                                        <div class="add-to-wishlist">
                                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class="product-list-wrapper">
                                <div class="single-product">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="product-img">
                                            <a href="#">
                                            <img class="primary-image" src="{{asset('img/products/product-5.jpg')}}" alt="" />
                                            <img class="secondary-image" src="{{asset('img/products/product-6.jpg')}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Occaecati cupiditate</a></h2>
                                            <div class="rating-price">
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="price-boxes">
                                                    <span class="new-price">$380.00</span>
                                                </div>
                                            </div>
                                            <div class="product-desc">
                                                <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
                                            </div>
                                            <div class="actions-e">
                                                <div class="action-buttons">
                                                    <div class="add-to-cart">
                                                        <a href="#">Add to cart</a>
                                                    </div>
                                                    <div class="add-to-links">
                                                        <div class="add-to-wishlist">
                                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class="product-list-wrapper">
                                <div class="single-product">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="product-img">
                                            <a href="#">
                                            <img class="primary-image" src="{{asset('img/products/product-11.jpg')}}" alt="" />
                                            <img class="secondary-image" src="{{asset('img/products/product-12.jpg')}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Cras neque metus</a></h2>
                                            <div class="rating-price">
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="price-boxes">
                                                    <span class="new-price">$340.00</span>
                                                </div>
                                            </div>
                                            <div class="product-desc">
                                                <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
                                            </div>
                                            <div class="actions-e">
                                                <div class="action-buttons">
                                                    <div class="add-to-cart">
                                                        <a href="#">Add to cart</a>
                                                    </div>
                                                    <div class="add-to-links">
                                                        <div class="add-to-wishlist">
                                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class="product-list-wrapper">
                                <div class="single-product">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="product-img">
                                            <a href="#">
                                            <img class="primary-image" src="{{asset('img/products/product-9.jpg')}}" alt="" />
                                            <img class="secondary-image" src="{{asset('img/products/product-10.jpg')}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
                                            <div class="rating-price">
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="price-boxes">
                                                    <span class="new-price">$400.00</span>
                                                </div>
                                            </div>
                                            <div class="product-desc">
                                                <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
                                            </div>
                                            <div class="actions-e">
                                                <div class="action-buttons">
                                                    <div class="add-to-cart">
                                                        <a href="#">Add to cart</a>
                                                    </div>
                                                    <div class="add-to-links">
                                                        <div class="add-to-wishlist">
                                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class="product-list-wrapper">
                                <div class="single-product">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="product-img">
                                            <a href="#">
                                            <img class="primary-image" src="{{asset('img/products/product-6.jpg')}}" alt="" />
                                            <img class="secondary-image" src="{{asset('img/products/product-7.jpg')}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
                                            <div class="rating-price">
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="price-boxes">
                                                    <span class="new-price">$200.00</span>
                                                </div>
                                            </div>
                                            <div class="product-desc">
                                                <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
                                            </div>
                                            <div class="actions-e">
                                                <div class="action-buttons">
                                                    <div class="add-to-cart">
                                                        <a href="#">Add to cart</a>
                                                    </div>
                                                    <div class="add-to-links">
                                                        <div class="add-to-wishlist">
                                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class="product-list-wrapper">
                                <div class="single-product">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="product-img">
                                            <a href="#">
                                            <img class="primary-image" src="{{asset('img/products/product-4.jpg')}}" alt="" />
                                            <img class="secondary-image" src="{{asset('img/products/product-5.jpg')}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Quisque in arcu</a></h2>
                                            <div class="rating-price">
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="price-boxes">
                                                    <span class="new-price">$440.00</span>
                                                </div>
                                            </div>
                                            <div class="product-desc">
                                                <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
                                            </div>
                                            <div class="actions-e">
                                                <div class="action-buttons">
                                                    <div class="add-to-cart">
                                                        <a href="#">Add to cart</a>
                                                    </div>
                                                    <div class="add-to-links">
                                                        <div class="add-to-wishlist">
                                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class="product-list-wrapper">
                                <div class="single-product">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="product-img">
                                            <a href="#">
                                            <img class="primary-image" src="{{asset('img/products/product-2.jpg')}}" alt="" />
                                            <img class="secondary-image" src="{{asset('img/products/product-3.jpg')}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Imperial Consequences</a></h2>
                                            <div class="rating-price">
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="price-boxes">
                                                    <span class="new-price">$334.00</span>
                                                </div>
                                            </div>
                                            <div class="product-desc">
                                                <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
                                            </div>
                                            <div class="actions-e">
                                                <div class="action-buttons">
                                                    <div class="add-to-cart">
                                                        <a href="#">Add to cart</a>
                                                    </div>
                                                    <div class="add-to-links">
                                                        <div class="add-to-wishlist">
                                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class="product-list-wrapper">
                                <div class="single-product">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="product-img">
                                            <a href="#">
                                            <img class="primary-image" src="{{asset('img/products/product-4.jpg')}}" alt="" />
                                            <img class="secondary-image" src="{{asset('img/products/product-2.jpg')}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Consequences</a></h2>
                                            <div class="rating-price">
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="price-boxes">
                                                    <span class="new-price">$220.00</span>
                                                </div>
                                            </div>
                                            <div class="product-desc">
                                                <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
                                            </div>
                                            <div class="actions-e">
                                                <div class="action-buttons">
                                                    <div class="add-to-cart">
                                                        <a href="#">Add to cart</a>
                                                    </div>
                                                    <div class="add-to-links">
                                                        <div class="add-to-wishlist">
                                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class="product-list-wrapper">
                                <div class="single-product">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="product-img">
                                            <a href="#">
                                            <img class="primary-image" src="{{asset('img/products/product-1.jpg')}}" alt="" />
                                            <img class="secondary-image" src="{{asset('img/products/product-1.jpg')}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">Proin lectus ipsum</a></h2>
                                            <div class="rating-price">
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="price-boxes">
                                                    <span class="new-price">$230.00</span>
                                                </div>
                                            </div>
                                            <div class="product-desc">
                                                <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
                                            </div>
                                            <div class="actions-e">
                                                <div class="action-buttons">
                                                    <div class="add-to-cart">
                                                        <a href="#">Add to cart</a>
                                                    </div>
                                                    <div class="add-to-links">
                                                        <div class="add-to-wishlist">
                                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>
                    </div>
                    <!-- shop toolbar start -->
                    <div class="shop-content-bottom">
                        <div class="shop-toolbar btn-tlbr">
                            <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                                <div class="pages">
                                    {!!$product->links()!!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop toolbar end -->
                </div>
            </div>
            <!-- right sidebar end -->
        </div>
    </div>
</div>
<!-- shop-with-sidebar end -->
<!-- Brand Logo Area Start -->
<div class="brand-area">
    <div class="container">
        <div class="row">
            <div class="brand-carousel">
                <div class="brand-item"><a href="#"><img src="{{asset('img/brand/bg1-brand.jpg')}}" alt="" /></a></div>
                <div class="brand-item"><a href="#"><img src="{{asset('img/brand/bg2-brand.jpg')}}" alt="" /></a></div>
                <div class="brand-item"><a href="#"><img src="{{asset('img/brand/bg3-brand.jpg')}}" alt="" /></a></div>
                <div class="brand-item"><a href="#"><img src="{{asset('img/brand/bg4-brand.jpg')}}" alt="" /></a></div>
                <div class="brand-item"><a href="#"><img src="{{asset('img/brand/bg5-brand.jpg')}}" alt="" /></a></div>
                <div class="brand-item"><a href="#"><img src="{{asset('img/brand/bg2-brand.jpg')}}" alt="" /></a></div>
                <div class="brand-item"><a href="#"><img src="{{asset('img/brand/bg3-brand.jpg')}}" alt="" /></a></div>
                <div class="brand-item"><a href="#"><img src="{{asset('img/brand/bg4-brand.jpg')}}" alt="" /></a></div>
            </div>
        </div>
    </div>
</div>
<!-- Brand Logo Area End -->
@endsection
@section("script")
    <script>
        $(function()
        {
            $(".orderby").change(function(){
                $("#form_order").submit();
        });
        });
        
    </script>
@endsection
@section('style')
<style> 
.price_sort .active
{
color: black;
}
</style>
@endsection