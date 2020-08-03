@isset($orders)
<table class="table modal-content font-italic">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Sản phẩm </th>
            <th>Hình ảnh</th>
            <th>giá</th>
            <th>Số lượng</th>
            <th>THành Tiền</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt=1 ?>
        @foreach ($orders as $key=>$item)
        <tr>
        <td>{{$stt++}}</td>
        <td scope="row"><a href="{{route('get.detail.product',[$item->products->pro_slug,$item->or_product_id])}}" target="_blank">{{$item->products->pro_name}}</a></td>
        <td><img width="100px" class="img-thumbnail" src="{{isset($item->products->pro_avatar) ? pare_url_file($item->products->pro_avatar):''}}" alt=""/></td>
        <td>{{number_format($item->or_price,0,',','.')}} </td>
        <td>{{$item->or_qty}}</td>
        <td>{{number_format($item->or_price*$item->or_qty,0,',','.')}}</td>
        <td>
        <a href=""><i class="fas fa-trash">Delete   </i></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endisset