@extends('user.layout')
@section('content')
<div class="" id="productsview">

</div>
@endsection
@section('script')
<script>
    $(function()
     {
         
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    let routerenderproduct="{{route("post.product.viewed")}}";
     let arrayproduct=localStorage.getItem('products');
     arrayproduct=$.parseJSON(arrayproduct);
     if(arrayproduct.length>0)
     {
    $.ajax({
    type:'POST',
     url:routerenderproduct,
     data:{id:arrayproduct},
      success:function(data) {
        console.log(data.data);
    $("#productsview").html(" ").append(data.data);
    $('.fade').removeClass('fade');
                  }
    });
     }

    
     });
    
    
</script>
<style>
     .area-title {
                        text-align: center;
                        padding: 28px 0;
                        position: relative;
                        margin-top: 75px;
                    }
                    
                    .area-title h2 {
                        margin: 0;
                        font-weight: 700;
                        font-size: 18px;
                        color: #3f3f3f;
                        background: #fff;
                        padding: 0 20px;
                        display: inline-block;
                        letter-spacing: 4px;
                        position: relative;
                        z-index: 1;
                    }
                    
                    .area-title:before {
                        content: "";
                        width: 32px;
                        height: 32px;
                        position: absolute;
                        background: url("../img/title-top.png") no-repeat center center;
                        position: absolute;
                        left: 0;
                        right: 0;
                        margin: 0 auto;
                        top: -20px;
                    }
                    
                    .area-title:after {
                        content: "";
                        width: 100%;
                        border-top: 1px dashed #3f3f3f;
                        position: absolute;
                        left: 0;
                        top: 50%
                    }
                    
                    .features-tab .nav-tabs {
                        border-bottom: 0 none;
                        text-align: center;
                        margin-bottom: 35px;
                    }
                    
                    .features-tab .nav-tabs>li {
                        float: none;
                        margin-bottom: 0;
                        display: inline-block;
                    }
                    
                    .features-tab .nav-tabs>li>a {
                        border: 0;
                        border-radius: 0;
                        line-height: 1.42857;
                    }
                    
                    .features-tab .nav-tabs>li>a {
                        border: 0 none;
                        border-radius: 0;
                        color: #747474;
                        font-size: 12px;
                        font-weight: 400;
                        line-height: 1.42857;
                        margin: 0 5px;
                        padding: 5px 10px;
                        text-transform: uppercase;
                        border: 1px solid #ebebeb;
                        letter-spacing: 2px;
                        font-family: 'Montserrat', sans-serif;
                    }
                    
                    .features-tab .nav>li>a:focus,
                    .features-tab .nav>li>a:hover {
                        background-color: inherit;
                        text-decoration: none;
                        border: 1px solid #c2a476;
                        color: #c2a476;
                    }
                    
                    .features-tab .nav-tabs>li.active>a,
                    .features-tab .nav-tabs>li.active>a:focus,
                    .features-tab .nav-tabs>li.active>a:hover {
                        border: medium none;
                        border: 1px solid #c2a476;
                        color: #c2a476;
                    }
                    
                    .single-product {
                        overflow: hidden;
                        position: relative
                    }
                    
                    .product-img {
                        position: relative;
                        display: block;
                        margin-bottom: 20px;
                    }
                    
                    .product-content {
                        padding: 0 5px;
                        text-align: center;
                        position: relative;
                        background: #fff;
                    }
                    
                    .product-img a {
                        display: block
                    }
                    
                    .product-img a img {
                        transition: all 0.3s ease 0s;
                        width: 100%;
                        width: 200px;
                        height: 200px;
                    }
                    
                    .product-img a img.primary-image {}
                    
                    .product-img a img.secondary-image {
                        left: 0;
                        opacity: 0;
                        position: absolute;
                        top: 0;
                        z-index: 1;
                    }
                    
                    .actions {
                        position: absolute;
                        text-align: center;
                        top: 90%;
                        width: 100%;
                        opacity: 0;
                        transition: all 0.3s ease 0s;
                    }
                    
                    .single-product:hover .actions {
                        opacity: 1;
                        top: 80%;
                        z-index: 9
                    }
                    
                    .action-zoom {
                        position: absolute;
                        text-align: center;
                        top: 0%;
                        width: 100%;
                        opacity: 0;
                        transition: all 0.3s ease 0s;
                    }
                    
                    .single-product:hover .action-zoom {
                        opacity: 1;
                        top: 50%;
                        z-index: 9
                    }
                    
                    .add-to-cart {
                        display: block;
                        margin-bottom: 15px;
                    }
                    
                    .add-to-cart a {
                        color: #3f3f3f;
                        background: #fff;
                        display: inline-block;
                        font-size: 14px;
                        font-weight: 700;
                        padding: 8px 15px;
                        text-transform: uppercase;
                    }
                    
                    .add-to-links {
                        display: inline-block;
                    }
                    
                    .add-to-wishlist,
                    .compare-button,
                    .quickviewbtn {
                        display: inline-block
                    }
                    
                    .add-to-wishlist a,
                    .compare-button a,
                    .quickviewbtn a {
                        display: inline-block;
                        margin: 0 8px;
                    }
                    
                    .add-to-wishlist a i,
                    .compare-button a i,
                    .quickviewbtn a i {
                        background: #fff;
                        color: #3f3f3f;
                        font-size: 14px;
                        height: 35px;
                        line-height: 35px;
                        transition: all 0.3s ease 0s;
                        width: 35px;
                    }
                    
                    .quickviewbtn {
                        display: inline-block;
                    }
                    
                    .action-buttons a:hover i,
                    .add-to-cart a:hover {
                        background: #3f3f3f;
                        color: #fff;
                    }
                    
                    .action-zoom a {
                        background:
                    }
                    
                    .single-product:hover .product-img a img.secondary-image {
                        opacity: 1
                    }
                    
                    .product-img>a:before {
                        background-color: #000;
                        content: "";
                        height: 100%;
                        left: 0;
                        opacity: 0;
                        position: absolute;
                        top: 0;
                        transition: all 0.3s ease 0s;
                        width: 100%;
                    }
                    
                    .single-product:hover .product-img a:before {
                        opacity: .2;
                        z-index: 9
                    }
                    
                    .product-content p {
                        font-size: 13px;
                        color: #6d6d6d;
                        letter-spacing: 1.1 p x;
                        display: inline-block;
                        line-height: 22px;
                    }
                    
                    h2.product-name {
                        margin: 0 0 5px;
                    }
                    
                    h2.product-name a {
                        font-size: 12px;
                        font-weight: 700;
                        font-family: Montserrat;
                        color: #3f3f3f;
                    }
                    
                    h2.product-name a:hover {
                        color: #c2a476
                    }
                    
                    span.old-price {
                        color: #909295;
                        font-size: 15px;
                        margin-left: 10px;
                        text-decoration: line-through;
                    }
                    
                    span.sale-text {
                        background: #fff none repeat scroll 0 0;
                        color: #3f3f3f;
                        font-family: Roboto;
                        font-size: 12px;
                        height: 26px;
                        border: 1px solid #3f3f3f;
                        left: 50%;
                        margin-left: -25px;
                        line-height: 25px;
                        min-height: 25px;
                        padding: 0 15px;
                        position: absolute;
                        text-align: center;
                        text-transform: capitalize;
                        top: 5%;
                        z-index: 10;
                    }
                    
                    .single-product .price-box {
                        text-align: center;
                        left: 0;
                        right: 0;
                        margin: 0 auto;
                        bottom: 20px;
                        position: absolute;
                    }
                    
                    .single-product .price-box .new-price {
                        margin: 0;
                        background: #fff;
                        padding: 10px 15px;
                        display: inline-block;
                        margin: 5px 0;
                        font-size: 13px;
                        color: #3f3f3f;
                        font-family: Montserrat;
                        font-weight: 700;
                    }
                    
                    .single-product:hover .add-to-wishlist a {
                        -webkit-animation: zoomIn 300ms ease-in-out;
                        -moz-animation: zoomIn 300ms ease-in-out;
                        -ms-animation: zoomIn 300ms ease-in-out;
                        animation: zoomIn 300ms ease-in-out;
                    }
                    
                    .single-product:hover .compare-button a {
                        -webkit-animation: zoomIn 500ms ease-in-out;
                        -moz-animation: zoomIn 500ms ease-in-out;
                        -ms-animation: zoomIn 500ms ease-in-out;
                        animation: zoomIn 500ms ease-in-out;
                    }
                    
                    .single-product:hover .quickviewbtn a {
                        -webkit-animation: zoomIn 700ms ease-in-out;
                        -moz-animation: zoomIn 700ms ease-in-out;
                        -ms-animation: zoomIn 700ms ease-in-out;
                        animation: zoomIn 700ms ease-in-out;
                    }
                    
                    .first-sale {
                        margin-bottom: 40px;
                        margin-top: 40px;
                    }
                    
                    .our-product-area .owl-theme .owl-controls .owl-buttons {
                        text-align: center;
                        width: 54px;
                        top: -20px;
                        text-align: center;
                        position: absolute;
                        left: 0;
                        right: 0;
                        margin: 0 auto;
                        opacity: 1;
                    }
                    
                    .our-product-area .owl-theme .owl-controls .owl-buttons .owl-prev {
                        font-size: 0;
                        color: transparent;
                        background: none;
                        width: 26px;
                        float: left;
                        position: relative;
                    }
                    
                    .our-product-area .owl-theme .owl-controls .owl-buttons .owl-next {
                        font-size: 0;
                        color: transparent;
                        background: none;
                        width: 26px;
                        float: right;
                    }
                    
                    .our-product-area .owl-theme .owl-controls .owl-buttons div {
                        margin: 0;
                        padding: 0;
                        -webkit-border-radius: 0;
                        -moz-border-radius: 0;
                        border-radius: 0;
                        background: none;
                        filter: Alpha(Opacity=50);
                        opacity: 1;
                    }
                    
                    .our-product-area .owl-theme .owl-controls .owl-buttons>div:before {
                        content: "\f104";
                        display: inline-block;
                        font: normal normal normal 14px/1 FontAwesome;
                        font-size: inherit;
                        text-rendering: auto;
                        -webkit-font-smoothing: antialiased;
                        -moz-osx-font-smoothing: grayscale;
                        color: #3f3f3f;
                        font-size: 18px;
                        float: left;
                        width: 100%;
                    }
                    
                    .our-product-area .owl-theme .owl-controls .owl-buttons .owl-next:before {
                        content: "\f105";
                    }
                    
                    .our-product-area .owl-theme .owl-controls .owl-buttons .owl-prev:after {
                        content: "";
                        height: 15px;
                        border-left: 1px solid #c2c2c2;
                        position: absolute;
                        top: 2px;
                        right: -1px;
                    }
                    
                    .our-product-area .owl-theme .owl-controls .owl-buttons .owl-prev:hover:before,
                    .our-product-area .owl-theme .owl-controls .owl-buttons .owl-next:hover:before {
                        color: #00a9e0;
                    }
                    .features-curosel
                    {
                        display: flex;
                        flex-wrap: wrap;
                    }
    </style>
@endsection