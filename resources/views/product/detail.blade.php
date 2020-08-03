@extends('layout.app')
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container-inner">
                    <ul>
                        <li class="home">
                            <a href="{{route('home')}}">Trang chủ</a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="category3"><span>
                            @isset($item)
                            {{$item[0]['pro_name']}}
                            @endisset</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs area end -->
<!-- product-details Area Start -->
<div class="product-details-area">
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-5 col-xs-12">
            <div class="zoomWrapper">
                <div id="img-1" class="zoomWrapper single-zoom">
                <a href="#" >
                    <img id="zoom1" src="{{pare_url_file($item[0]->pro_avatar)}}" data-zoom-image="img/product-details/ex-big-1-1.jpg')}}" alt="big-1">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-sm-7 col-xs-12">
            <div class="product-list-wrapper">
                <div class="single-product">
                    <div class="product-content">
                        <h1 class="product-name" data-id="{{$item[0]->id}}"><a  href="#">{{$item[0]->pro_name}}</a></h1>
                        <div class="rating-price">
                            <div class="pro-rating">
                                <a href="#"><i class="fa fa-star-o"></i></a>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="price-boxes">
                                <span class="new-price">{{number_format($item[0]->pro_price,0,'.',',')}}</span>
                            </div>
                        </div>
                        <div class="product-desc">
                            <p>{{$item[0]->pro_description}}</p>
                        </div>
                        <p class="availability in-stock">Availability: <span>In stock</span></p>
                        <div class="actions-e">
                            <div class="action-buttons-single">
                                <div class="inputx-content">
                                    <label for="qty">Quantity:</label>
                                    <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty">
                                </div>
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
                        <div class="singl-share">
                            <a href="#"><img src="{{asset('img/single-share.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="single-product-tab">
            <!-- Nav tabs -->
            <ul class="details-tab">
                <li class="active"><a href="#home" data-toggle="tab" aria-expanded="true">Description</a></li>
                <li class=""><a href="#messages" data-toggle="tab" aria-expanded="false"> Review (1)</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <div class="product-tab-content">
                        {!!$item[0]->pro_content!!}
                    </div>
                    <div class="component_rating container" style="padding-top: 20px;border: 1px solid #dedede;">
                        <h3>Đánh Giá sản Phẩm</h3>
                        <div >
                            <div class="component_rating_content" style=";display: flex;align-items: center;margin-bottom: 20px;border:1px soild #dedede">
                                <div class="rating_item" style="width: 20%;text-align: center">
                                <div class="" style="position: relative"><span style="color: #ff9705;font-size: 100px;margin:0 auto;text-align: center;display : block" class="fa fa-star"></span><b style="position: absolute;display: block;left: 50%;top:50%;transform:translateX(-50%) translateY(-50%);color: white;font-size:20px">{{$item[0]->pro_total_rating !=0 ? round(($item[0]->pro_total_number/$item[0]->pro_total_rating),2):'0'}}</b></div>
                                </div>
                                <div class="list_rating" style="width: 60%; padding: 20px;">
                                    <div >
                                        @isset($arrayRating)
                                        @foreach ($arrayRating as $key=>$item2)
                                        <div class="item_rating" style="ali gn-items:center;">
                                            <div style="margin-top: 10px ;display: flex">
                                                <div style="width: 10%; font-size: 14px">
                                                    {{$key}}<span class="fa fa-star" ></span>  
                                                </div>
                                                <div style="width:70%; margin-top: 7px ;border: 1px solid #dedede ;height :10px ;border-radius: 10px 0 0 10px; background-color: #dedede">
                                                    <span class="" style="display: inline;width: 100%; ;"><b style="background-color: #f25000  ; display: block; height: 100% ; width: {{$item[0]->pro_total_number ==0 ? '0':round(($item2['sum']/$item[0]->pro_total_number)*100,2)}}% ;border-radius: 5px 0 0 5px "></b></span>
                                                </div>
                                                <div style="width:20%; ">
                                                    <a href="" >{{$item2['total']}} lược Đánh Giá</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endisset
                                    </div>
                                </div>
                                <div style="width: 20%;text-align: center">
                                    <a href="" class="btn btn-primary " id="send">Gửi đánh giá của bạn  </a>
                                </div>
                            </div>
                            <div class="form_rating hidden">
                                <div style="display: flex ; font-size: 15px ; margin-bottom: 0" >
                                    <p>Chọn đánh giá của bạn </p>
                                    <span class="list_star" style="margin: 0 15px">
                                    @for($i =1 ;$i<=5;$i++)
                                    <i class="fa fa-star" data-key={{$i}}></i>
                                    @endfor
                                    </span>
                                    <span class="hidden" data-id="" id="number_star"></span>
                                    <span class="list_text_rating"> Tốt</span>
                                </div>
                                <div>
                                    <div class="form-group" style="margin-top: 15px">
                                        <label for="">Nhập Nội Dung</label>
                                        <textarea class="form-control" name="" id="content" rows="3"></textarea>
                                    </div>
                                </div>
                                <div style="margin-top: 15px">
                                    <a href="{{route('post.rating.product',$item[0]->id)}}"  class="btn btn-primary" id="send_reply_to">Gửi Đánh Giá</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="messages">
                    <div class="single-post-comments col-md-12 ">
                        <div class="comments-area">
                            <h3 class="comment-reply-title">1 REVIEW FOR TURPIS VELIT ALIQUET</h3>
                            <div class="comments-list">
                                <ul>
                                    <li>
                                        <div class="comments-details">
                                            <div class="comments-list-img">
                                                <img src="{{asset('img/user-1.jpg')}}" alt="">
                                            </div>
                                            <div class="comments-content-wrap">
                                                <span>
                                                <b><a href="#">Admin - </a></b>
                                                <span class="post-time">October 6, 2014 at 1:38 am</span>
                                                </span>
                                                <p>Lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="comment-respond mt-0">
                            <h3 class="">Đánh Giá Sản Phẩm</h3>
                            <div class="row ">
                                <div class="col-sm-3 col-md-6">
                                    <div class="rating-block">
                                        <h4>Average user rating</h4>
                                        <h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2>
                                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-4">
                                    <h4>Rating breakdown</h4>
                                    <div class="pull-left">
                                        <div class="pull-left" style="width:35px; line-height:1;">
                                            <div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
                                        </div>
                                        <div class="pull-left" style="width:180px;">
                                            <div class="progress" style="height:9px; margin:8px 0;">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
                                                    <span class="sr-only">80% Complete (danger)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pull-right" style="margin-left:10px;">1</div>
                                    </div>
                                    <div class="pull-left">
                                        <div class="pull-left" style="width:35px; line-height:1;">
                                            <div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
                                        </div>
                                        <div class="pull-left" style="width:180px;">
                                            <div class="progress" style="height:9px; margin:8px 0;">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                                                    <span class="sr-only">80% Complete (danger)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pull-right" style="margin-left:10px;">1</div>
                                    </div>
                                    <div class="pull-left">
                                        <div class="pull-left" style="width:35px; line-height:1;">
                                            <div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
                                        </div>
                                        <div class="pull-left" style="width:180px;">
                                            <div class="progress" style="height:9px; margin:8px 0;">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                                                    <span class="sr-only">80% Complete (danger)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pull-right" style="margin-left:10px;">0</div>
                                    </div>
                                    <div class="pull-left">
                                        <div class="pull-left" style="width:35px; line-height:1;">
                                            <div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
                                        </div>
                                        <div class="pull-left" style="width:180px;">
                                            <div class="progress" style="height:9px; margin:8px 0;">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
                                                    <span class="sr-only">80% Complete (danger)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pull-right" style="margin-left:10px;">0</div>
                                    </div>
                                    <div class="pull-left">
                                        <div class="pull-left" style="width:35px; line-height:1;">
                                            <div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
                                        </div>
                                        <div class="pull-left" style="width:180px;">
                                            <div class="progress" style="height:9px; margin:8px 0;">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
                                                    <span class="sr-only">80% Complete (danger)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pull-right" style="margin-left:10px;">0</div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="row" >
                                        <div class="col-sm-6 h-100 d-table">
                                            <div class="card card-body d-table-cell align-middle">
                                                <a href="" class="btn btn-success w-100 " id="send_reply"> Gửi Báo Cáo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form action="#" class="hidden">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div >
                                                <p >Chọn đánh giá của bạn</p>
                                                <div class="star-rating">
                                                    <span class="fa fa-star-o" data-rating="1"></span>
                                                    <span class="fa fa-star-o" data-rating="2"></span>
                                                    <span class="fa fa-star-o" data-rating="3"></span>
                                                    <span class="fa fa-star-o" data-rating="4"></span>
                                                    <span class="fa fa-star-o" data-rating="5"></span>
                                                    <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 comment-form-comment">
                                            <p>Your Review</p>
                                            <textarea id="message" cols="30" rows="10"></textarea>
                                            <a  href="{{route('post.rating.product',$item[0]->id)}}" class="js_rating_product btn" value="Submit">Gửi đánh giá</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="component_list_rating">
            @isset($rating)
            @foreach ($rating as $item)
            <div class="rating_item" style="margin-top: 10px;margin-left :10px">
                <div>
                    <span style="    color: #333;
                        font-weight: bold;
                        text-transform: capitalize;">{{$item->User->name}}</span>
                    <a href="" style="color : #2ba832"><i class="fa fa-check active" >Đã mua hàng tại website</i></a>
                </div>
                <p style="margin-bottom: 0">
                    <span>
                    @for($i=0;$i<=5;$i++)
                    <i class="fa fa-star {{$i<$item->ra_number ? 'active':''}}"></i>
                    @endfor
                    </span>
                    {{$item->ra_content}}
                </p>
                <span><i class="fa fa-clock-o" style="margin-top: 10px;margin-left :10px"></i>{{$item->created_at}}</span>
            </div>
            @endforeach
            @endisset
        </div>
    </div>
