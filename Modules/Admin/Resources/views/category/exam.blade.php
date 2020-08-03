
@extends('admin::layouts.master')
@section('NoiDung')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Trang chủ </a></li>
    <li class="breadcrumb-item"><a href="#">Danh Mục </a></li>
    <li class="breadcrumb-item active" aria-current="page">Danh Sách</li>
  </ol>
</nav>

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
@if (Session::has('sucesss'))
<div class="pull-right alert alert-success" style=" display: inline-table;float: right;">
    <strong>Success!</strong> {{session('sucesss')}}
  </div>
@endif  
          <div class="table-responsive">
            <h1>TRANG CHÍNH    <a name="" id="" class="float-right btn btn-primary" href="{{route('admin.create.list.category')}}" role="button">Thêm mới</a> </h1>
            <table class="table table-striped table-sm">
              <tr>
                <th>id</th>
                <th>tên</th>
                <th>title_ceo</th>
                <th>Trang chủ</th>
                <th>trạng thái</th>
                <th>thao tác</th>
              </tr>
              @foreach ($pt as $item)
              
               <tr>
               <td>{{$item['id']}}</td>
               <td>{{$item['c_name']}}</td>
               <td>{{$item['c_detail_seo']}}</td>
               <td ><a href="{{route('admin.action.list.category',['home',$item['id']])}}" class="btn  {{$item->gethome()['class']}}">{{$item->gethome()['name']}}</a></td>
               <td ><a href="{{route('admin.action.list.category',['active',$item['id']])}}" class="badge  {{$item->getstatus()['class']}}">{{$item->getStatus()['name']}}</a></td>
               <td><a href="{{route('admin.edit.list.category',$item->id)}}" class="btn btn-success">Sửa</a>
               <a href="{{route('admin.action.list.category',['delete',$item->id])}}" class="btn btn-danger">Xoá</a>
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
