@extends('layout.app')
@section('content')
<div class="main-contact-area">
    <div class="container wrapper">
        <div class="row cart-head">
            <div class="container">
            <div class="row">
                <p></p>
            </div>
            <div class="row">
                <div style="display: table; margin: auto;">
                    <span class="step step_complete"> <a href="#" class="check-bc">Cart</a> <span class="step_line step_complete"> </span> <span class="step_line backline"> </span> </span>
                    <span class="step step_complete"> <a href="#" class="check-bc">Checkout</a> <span class="step_line "> </span> <span class="step_line step_complete"> </span> </span>
                    <span class="step_thankyou check-bc step_complete">Thank you</span>
                </div>
            </div>
            <div class="row">
                <p></p>
            </div>
            </div>
        </div>    
        <div class="row cart-body">
            <form class="form-horizontal" method="post" action="">
                @csrf
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                <!--REVIEW ORDER-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                    Review Order <div class="pull-right"><small><a class="afix-1" href="{{route('get.list.shopping.cart')}}">Cập Nhật</a></small></div>
                    </div>
                    <div class="panel-body">
                        @foreach ($cart as $item)
                        <div class="form-group">
                            <div class="col-sm-3 col-xs-3">
                                <img class="img-responsive" src="{{pare_url_file($item->options->avatar)}}" />
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="col-xs-12">{{$item->name}}</div>
                            <div class="col-xs-12"><small>Số lượng:<span>{{$item->qty}}</span></small></div>
                            </div>
                            <div class="col-sm-3 col-xs-3 text-right">
                                <h6>{{number_format($item->price,0,',','.')}} <span>Đ</span></h6>
                            </div>
                        </div>
                        @endforeach
                        <div class="form-group">
                            <hr />
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <strong>Tổng Tiền</strong>
                            <div class="pull-right"><span>$</span><span>{{Cart::subtotal()}}</span></div>
                            </div>
                            <div class="col-xs-12">
                                <small>Shipping</small>
                                <div class="pull-right"><span>-</span></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <hr />
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <strong>Order Total</strong>
                                <div class="pull-right"><span>$</span><span>150.00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--REVIEW ORDER END-->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                <!--SHIPPING METHOD-->
                <div class="panel panel-info">
                    <div class="panel-heading">Thông tin thanh toán<nav></nav></div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-md-12">
                                <h4>Đại chỉ giao hàng</h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 col-xs-12">
                                <strong>Họ Tên:</strong>
                            <input type="text" name="first_name" class="form-control" value="{{get_data_user('web','name')}}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Địa chỉ:</strong></div>
                            <div class="col-md-12">
                                <input type="text" name="address" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Thành Phố:</strong></div>
                            <div class="col-md-12">
                                <input type="text" name="city" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Tỉnh:</strong></div>
                            <div class="col-md-12">
                                <input type="text" name="state" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Số Điện Thoại:</strong></div>
                            <div class="col-md-12"><input type="text" name="phone_number" class="form-control" value="{{get_data_user('web','phone')}}" /></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Địa chỉ email</strong></div>
                            <div class="col-md-12"><input type="text" name="email_address" class="form-control" value="{{get_data_user('web','email')}}" /></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Ghi Chú</strong></div>
                            <div class="col-md-12"><textarea name='note' class="form-control" rows="5" value="" ></textarea></div>

                        </div>
                        <div class="form-group text-center">
                            <input type="submit"class=" btn btn-success" value="Xác Nhận Thông Tin">
                        </div>
                    </div>
                </div>
                <!--SHIPPING METHOD END-->
              
            </div>
            
            </form>
        </div>
        <div class="row cart-footer">
    
        </div>
</div>
</div>

@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/pay.css')}}">
@endsection