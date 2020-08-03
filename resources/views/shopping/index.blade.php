@extends('layout.app')
@section('content')
<div class="our-product-area">
    <div class="container">
        <!-- area title start -->
        <div class="area-title">
            <h2>Giỏ Hàng của bạn</h2>
        </div>
<table class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên sabr phẩm </th>
            <th>Hình ảnh</th>
            <th>giá</th>
            <th>Số lượng</th>
            <th>THành Tiền</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt=1 ?>

        @foreach ($cart as $key=>$item)
        <tr>
        <td>{{$stt++}}</td>
        <td scope="row"><a href="">{{$item->name}}</a></td>
        <td><img width="100px" class="img-thumbnail" src="{{pare_url_file($item->options->avatar)}}" alt=""/></td>
        <td>{{number_format($item->price,0,',','.')}} </td>
        <td>{{$item->qty}}</td>
        <td>{{number_format($item->price*$item->qty,0,',','.')}}</td>
        <td><a href=""><i class="fas fa-edit">Edit</i></a>
        <a href="{{route('delete.shopping.carts',$key)}}"><i class="fas fa-trash">Delete   </i></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<h2 class="pull-left">TỔng tiền {{Cart::subtotal()}}<h2>
<a class="btn btn-success pull-right" href="{{route('get.form.pay')}}">Thanh Toán</a>
    </div>
</div>
@endsection