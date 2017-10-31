@extends('backend.layouts.main')
@section('title', 'Thêm danh mục')
@section('content')
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <h1 class="text-center text-success">
        {{ __("Tạo danh mục") }}
      </h1>
      <div class="row margin-center">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title lead">{{ __("Nhập thông tin") }}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('categories.store') }}" class="">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="input-name">{{ __('Tên danh mục') }}</label>
                  <input type="text" class="form-control" id="input-name" placeholder="{{ __('Nhập tên danh mục')}}" value="" title="Input Name" name="name" class="col-md-6">
                  <br/>
                  <small class="text-danger">{{ $errors->first('name') }}</small>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{ route('categories.index') }}" id="cancel" name="cancel" class="btn btn-default">{{ __('Trở lại') }}</a>
                <button type="reset" class="btn btn-warning">{{ __('Nhập lại') }}</button>
                <button type="submit" class="btn btn-primary btn-submit pull-right">{{ __('Xác nhận') }}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
