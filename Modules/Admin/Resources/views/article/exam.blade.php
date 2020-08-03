
@extends('admin::layouts.master')
@section('NoiDung')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Trang chủ </a></li>
    <li class="breadcrumb-item"><a href="#">Bài viết </a></li>
    <li class="breadcrumb-item active" aria-current="page">Danh Sách</li>
  </ol>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <button class="btn btn-sm btn-outline-secondary">Share</button>
        <button class="btn btn-sm btn-outline-secondary">Export</button>
      </div>
      <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
        This week
      </button>
    </div>
  </div>  
  <form class="form-inline form" method="GET" action="{{route('admin.get.list.article')}}">
    <div class="form-group">
      <label for="name">Tên</label>
      <input type="name" class="form-control" name="name" placeholder="nhập tên cần tìm" value="{{\Request::get('name')}}">
    </div>
    <button type="submit" class="btn btn-default">TÌm kiếm</button>
  </form>
            <div class="table-responsive">
              <h1>TRANG CHÍNH    <a name="" id="" class="float-right btn btn-primary" href="{{route('admin.create.list.article')}}" role="button">Thêm mới</a> </h1>
              <table class="table table-striped table-sm">
                <tr>  
              <tr>
                
                <th>id</th>
                <th>tên bài viết</th>
                <th>Hình ảnh</th>
                <th > Mô tả</th>
                <th>home</th>
                <th>Ghi chú</th>
                <th>trạng Thái</th>
                <th>ngày tạo</th>
                <th>thao tác</th>
              </tr>
              @foreach ($article as $item)
               <tr>
               <td>{{$item['id']}}</td>
               <td class="pl-1 w-25">
                 {{$item['a_name']}}</td>
                 <td><img src="{{pare_url_file($item->a_avatar)}}" class="w-50 img-responsive}" alt=""></td>  
                  
               <td>{{$item['a_description']}}</td> 
               <td class="badge  {{$item->gethome()['class']}}"><a href="{{route('admin.action.list.article',['hot',$item->id])}}">{{$item->gethome()['name']}}</a></td> 
               <td>{{$item['a_title_seo']}}</td>  
               <td class="badge  {{$item->getstatus()['class']}}"><a href="{{route('admin.action.list.article',['active',$item->id])}}">{{$item->getStatus()['name']}}</a></td>
            <td>{{$item['created_at']}}</td>
               <td><a href="{{route('admin.edit.list.article',$item['id'])}}" class="btn btn-success"><i class="fas fa-pen">Sửa</i></a>
               <a href="{{route('admin.action.list.article',['delete',$item->id])}}" class="btn btn-danger"><i class="fas fa-trash">Xóa</i></a>
               </td>
               </tr>   
              @endforeach
            </table>
            {{-- {{$pt->links()}} --}}
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

    <!-- Icons -->
    <script src="{{asset('theme_admin/feather.min.js')}}"></script>
    <script>
      feather.replace()
    </script>
  

</body><div class="corom-element" style="all: initial;"></div></html>
@endsection
