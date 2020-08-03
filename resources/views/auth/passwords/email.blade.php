@extends('layout.app')
@section('content')
<div aria-label="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="container-inner">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tài Khoản</a></li>
                        <li class="breadcrumb-item"><a href="#">Quên Mật Khẩu</a></li>
                        <li class="breadcrumb-item active" aria-current="page">xác nhân email</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card-body border-white">
                <div class="row ">
                <form method="POST" action="">
                    @csrf
                    <div class="form-group row ">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Nhập email để láy lại mật khẩu</label>
                        <div class="col-md-">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class=" col-12   my-auto">
                            <button type="submit" class="btn btn-primary " style="margin: auto;display: block">
                            Xác nhận email
                            </button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection