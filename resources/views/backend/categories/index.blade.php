@extends('backend.layouts.main')
@section('title', 'Quản lý danh mục')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ __('Quản lý danh mục') }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i>{{ __('Trang chủ') }}</a></li>
        <li class="active">{{ __('Danh mục') }}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="title-category mb-10">
                <h3 class="box-title title-header">{{ __('Danh sách danh mục') }}</h3>
              </div>  
              <div class="row">
                <div class="contain-btn pull-right">
                   <a href="{{ route('categories.create') }}" class="btn btn-primary">
                    <span class="fa fa-plus-circle" aria-hidden="true"></span>
                    {{ __('Thêm danh mục') }}
                  </a> 
                </div>
              </div>
            </div>
           
            <!-- /.box-header -->
            <div class="box-body">
              @include('flash::message')
              @include('backend.layouts.partials.modal')
              <table id="example" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th class="col-md-1">{{ __('ID') }}</th>
                  <th>{{ __('Tên danh mục') }}</th>
                  <th class="col-md-2 text-center">{{ __('Tùy chọn') }}</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $category)
                    <tr>
                      <td>{{ $category->id }}</td>
                      <td>{{ $category->name }}</td>
                      <td align="center">
                        <div class="btn-option text-center">
                          <a href="{{ route('categories.edit',$category->id) }}" 
                            class= "btn-edit fa fa-pencil-square-o btn-custom-option pull-left"></a>
                          <form method="POST" action="{{ route('categories.destroy', $category->id) }}"
                            class="form-del inline" >
                            {{ method_field('DELETE') }}
                            <input type="hidden" name="_token"  value="{!! csrf_token()!!}">
                            <button type="submit" 
                              class="btn-custom-option btn btn-delete-item fa fa-trash-o"
                              data-title="{{ __('Xác nhận xóa !') }}"
                              data-confirm="{{ __('Bạn chắc chắn muốn xóa ?') }}">
                            </button>
                          </form>
                        </div>  
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="cls-search-not-found text-center" hidden="">
                {{__('Không tìm thấy dữ liệu')}}
              </div>
              <div class="contain-btn second pull-right">
                <a href="{{ route('categories.create') }}" class="btn btn-primary">
                  <span class="fa fa-plus-circle" aria-hidden="true"></span>
                  {{ __('Thêm danh mục') }}
                </a> 
              </div>
              {{ $categories->render() }}
            </div>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection