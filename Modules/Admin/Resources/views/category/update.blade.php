@extends('admin::layouts.master')
@section('NoiDung')
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="{{route('tc')}}">Trang chủ </a></li>
<li class="breadcrumb-item"><a href="{{route('admin.get.list.category')}}">Danh Mục </a></li>
    <li class="breadcrumb-item active" aria-current="page">Thêm mới</li>
</ol>
@isset($id)
<h1>lưu thành công</h1>
@endisset
    @include('admin::category.form');
@endsection