@extends('user.layout')
@section('content')
@if (Session::has('sucesss'))
<div class="pull-right alert alert-success" style=" display: inline-table;float: right;">
    <strong>Success!</strong> {{session('sucesss')}}
  </div>
@endif
<h1>Cập Nhật Mật Khẩu</h1>
<div class="row">
    <div class="col-12">
        <form action= ""  method="POST">
            @csrf
            <div class="form-group" style="position: relative">
              <label for="email" >Mật khẩu cũ</label>
              <input type="password" class="form-control"  name="password" value="" placeholder="*****************">
              <a href="javascript:;void(0)"  style="position: absolute;right: 2%; top: 57%;"><i class="fa fa-eye"></i></a>
              @if($errors->has('password'))
    <div class="error-text text-danger">
        {{$errors->first('password')}}
    </div>
          @endif
            </div>
            <div class="form-group" style="position: relative">
              <label for="pwd" >Mật Khẩu mới</label>
              <input type="password" class="form-control" placeholder="*****************"  name="newpassword" value="">
              <a href="javascript:;void(0)"  style="position: absolute;right: 2%; top: 57%;"><i class="fa fa-eye"></i></a>
              @if($errors->has('newpassword'))
              <div class="error-text text-danger">
                  {{$errors->first('newpassword')}}
              </div>
                    @endif
            </div>
            <div class="form-group" style="position: relative">
                <label for="pwd" >Nhập lại mật khẩu mới</label>
                <input type="password" class="form-control" placeholder="*****************"  name="newpassword2" value="">
                <a href="javascript:;void(0)" style="position: absolute;right: 2%; top: 57%;"><i class="fa fa-eye"></i></a>
                @if($errors->has('newpassword2'))
                <div class="error-text text-danger">
                    {{$errors->first('newpassword2')}}
                </div>
                      @endif
              </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-user"> cập Nhật</i></button>
          </form>
    </div>
</div>

@endsection
@section('script')
    <script>
      $(function()
      {
       $(".form-group a").click(function()
       {
        let $this=$(this);
         if($this.hasClass('active'))
         {
             
            $this.parents(".form-group").find("input").attr("type","password");
           $this.removeClass("active");
         }
         else
         {
            $this.parents(".form-group").find("input").attr("type","text");
           
            $this.addClass("active");
         }
       })
      });
    </script>

@endsection