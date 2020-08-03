@extends('admin::layouts.master')
@section('NoiDung')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Trang chủ </a></li>
        <li class="breadcrumb-item"><a href="#">Danh Mục </a></li>
        <li class="breadcrumb-item active" aria-current="page">Danh Sách</li>
    </ol>
</nav>
<h1>Trang Chinh</h1>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <button class="btn btn-sm btn-outline-secondary">Share</button>
            <button class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
                <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg>
            This week
        </button>
    </div>
</div>
<div class="row">
  <div class="col-sm-6">
  <figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        
    </p>
</figure>
</div>
<div class="col-sm-6">
  <h5>Thống kê đơn hàng</h5>
  <table class="table table-striped table-sm">

    <tr>
      <th>id</th>
      <th>tên Khách Hàng</th>
      <th>Địa Chỉ</th>
      <th>Số Điện Thoại</th>
      <th>Tổng tiền</th>
      <th>trạng Thái</th>
      <th>Ngày mua</th>
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
  <a href="" class="label-default label">Chưa xử lý</a>
  @endif
</td>
<td>{{$item->created_at ? $item->created_at->format('d/m/Y'):''}}</td>

  </tr>    
    @endforeach
  </table>
</div>
</div>
<div class="row">
    <div class="col-sm-6">
        <h2 class="sub-header">Danh sách liên hệ mới nhất</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                      <th>id</th>
                      <th>tiêu đề</th>
                      <th>Họ tên </th>
                      <th>Nội dung</th>
                      <th>trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                  @isset($contact)
                  @foreach ($contact as $item)
                      <tr>
                        <td>{{$item['id']}}</td>
                        <td>{{$item['c_title']}}</td>
                        <td>{{$item['c_name']}}</td>
                        <td>{{$item['c_content']}}</td>
                      <td class="badge {{$item->gettt()['class']}}">{{$item->gettt()['name']}}</td>
                      </tr>
                  @endforeach
                @endisset
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-6">
      <h2 class="sub-header">Danh sách Đánh giá mới nhất</h2>
      <div class="table-responsive">
          <table class="table table-striped table-sm">
              <thead>
                  <tr>
                    <th>id</th>
                    <th>tên TV</th>
                    <th>tên sản phẩm</th>
                    <th>Nội Dung</th>
                    <th>Rating</th>
                  </tr>
              </thead>
              <tbody>
                @isset($rating)
                @foreach ($rating as $item)
                    <tr>
                      <td>{{$item['id']}}</td>
                      <td>{{$item['User']->name}}</td>
                      <td>
                      <a href="{{route('get.detail.product',['hello',$item['product']->id])}}">{{$item['product']->pro_name}}</a></td>
                      <td>{{$item['ra_content']}}</td>
                      <td>{{$item['ra_number']}}</td>
                      
                    </tr>
                @endforeach
                @endisset
              </tbody>
          </table>
      </div>
  </div>
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


</html>
@endsection
@section('script')
    <script>
        let Data= "{{$datamoney}}" ;
        let dataChart=JSON.parse(Data.replace(/&quot;/g,'"'));
        
 // Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Browser market shares. January, 2018'
    },
    subtitle: {
        text: 'Click the columns to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total percent market share'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f} đ'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [
        {
            name: "Thống kê doanh thu",
            colorByPoint: true,
            data:dataChart
        }
    ],
   
});     
    </script>
@endsection
@section('style')
<style>
  .highcharts-figure, .highcharts-data-table table {
    min-width: 310px; 
    max-width: 800px;
    margin: 1em auto;
}

#container {
    height: 400px;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}
 </style>   
@endsection