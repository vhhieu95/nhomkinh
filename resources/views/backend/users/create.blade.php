@extends('backend.layouts.main')
@section('title', 'Thêm người dùng')
@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        {{ __('Thêm người dùng') }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i> {{ __('Trang chủ') }}</a></li>
        <li class="active">{{ __('Thêm người dùng') }}</li>
      </ol>
    </section>
    <section class="content">
      @include('flash::message')
      <div class="row margin-center">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title lead">{{ __('Enter information') }}</h3>
            </div>
            <form role="form" method="POST" action="{{ route('users.store') }}">
              {!! csrf_field() !!}
              <div class="box-body">
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email">{{ __('Email') }}</label>
                  <input type="text" class="form-control {{ $errors->has('email') ? ' has-error' : '' }}" name= "email" id="email" placeholder="{{ __('Vui lòng nhập email của bạn') }}" value="{{ old('email') }}">
                  <small class="text-danger">{{ $errors->first('email') }}</small>
                </div>
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="password">{{ __('Mật khẩu') }}</label>
                  <input type="password" class="form-control" name= "password" id="password" placeholder="{{ __('Vui lòng nhập mật khẩu') }}" >
                  <small class="text-danger">{{ $errors->first('password') }}</small>
                </div>
                <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                  <label for="password_confirmation">{{ __('Xác nhận mật khẩu!') }}</label>
                  <input type="password" class="form-control" name= "password_confirmation" id="password" placeholder="{{ __('Vui lòng xác nhận mật khẩu bạn vừa nhập') }}">
                  <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                </div>
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="name">{{ __('Họ Tên') }}</label>
                  <input type="text" class="form-control" name= "name" id="name" placeholder="{{ __('Vui lòng nhập họ và tên') }}" value="{{ old('name') }}"> 
                  <small class="text-danger">{{ $errors->first('name') }}</small>
                </div>
              </div>
              <div class="box-footer">
                <a href="{{ route('users.index') }}">
                  <button type="button" class="btn btn-default">{{ __('Back') }}</button>
                </a>
                <button type="reset" class="btn btn-warning">{{ __('Reset') }}</button>
                <button type="submit" class="btn btn-primary pull-right">{{ __('Submit') }}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection