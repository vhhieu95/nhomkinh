@extends('backend.layouts.main')
@section('title','Tạo Dự Án')
@section('content')
  <div class="content-wrapper">
    <div class="cls-news-error-message">
      @include('flash::message')
    </div>
    <section class="content">
    <h1 class="title-page text-success">{{__('Tạo Dự Án')}}</h1>
      <div class="row  margin-center">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title lead">{{__('Nhập thông tin')}}</h3>
            </div>
            <form role="form" method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
            {{csrf_field()}}
              <div class="box-body">
                <div class="form-group" {{ $errors->has('title') ? ' has-error' : '' }}>
                  <label >{{__('Tiêu đề')}}</label>
                  <input type="text" class="form-control" name="title" value="{{old('title')}}">
                  @if($errors->first('title'))
                    <span class="help-block">{{$errors->first('title')}}</span>
                  @endif
                </div>
                <div class="form-group" {{ $errors->has('description') ? ' has-error' : '' }}>
                  <label>{{__('Mô tả')}}</label>
                  <textarea class="form-control" name="description"></textarea>
                  @if($errors->first('description'))
                    <span class="help-block">{{$errors->first('description')}}</span>
                  @endif
                </div>
                <div class="form-group" {{ $errors->has('content') ? ' has-error' : '' }}>
                  <label>{{__('Nội dung')}}</label>
                  <textarea class="ckeditor form-control" name="content"></textarea>
                  @if($errors->first('content'))
                    <span class="help-block">{{$errors->first('content')}}</span>
                  @endif
                </div>
                <div class="form-group {{ $errors->has('image') || $errors->has('image') ? ' has-error' : '' }}"> 
                  <label for="input-file">{{ __("Hình ảnh") }}</label>
                  <input type="file" class="form-control" name="image" id="multiple-image" multiple>
                  <small class=" text-danger">{{ $errors->first('image.*') . $errors->first('image') }}</small>
                </div>
              </div>
              <div class="box-footer">
                <div class="add-news-button">
                  <a href="{{ route('projects.index') }}" class="btn btn-default">
                    {{__('Trở về')}} 
                  </a>
                  <button type="reset" class="btn btn-warning">
                    {{__('Nhập lại')}}
                  </button>
                  <button type="submit" class="btn btn-primary pull-right">
                  {{__('Tạo')}}
                  </button>
                </div>
              </div>
            </form>
          </div>    
        </div>
      </div>
    </section>
  </div>  
@endsection
