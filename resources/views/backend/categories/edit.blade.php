@extends('backend.layouts.main')
@section('title', 'Sửa danh mục')
@section('content')  
  <div class="content-wrapper">
    <!-- Main content -->
     <section class="content">
      <h1 class="title-page text-success">
        {{ __('Sửa danh mục') }}
      </h1>
      <div class="row margin-center">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title lead">{{ __('Nhập thông tin') }}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('categories.update', $category->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
             <input type="hidden" name="id" value="{{ $category->id }}"> 
              <div class="box-body">
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="InputName">{{ __('Tên danh mục') }}</label>
                    
                  <input type="text" class="form-control" id="InputName" placeholder="Input Category Name" value="{{ $category->name }}" title="Input Name" name="name">
                  <span class="alert-danger">{{ $errors->first('name') }}</span>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{ route('categories.index') }}" id="cancel" name="cancel" class="btn btn-default">{{ __('Trở lại')}}</a>
                <button type="reset" class="btn btn-warning">{{ __('Xóa') }}</button>
                <button type="submit" class="btn btn-primary pull-right">{{ __('Xác nhận') }}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>    
  </div>
@endsection