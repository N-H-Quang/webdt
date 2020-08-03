
@extends('admin::layouts.master')
@section('NoiDung')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Trang chủ </a></li>
    <li class="breadcrumb-item"><a href="#">Đơn hàng </a></li>
    <li class="breadcrumb-item active" aria-current="page">Danh Sách</li>
  </ol>
</nav>
<form>

</form> 
          <div class="table-responsive">
            <h1>Quản lý Đơn hàng  </h1>
            <table class="table table-striped table-sm">
              
              <tr>
                
                <th>id</th>
                <th>tên Hiển thị</th>
                <th>Email</th>
                <th>Số Điện Thoại</th>
                <th>Hinh anh</th>
                <th>Thao Tác</th>

              </tr>
              @isset($users)
                @foreach ($users as $item)
                    <tr>
                      <td>{{$item['id']}}</td>
                      <td>{{$item['name']}}</td>
                      <td>{{$item['email']}}</td>
                      <td>{{$item['phone']}}</td>
                      <td><img src="{{pare_url_file($item->avatar)}}" class="w-50 img-responsive" alt=""></td>  
                      <td><a href="{{route('admin.edit.list.products',$item['id'])}}" class="btn btn-success"><i class="fas fa-pen">Sửa</i></a>
                        <a href="{{route('admin.action.list.products',['delete',$item->id])}}" class="btn btn-danger"><i class="fas fa-trash">Xóa</i></a>
                    </tr>
                @endforeach
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
