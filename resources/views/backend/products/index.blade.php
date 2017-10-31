@extends('backend.layouts.main')
@section('title', 'Quản lý sản phẩm')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ __('Quản lý sản phẩm') }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i>{{ __('Trang chủ') }}</a></li>
        <li class="active">{{ __('Quản lý Sản phẩm') }}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="title-category mb-10">
                <h3 class="box-title title-header">{{ __('Danh sách sản phẩm') }}</h3>
              </div>  
              <div class="row">
                <div class="contain-btn pull-right">
                   <a href="{{ route('products.create') }}" class="btn btn-primary">
                    <span class="fa fa-plus-circle" aria-hidden="true"></span>
                    {{ __('Thêm sản phẩm') }}
                  </a> 
                </div>
              </div>
            </div>
           
            <!-- /.box-header -->
            <div class="box-body">
              @include('flash::message')
              @include('backend.layouts.partials.modal')
              <table id="data-table" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th class="col-md-1">{{ __('ID') }}</th>
                  <th>{{ __('Hình ảnh') }}</th>
                  <th>{{ __('Tên sản phẩm') }}</th>
                  <th>{{ __('Mô tả') }}</th>
                  <th class="col-md-2 text-center">{{ __('Tùy chọn') }}</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($products as $product)
                    <tr>
                      <td>{{ $product->id }}</td>
                      <td>
                        @if (isset($product->images[0]))
                          <img class="img-product" src="{{ asset($product->images[0]->path) }}" >
                        @else   
                          <img class="img-product" src="{{ asset(config('constant.default_image')) }}" >
                        @endif
                      </td>
                      <td>{{ $product->name }}</td>
                      <td>{{ strip_tags($product->description) }}</td>
                      <td align="center">
                        <div class="btn-option text-center">
                          <a href="{{ route('products.edit',$product->id) }}" 
                            class= "btn-edit fa fa-pencil-square-o btn-custom-option pull-left"></a>
                          <form method="POST" action="{{ route('products.destroy', $product->id) }}"
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
                <a href="{{ route('products.create') }}" class="btn btn-primary">
                  <span class="fa fa-plus-circle" aria-hidden="true"></span>
                  {{ __('Thêm sản phẩm ') }}
                </a> 
              </div>
              {{ $products->render() }}
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