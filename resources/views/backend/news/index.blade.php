@extends('backend.layouts.main')
@section('title','Quản lý tin tức')
@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>{{__('Quản lý tin tức')}}
      </h1>
      <ol class="breadcrumb">
        <li>
          <a href="#"><i class="fa fa-dashboard"></i>{{__('Home')}}</a>
        </li>
        <li class="active">{{__('Tin tức')}}</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="title-news mb-10">
                <h3 class="box-title title-header">{{__('Danh sách tin tức ')}}</h3>
              </div>
              <div >
                <a href="{{ route('news.create') }}" class="btn btn-primary pull-right">
                  <i class="fa fa-plus-circle"></i>
                  {{__('Tạo Tin Tức')}}
                </a>
              </div>
            </div>
            <div class="box-body">
              @include('flash::message')
              @include('backend.layouts.partials.modal')
              <table id="data-table" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>{{__('Id')}}</th>
                  <th>{{__('Tiêu đề')}}</th>
                  <th>{{__('Mô tả')}}</th>
                  <th class=" col-md-1 text-center">{{__('Option')}}</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($news as $item)
                  <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->description}}</td>
                    <td class="text-center col-md-2">
                      <div class="btn-option text-center">
                        <a href="{{ route('news.edit',$item->id) }}" class="btn fa fa-pencil-square-o news-btn pull-left btn-custom-option" data-original-title="Edit" data-toggle="tooltip">
                        </a>
                        <form action="{{ route('news.destroy',$item->id) }}" 
                          method="POST" class="inline">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}
                          <button type="submit" class="news-btn fa fa-trash-o 
                            btn-delete-item pull-left btn-custom-option"  
                            data-original-title="Delete" data-toggle="tooltip"
                            data-title="{{ __('Xác nhận xóa!') }}"
                            data-confirm="{{ __('Bạn có chắc chắn xóa?') }}">
                          </button>
                        </form>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="cls-searchnews-not-found text-center" hidden="">
                {{__('Không có dữ liệu')}}
              </div>
              <div class="contain-btn second pull-right">
                <a href="{{ route('news.create') }}" class="btn btn-primary">
                  <span class="fa fa-plus-circle" aria-hidden="true"></span>
                  {{__('Tạo Tin Tức')}}
                </a> 
              </div>
              {{ $news->render() }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
