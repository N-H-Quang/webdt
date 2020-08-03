@extends('user.layout')
@section('content')
<h5>Thống kê đơn hàng</h5>
<div class="row">
    <div class="col-4">
        <div class="btn btn-default">
        <p class="mb-0">Tổng Đơn Hàng </p>
        <p>{{isset($totaltransaction)? $totaltransaction:0}} Đơn hàng</p>
        </div>
    </div>
    <div class="col-4">
        <div class="btn btn-success">
            <p class="mb-0">Đơn Hàng đã xủ lý</p>
            <p>{{isset($pocceedtransaction)? $pocceedtransaction:0}} Đơn hàng</p>
        </div>
    </div>
    <div class="col-4">
        <div class="btn btn-danger">
            <p class="mb-0">Đơn Hàng chưa xủ lý</p>
            <p>{{isset($totaltransaction)&&isset($pocceedtransaction)? $totaltransaction-$pocceedtransaction:0}} Đơn hàng</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
<table class="table table-striped table-sm">

        
            <tr>
              <th>id</th>
              <th>Địa Chỉ</th>
              <th>Số Điện Thoại</th>
              <th>Tổng tiền</th>
              <th>trạng Thái</th>
              <th>Ngày mua</th>
            </tr>
            <?php $stt=1 ?>
            @foreach ($transaction as $item)
          <tr>
            <td>{{$stt++}}</td>
            <td> {{$item->tr_address}}</td>
          <td> {{$item->tr_phone}}</td>
          <td>{{number_format($item->tr_total,0,',','.')}}</td>
          <td>@if ($item->tr_status==1)
              <a href="" class="label-success label">Đã xử lý</a>
              @else
          <a href="" class="label-default label">Chưa xử lý</a>
          @endif
          </td>
          <td>{{$item->created_at ? $item->created_at->format('d/m/Y'):''}}</td>
          
          </tr>    
            @endforeach
          </table>
          {{$transaction->links()}}
    </div>

</div>


@endsection