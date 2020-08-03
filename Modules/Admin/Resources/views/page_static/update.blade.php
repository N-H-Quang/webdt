@extends('admin::layouts.master')
@section('NoiDung')
@section('NoiDung')
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="{{route('tc')}}">Trang chủ </a></li>
<li class="breadcrumb-item"><a href="{{route('get.list.page_static ')}}">Bài Viết </a></li>
    <li class="breadcrumb-item active" aria-current="page">Thêm mới</li>
</ol>
@endsection
@include('admin::page_static.form')
@endsection