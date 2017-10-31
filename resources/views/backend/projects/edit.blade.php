@extends('backend.layouts.main')
@section('title','Sửa Dự Án')
@section('content')
  <div class="content-wrapper">
    <section class="content">
      <h1 class="title-page text-success">
        {{__('Sửa Dự Án')}}
      </h1>
      <div class="row margin-center">
        <div class="col-md-12">
          <div class="cls-editnews-msg">
            @include('flash::message')
          </div>
          <div class="box box-primary">
            <form method="POST" action="{{ route('projects.update',$project->id) }}" enctype="multipart/form-data">
              {{csrf_field()}}
              {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group" {{ $errors->has('title') ? ' has-error' : '' }}>
                  <label>{{__('Tiêu đề ')}}</label>
                  <input type="text" class="form-control" name="title"
                  value="{{$project->title}}">
                  @if($errors->first('title'))
                      <span class="help-block">{{$errors->first('title')}}</span>
                  @endif
                </div>
                <div class="form-group" {{ $errors->has('description') ? ' has-error' : '' }}>
                  <label>{{__('Mô tả')}}</label>
                  <textarea class="form-control" name="description">{{$project->description}}</textarea>
                  @if($errors->first('description'))
                      <span class="help-block">{{$errors->first('description')}}</span>
                  @endif
                </div>
                <div class="form-group" {{ $errors->has('content') ? ' has-error' : '' }}>
                  <label>{{__('Nội dung ')}}</label>
                  <textarea class="ckeditor form-control" name="content">{{$project->content}}</textarea>
                  @if($errors->first('content'))
                      <span class="help-block">{{$errors->first('content')}}</span>
                  @endif
                </div>
                <div class="form-group {{ $errors->has('image') || $errors->has('image') ? ' has-error' : '' }}"> 
                  <label for="input-file">{{ __("Hình ảnh") }}</label>
                  <input type="file" class="form-control" name="image" id="multiple-image" multiple>
                  <small class="text-danger">{{ $errors->first('image') . $errors->first('image') }}</small>
                  <div id="showImage" class="mt-20 ml-2per">
                    <img class="img-place pd-0" id="default-image" src="{{ asset(config('image.no_image')) }}">
                  </div>
                <div class="form-group">
                  <img src="{{ $project->image }}" class="img-thumbnail" width="170px" height="100px" alt="projects">
                </div>
                </div>
              </div>
              <div class="box-footer">
                <div class="btn-edit-news">
                  <a href="{{ route('projects.index') }}" class="btn btn-default">
                    {{__('Back')}}
                  </a>                
                  <button type="reset" class="btn btn-warning">
                    {{__('Reset')}}
                  </button> 
                </div>
                <div class="edit-news-submit pull-right">
                  <button type="submit" class="btn btn-primary">
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
