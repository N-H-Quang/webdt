@extends('user.layout')
@section('content')
<h5>Danh Sách Sản Phẩm bán chạy</h5>
<div class="row">
    <div class="col-12">
<table class="table table-striped table-sm">

        
            <tr>
              <th>id</th>
              <th>Tên Sản Phẩm</th>
              <th>Hình ảnh</th>
              <th>Giá tiền </th>
              <th>Lược mua</th>
            </tr>
            <?php $stt=1 ?>
            @foreach ($product as $item)
          <tr>
            <td>{{$stt++}}</td>
          <td> <a href="{{route("get.detail.product",[Str::slug($item->pro_name),$item->id])}}" target="_blank">{{$item->pro_name}}</a></td>
          <td  ><img style="max-width: 200px" src="{{pare_url_file($item->pro_avatar)}}" ></td>
          <td>{{number_format($item->pro_price,0,',','.')}}</td>
          <td>{{$item->pro_pay}} </td>
          
          </tr>    
            @endforeach
          </table>
         
    </div>

</div>


@endsection