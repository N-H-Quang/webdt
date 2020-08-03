
@extends('admin::layouts.master')
@section('NoiDung')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Trang chủ </a></li>
    <li class="breadcrumb-item"><a href="#">Thành Viên </a></li>
    <li class="breadcrumb-item active" aria-current="page">Danh Sách</li>
  </ol>
</nav>
<form>

</form> 
          <div class="table-responsive">
            <h1>Quản lý Thành Viên  </h1>
            <table class="table table-striped table-sm">

              <tr>
                <th>id</th>
                <th>tên Khách Hàng</th>
                <th>Địa Chỉ</th>
                <th>Số Điện Thoại</th>
                <th>Tổng tiền</th>
                <th>trạng Thái</th>
                <th>Ngày mua</th>
                <th>thao tác</th>
              </tr>
              @foreach ($transaction as $item)
            <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->User->name}}</td>
              <td> {{$item->tr_address}}</td>
            <td> {{$item->tr_phone}}</td>
            <td>{{number_format($item->tr_total,0,',','.')}}</td>
            <td>@if ($item->tr_status==1)
                <a href="" class="label-success label">Đã xử lý</a>
                @else
            <a href="{{route('admin.get.active.transaction',$item->id)}}" class="label-default label">Chưa xử lý</a>
            @endif
          </td>
          <td>{{$item->created_at ? $item->created_at->format('d/m/Y'):''}}</td>
          <td><a href="{{route('admin.view.list.transaction',$item->id)}}" data-id={{$item->id}} class=" btn btn-success js_order_item"><i class="fas fa-eye"></i></a>
            <a href="{{route('admin.delete.list.transaction',$item->id)}}" class="btn btn-danger "><i class="fas fa-trash "></i></a>
          </td>
            </tr>    
              @endforeach
            </table>
          </div>
        </main>
      </div>
    </div>
    <div class="modal fade " id="myModal" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Chi Tiết Đơn Hàng có mã # <b class="item-id"></b></h4>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('theme_admin/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="{{asset('theme_admin/jquery-slim.min.js')}}"><\/script>')</script>
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
    <script src="{{asset('theme_admin/popper.min.js')}}"></script>
    <script src="{{asset('theme_admin/bootstrap.min.js')}}"></script>

    <!-- Icons -->
    <script src="{{asset('theme_admin/feather.min.js')}}"></script>
    <script>
      feather.replace();
      $(function () {
        
      
        $(".js_order_item").click(function(event){
            event.preventDefault();
            let $this=$(this);
            let url =$this.attr('href');
            $('#myModal').modal('show');
            let id =$this.attr('data-id');
            $('.modal-title').html('');
            $('.item-id').text(id);
            $.ajax({
           type:'GET',
            url:url,
          success:function(data){
            console.log(data);
            
            $('.modal-title').append(data);
          }
          });
          }
        );
      })
    </script>

    <!-- Graphs -->
    
</body><div class="corom-element" style="all: initial;"></div></html>
@endsection
