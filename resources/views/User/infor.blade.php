@extends('user.layout')
@section('content')
@if (Session::has('sucesss'))
<div class="pull-right alert alert-success" style=" display: inline-table;float: right;">
    <strong>Success!</strong> {{session('sucesss')}}
  </div>
@endif
<h1>Cập Nhật Thông Tin</h1>
<div class="row">
    <div class="col-12">
        @isset($user)
        <form action= ""  method="POST">
            @csrf
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" id="email" name="email" value="{{old('email',isset($user->email)? $user->email:' ' )}}">
            </div>
            <div class="form-group">
              <label for="pwd">Họ Tên</label>
              <input type="text" class="form-control" placeholder="nhập họ tên" id="pwd" name="name" value="{{old('name',isset($user->name)? $user->name:' ' )}}">
            </div>
            <div class="form-group">
                <label for="pwd">Số Điện Thoại</label>
                <input type="phone" class="form-control" placeholder="nhập số điện thoại" id="pwd" name="phone" value="{{old('phone',isset($user->phone)? $user->phone:' ')}}">
              </div>
              <div class="form-group">
                <label for="pwd">Địa chỉ</label>
                <input type="text" class="form-control" placeholder="nhập Địa chỉ" id="pwd" name="address" value="{{old('adddress',isset($user->address)? $user->address:' ')}}">
              </div>
              <div class="form-group">
                <label for="pwd">giới thiệu bản thân</label>
               <textarea name="about" cols="30" rows="5" class="form-control" placeholder="Mô tả bản thân">{{old('about',isset($user->about)? $user->about:' ')}}</textarea>
              </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-user"> cập Nhật</i></button>
          </form>
    </div>
</div>
@endisset

@endsection
