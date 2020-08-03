@extends('admin::layouts.master')
@section('NoiDung')
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="{{route('tc')}}">Trang chủ </a></li>
<li class="breadcrumb-item"><a href="{{route('admin.get.list.category')}}">Danh Mục </a></li>
    <li class="breadcrumb-item active" aria-current="page">Thêm mới</li>
</ol>
@if (Session::has('sucesss'))
<div class="pull-right alert alert-success" style=" display: inline-table;float: right;position: fixed">
    <strong>Success!</strong> {{session('sucesss')}}
  </div>
@endif
@if (Session::has('danger'))
<div class="pull-right alert alert-danger" style=" display: inline-table;float: right; position: fixed">
    <strong>Thất Bại!</strong> {{session('danger')}}
  </div>
@endif
@include('admin::category.form');
@endsection