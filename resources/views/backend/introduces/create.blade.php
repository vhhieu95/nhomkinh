@extends('backend.layouts.main')
@section('title','Tạo Giới Thiệu')
@section('content')
  <div class="content-wrapper">
    <div class="cls-news-error-message">
      @include('flash::message')
    </div>
    <section class="content">
    <h1 class="title-page text-success">{{__('Tạo Giới Thiệu')}}</h1>
      <div class="row  margin-center">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title lead">{{__('Nhập thông tin')}}</h3>
            </div>
            <form role="form" method="POST" action="{{ route('introduces.store') }}" enctype="multipart/form-data">
            {{csrf_field()}}
              <div class="box-body">
                <div class="form-group" {{ $errors->has('title') ? ' has-error' : '' }}>
                  <label >{{__('Tiêu đề')}}</label>
                  <input type="text" class="form-control" name="title" value="{{old('title')}}">
                  @if($errors->first('title'))
                    <span class="help-block">{{$errors->first('title')}}</span>
                  @endif
                </div>
                <div class="form-group" {{ $errors->has('content') ? ' has-error' : '' }}>
                  <label>{{__('Nội dung')}}</label>
                  <textarea class="form-control" id="ckeditor" name="content"></textarea>
                  @if($errors->first('content'))
                    <span class="help-block">{{$errors->first('content')}}</span>
                  @endif
                </div>   
              </div>
              <div class="box-footer">
                <div class="add-news-button">
                  <a href="{{ route('introduces.index') }}" class="btn btn-default">
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
