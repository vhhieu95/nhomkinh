@extends('backend.layouts.main')
@section('title', 'Thông tin người dùng')
@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        {{ __('Thông tin người dùng') }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i> {{ __('Trang chủ') }}</a></li>
        <li class="active">{{ __('Thông tin người dùng') }}</li>
      </ol>
    </section>
    <section class="content">
      <div class="container cls-user-show">
        <div class="row">
          <div class="col-xs-10 col-sm-10 col-md-10 toppad" >
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title text-center"></h3>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class=" col-md-9 col-lg-9"> 
                    <table class="table table-user-information">
                      <tbody>
                        <tr>
                          <td>
                            <i class="fa fa-user"></i>
                            {{__('Họ Tên')}}
                          </td>
                          <td>
                            {{$user->name}}
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <i class="fa fa-envelope-o"></i>
                            {{__('Email')}}
                          </td>
                          <td>
                            {{$user->email}}  
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="panel-footer clearfix">
                <div >
                  <a href="{{ route('users.index') }}" class="btn btn-default pull-left">
                    {{__('Back')}}
                  </a>
                  <a data-original-title="Sửa" data-toggle="tooltip" href="{{ route('users.edit', $user->id) }}" class="btn btn-success  col-md-1 pull-right">
                    <span class="fa fa-edit"></span>
                  </a>
                </div>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection