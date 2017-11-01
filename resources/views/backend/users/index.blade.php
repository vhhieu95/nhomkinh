@extends('backend.layouts.main')
@section('title', 'Quản lý người dùng')
@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        {{ __('Quản lý người dùng') }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i> {{ __('Trang chủ') }}</a></li>
        <li class="active">{{ __('Người dùng') }}</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="title-user mb-10">
                <h3 class="box-title title-header">{{ __('Danh sách người dùng') }}</h3>
              </div>  
              <div class="row">
                <div class="col-xs-12">
                  <a class="btn btn-primary pull-right" href="{{ route('users.create')}}">
                  <span class="fa fa-plus-circle"></span>
                  {{ __('Thêm người dùng') }}
                  </a>
                </div>
              </div>
            </div>
            <div class="box-body">
              @include('flash::message')
              @include('backend.layouts.partials.modal')
              <table id="table-contain" class="table table-bordered table-responsive table-striped">
                <thead>
                  <tr align="center">
                    <th>{{ __('ID') }}</th>
                    <th>{{ __('Họ Tên') }}</th>
                    <th>{{ __('Email')}}</th>
                    <th class="text-center col-md-2">{{ __('Option') }}</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                    <tr>
                      <td>{{ $user->id }}</td>
                      <td>
                        <a href="{{ route('users.show', $user->id) }}">
                          {{ $user->name }}
                        </a>
                      </td>
                      <td>{{ $user->email }}</td>
                      {{-- <td>
                        <div class="btn-option text-center">
                          <a href="{{ route('users.show', $user->id) }}"  class="btn fa fa-search-plus pull-left news-btn btn-custom-option"  data-original-title="Xem" data-toggle="tooltip">
                          </a>
                          <a href="{{ route('users.edit', $user->id) }}"  class="btn fa fa-pencil-square-o news-btn  pull-left btn-custom-option " data-original-title="Sửa" data-toggle="tooltip">
                          </a>
                          <form method="POST" action="{{ route('users.destroy', $user->id) }}" class="inline">
                            {!! csrf_field() !!}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn-custom-option news-btn fa fa-trash-o btn-delete-item pull-right"  
                              data-original-title="{{ __('Delete') }}" data-toggle="tooltip"
                              data-title="{{ __('Confirm deletion!') }}"
                              data-confirm="{{ __('Are you sure you want to delete?') }}">
                            </button>
                          </form> 
                        </div>
                      </td> --}}
                      <td align="center">
                        <div class="text-center">
                          <a href="{{ route('users.show', $user->id) }}"
                            data-original-title="{{ __('Xem') }}" data-toggle="tooltip"
                            class="btn fa fa-search-plus pull-left news-btn btn-custom-option">
                          </a>
                          <a href="{{ route('users.edit', $user->id) }}"
                            class="btn fa fa-pencil-square-o news-btn center-block btn-custom-option" 
                            data-original-title="{{ __('Sửa') }}" data-toggle="tooltip" >
                          </a>
                          <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn-custom-option news-btn fa fa-trash-o btn-delete-item pull-right"  
                              data-original-title="{{ __('Xóa') }}" data-toggle="tooltip"
                              data-title="{{ __('Confirm deletion!') }}"
                              data-confirm="{{ __('Are you sure you want to delete?') }}">
                            </button>
                          </form>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="cls-search-not-found text-center" hidden="">
                {{__('Dữ liệu không tìm thấy')}}
              </div>
              <div class="contain-btn second">
                <a class="btn btn-primary pull-right" href="{{ route('users.create')}}">
                  <span class="fa fa-plus-circle"></span>
                  {{ __('Thêm người dùng') }}
                </a>
              </div>
              {!! $users->render() !!}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection