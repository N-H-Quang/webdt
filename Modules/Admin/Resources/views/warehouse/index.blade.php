
@extends('admin::layouts.master')
@section('NoiDung')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Trang chủ </a></li>
    <li class="breadcrumb-item"><a href="#">Kho</a></li>
  </ol>
</nav>

          <div class="table-responsive">
          <h1>Quản lý sản phẩm <a class="{{Request::get('type')=='inventory'|| !Request::get('type')=='pay' ? 'active':''}}" href="?type=inventory">Hàng tồn</a><a class="{{Request::get('type')=='pay' ? 'active':''}}" href="?type=pay">bán chạy</a>   </h1>
            <table class="table table-striped table-sm">
              
              <tr>
                
                <th>id</th>
                <th>tên sản phẩm</th>
                <th>danh mục</th>
                <th>Loại sản phẩm</th>
                <th>Hinh anh</th>
                <th>trạng Thái</th>
                <th>Nổi bật</th>
                <th>thao tác</th>
              </tr>
              @foreach ($pt as $item)
               <tr>
               <td>{{$item['id']}}</td>
               <td class="pl-1">
                 {{$item['pro_name']}}
                 <ul >
                   <li> {{$item['pro_price']}} <i class="fas fa-dollar-sign"></i></li>
                 <li><i class="fas fa-dollar-sign"> {{$item['pro_sale']}} %</i></li>
                 <li>số lần bán : {{$item->pro_pay}}</li>
                 <li>Còn lại : {{$item->pro_number}}</li>
                 </ul>
              </td>
              
               <td>{{$item['category']->c_name}}</td> 
            
               <td>{{$item['pro_title_seo']}}</td> 
               <td><img src="{{pare_url_file($item->pro_avatar)}}" class="w-50 img-responsive" alt=""></td>  
               <th class=" btn badge  {{$item->getstatus()['class']}}"><a class="text-dark" href="{{route('admin.action.list.products',['active',$item->id])}}"> {{$item->getstatus()['name']}}</a></th>
            <td class="{{$item->gethot()['class']}}"><a class="text-dark" href="{{route('admin.action.list.products',['hot',$item->id])}}">{{$item->gethot()['name']}}</a></td>
               <td><a href="{{route('admin.edit.list.products',$item['id'])}}" class="btn btn-success"><i class="fas fa-pen">Sửa</i></a>
               <a href="{{route('admin.action.list.products',['delete',$item->id])}}" class="btn btn-danger"><i class="fas fa-trash">Xóa</i></a>
               </td>
               </tr>   
              @endforeach
            </table>
            {{$pt->links()}}
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
    <script src="{{asset('theme_admin/bootstrap.min.js')}}"></script>  </body><div class="corom-element" style="all: initial;"></div></html>
@endsection
