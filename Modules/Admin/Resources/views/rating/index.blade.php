
@extends('admin::layouts.master')
@section('NoiDung')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Trang chủ </a></li>
    <li class="breadcrumb-item"><a href="#">Đánh giá </a></li>
    <li class="breadcrumb-item active" aria-current="page">Danh Sách</li>
  </ol>
</nav>
<form>

</form> 
          <div class="table-responsive">
            <h1>Quản lý Đánh giá  </h1>
            <table class="table table-striped table-sm">
              
              <tr>
                
                <th>id</th>
                <th>tên TV</th>
                <th>tên sản phẩm</th>
                <th>Nội Dung</th>
                <th>Rating</th>
                <th>Thao Tác</th>

              </tr>
              @isset($rating)
                @foreach ($rating as $item)
                    <tr>
                      <td>{{$item['id']}}</td>
                      <td>{{$item['User']->name}}</td>
                      <td>
                      <a href="{{route('get.detail.product',['hello',$item['product']->id])}}">{{$item['product']->pro_name}}</a></td>
                      <td>{{$item['ra_content']}}</td>
                      <td>{{$item['ra_number']}}</td>
                      <td>
                        <a href="{{route('admin.delete.rating',[$item->id])}}" class="btn btn-danger"><i class="fas fa-trash">Xóa</i></a>
                    </tr>
                @endforeach
              
            </table>
            {!!$rating->links()!!}
            @endisset
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('theme_admin/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="{{asset('theme_admin/jquery-slim.min.js')}}"><\/script>')</script>
    <script src="{{asset('theme_admin/popper.min.js')}}"></script>
    <script src="{{asset('theme_admin/bootstrap.min.js')}}"></script>

    

</body><div class="corom-element" style="all: initial;"></div></html>
@endsection
