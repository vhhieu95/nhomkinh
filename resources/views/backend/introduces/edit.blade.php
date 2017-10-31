@extends('backend.layouts.main')
@section('title','Sửa Giới Thiệu')
@section('content')
  <div class="content-wrapper">
    <section class="content">
      <h1 class="title-page text-success">
        {{__('Sửa Giới Thiệu')}}
      </h1>
      <div class="row margin-center">
        <div class="col-md-12">
          <div class="cls-editnews-msg">
            @include('flash::message')
          </div>
          <div class="box box-primary">
            <form method="POST" action="{{ route('introduces.update',$introduction->id) }}" enctype="multipart/form-data">
              {{csrf_field()}}
              {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group" {{ $errors->has('title') ? ' has-error' : '' }}>
                  <label>{{__('Tiêu đề ')}}</label>
                  <input type="text" class="form-control" name="title"
                  value="{{$introduction->title}}">
                  @if($errors->first('title'))
                      <span class="help-block">{{$errors->first('title')}}</span>
                  @endif
                </div>
                <div class="form-group" {{ $errors->has('content') ? ' has-error' : '' }}>
                  <label>{{__('Nội dung ')}}</label>
                  <textarea class="ckeditor form-control" name="content">{{$introduction->content}}</textarea>
                  @if($errors->first('content'))
                      <span class="help-block">{{$errors->first('content')}}</span>
                  @endif
                </div>
              </div>
              <div class="box-footer">
                <div class="btn-edit-news">
                  <a href="{{ route('introduces.index') }}" class="btn btn-default">
                    {{__('Trở về')}}
                  </a>                
                  <button type="reset" class="btn btn-warning">
                    {{__('Nhập lại')}}
                  </button> 
                  <button type="submit" class="btn btn-primary pull-right">
                    {{__('Thay đổi ')}} 
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
