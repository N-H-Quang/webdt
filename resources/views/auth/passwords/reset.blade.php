@extends('layout.app')

@section('content')
<div class="container">
    <div aria-label="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="container-inner">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Tài Khoản</a></li>
                            <li class="breadcrumb-item"><a href="#">Quên Mật Khẩu</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thay đổi mật khẩu</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-contact-area">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Nhập password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="newpassword" value="" autocomplete="email">
                                @if($errors->has('newpassword'))
                                <div class="error-text text-danger">
                                    {{$errors->first('newpassword')}}
                                </div>
                                      @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="newpassword2"  >
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    xác nhận password mới
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
