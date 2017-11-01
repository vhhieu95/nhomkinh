@extends('backend.layouts.main')
@section('title','Quản lý liên hệ')
@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>{{__('Quản lý liên hệ ')}}
      </h1>
      <ol class="breadcrumb">
        <li>
          <a href="#"><i class="fa fa-dashboard"></i>{{__('Trang chủ')}}</a>
        </li>
        <li class="active">{{__('Liên Hệ')}}</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="title-news mb-10">
                <h3 class="box-title title-header">{{__('Danh sách liên hệ ')}}</h3>
              </div>
            </div>
            <div class="box-body">
              @include('flash::message')
              @include('backend.layouts.partials.modal')
              <table id="data-table" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>{{__('Id')}}</th>
                  <th>{{__('Tên')}}</th>
                  <th>{{__('Email')}}</th>
                  <th>{{__('Tiêu đề ')}}</th>
                  <th class=" col-md-1 text-center">{{__('Tùy chọn')}}</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($contacts as $item)
                  <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->subject }}</td>
                    <td class="text-center col-md-2">
                      <div class="btn-option text-center">
                        <a href="{{ route('contacts.show',$item->id) }}" class="btn fa fa-search news-btn pull-left btn-custom-option" data-original-title="Xem" data-toggle="tooltip">
                        </a>
                        <form action="{{ route('contacts.destroy',$item->id) }}" 
                          method="POST" class="inline">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}
                          <button type="submit" class="news-btn fa fa-trash-o 
                            btn-delete-item pull-left btn-custom-option"  
                            data-original-title="Xóa" data-toggle="tooltip"
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
              {{ $contacts->render() }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
