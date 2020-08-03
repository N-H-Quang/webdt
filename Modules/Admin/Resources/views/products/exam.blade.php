
@extends('admin::layouts.master')
@section('NoiDung')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Trang chủ </a></li>
    <li class="breadcrumb-item"><a href="#">Sản Phẩm </a></li>
    <li class="breadcrumb-item active" aria-current="page">Danh Sách</li>
  </ol>
</nav>
<form>
  <div class="form-row mb-2">
    <div class="col-7">
      <input type="text" class="form-control" placeholder="nhập sản phẩm cần tìm" name='name' value="{{\Request::get('name')}}">
    </div>
    <div class="col">
      <select name='category' class="form-control">
        <option value="">--Tên loại danh mục--</option>
        @foreach ($category as $item)
          <option value="{{$item->id}}" 
            {{\Request::get('category')==$item['id'] ? 'selected':' ' }}
            >{{$item->c_name}}</option>
          @endforeach
      </select>
    </div>
    <div class="col">
      <button type="submit" class="form-control btn btn-default" > <i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
  </div>
  @if (Session::has('sucesss'))
<div class="pull-right alert alert-success" style=" display: inline-table;float: right;">
    <strong>Success!</strong> {{session('sucesss')}}
  </div>
@endif
</form> 
          <div class="table-responsive">
            <h1>Quản lý sản phẩm    <a name="" id="" class="float-right btn btn-primary" href="{{route('admin.create.list.products')}}" role="button"><i class="fas fa-plus"></i></a> </h1>
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
    <script src="{{asset('theme_admin/bootstrap.min.js')}}"></script>

    <!-- Icons -->
    <script src="{{asset('theme_admin/feather.min.js')}}"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="{{asset('theme_admin/Chart.min.js')}}"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  

</body><div class="corom-element" style="all: initial;"></div></html>
@endsection
