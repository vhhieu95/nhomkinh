@extends('backend.layouts.main')
@section('title', 'Thêm sản phẩm')
@section('content')
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <h1 class="text-center text-success">
        {{ __("Thêm sản phẩm") }}
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
            <form method="POST" action="{{ route('products.store') }}"  enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="input-name">{{ __('Tên sản phẩm') }}</label>
                  <input type="text" class="form-control" id="input-name" placeholder="{{ __('Nhập tên sản phẩm')}}" value="" title="Input Name" name="name" class="col-md-6">
                  <br/>
                  <small class="text-danger">{{ $errors->first('name') }}</small>
                </div>
                <div class="form-group has-feedback
                  {{ $errors->has('description') ? ' has-error' : '' }}">
                  <label for="description">{{ __('Mô tả') }}</label>
                  <textarea class="form-control ckeditor" name= "description" 
                    id="description" placeholder="{{ __('Enter description') }}"
                    value="{{ old('description') }}" ></textarea> 
                  <small class="text-danger">{{ $errors->first('description') }}</small>
                </div>

                <div class="form-group {{ $errors->has('images.*') || $errors->has('images') ? ' has-error' : '' }}"> 
                  <label for="input-file">{{ __("Hình ảnh") }}</label>
                  <input type="file" class="form-control" name="images[]" id="multiple-image" multiple>
                  <small class=" text-danger">{{ $errors->first('images.*') . $errors->first('images') }}</small>
                  <div id="showImage" class="mt-20">
                    <img class="img-place" id="default-image" src="{{ asset(config('image.default_thumbnail')) }}">
                  </div>
                </div>
                
                <div class="form-group" {{ $errors->has('category_id') ? ' has-error' : '' }}>
                  <label>{{__('Chọn danh mục')}}</label>
                  <select name = "category_id" class="form-control">
                    <option></option>
                    @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                  @if($errors->first('category_id'))
                    <span class="help-block">{{$errors->first('category_id')}}</span>
                  @endif
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{ route('products.index') }}" id="cancel" name="cancel" class="btn btn-default">{{ __('Trở lại') }}</a>
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