</div>
<!-- product-details Area end -->
<!-- product section start -->
@endsection
@section('style')
<style>
    .component_list_rating .rating_item .active
    {
    color: #ff9705;
    }
    .product-tab-content h2
    {
    font-size: 24px !important;
    }
    .product-tab-content h3
    {
    font-size: 20px !important;
    }
    .product-tab-content h4
    {
    font-size: 18px !important;
    }
    .product-tab-content img
    {
    margin: 0 auto;
    text-align: center;
    max-width: 100%;
    display: block;
    }
    .list_star i {
    cursor: pointer;
    }
    .list_text_rating
    {
    display: inline-block;
    margin-left: 10px;
    position: relative;
    background: #52b858;
    color: #fff;
    padding: 2px 8px;
    box-sizing: border-box;
    font-size: 12px;
    border-radius: 2px;
    display: none;
    }
    .list_text_rating:after
    {
    right: 100%;
    top: 50%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(82,184,88,0);
    border-right-color: #52b858;
    border-width: 6px;
    margin-top: -6px;
    }
    .list_star .rating_active
    {
    color: #ff9705;
    }
</style>
@endsection
@section('script')
<script>
    $(function()
    {
             
    var  $listratingtext={
                            1:'không thích',
                            2:'tạm được',
                            3:'Bình thường',
                            4:'Tốt',
                            5:'Rất Tốt'
    };
        let liststar=$('.list_star .fa');
        liststar.mouseover(function()
        {
            let $this=$(this);
            let number =$this.attr('data-key');
            $('#number_star').val(number);
            liststar.removeClass('rating_active');
            $.each(liststar, function(key,value)
            {
                if(key +1<=number)
                {
                    $(this).addClass('rating_active');
                }
            }
            );
            $('.list_text_rating').text($listratingtext[number]);
            $('.list_text_rating').show();
      })
      $("#send").click(function(event) {
        event.preventDefault();
        if($(".form_rating").hasClass("hidden"))
        {
            $(".form_rating").addClass("active").removeClass("hidden");
        }
        else
        {
            $(".form_rating").addClass("hidden").removeClass("active");
        }
    });
    $("#send_reply_to").click(function(event) {
        event.preventDefault();
        let url = $(this).attr('href');
        let number = $('#number_star').val();
        let content = $("#content").val();
        if (content && number) {
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    number: number,
                    r_content: content
                },
                success: function(data) {
                    console.log(data);
                }
            });
        }
        console.log(url);
    });
    })
    $(function()
    {
        let products=localStorage.getItem('products');
        let idproducts=$(".product-name").attr("data-id");
        
        if(products==null)
        {
            arrayproduct=new Array();
            arrayproduct.push(idproducts);
            localStorage.setItem('products',JSON.stringify(arrayproduct));
            
        }
        else
        {
            
            let products=localStorage.getItem('products');
            arrayproduct=$.parseJSON(products);
            if(products.indexOf(idproducts)==-1)
            {
                arrayproduct.push(idproducts);
                localStorage.setItem('products',JSON.stringify(arrayproduct));
                
            }
            console.log(arrayproduct);
            
        }

       
    })
    
</script>
@endsection