@extends('backend.layouts.main')
@section('title','Sửa thông tin sản phẩm')
@section('content')  
  <div class="content-wrapper">
    <section class="content">
      <h1 class="title-page text-success">
        {{__('Sửa thông tin sản phẩm')}}
      </h1>
      <div class="row margin-center">
        <div class="col-md-12">
          <div class="cls-editnews-msg">
            @include('flash::message')
          </div>
          <div class="box box-primary">
            <form method="POST" action="{{ route('products.update',$product->id) }}" enctype="multipart/form-data">
              {{csrf_field()}}
              {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                  <label>{{__('Tên sản phẩm')}}</label>
                  <input type="text" class="form-control" name="name"
                  value="{{$product->name}}">
                  @if($errors->first('name'))
                      <span class="help-block">{{$errors->first('name')}}</span>
                  @endif
                </div>
                <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                  <label>{{__('Mô tả')}}</label>
                  <textarea class="ckeditor form-control" name="description">{{$product->description}}</textarea>
                  @if($errors->first('description'))
                      <span class="help-block">{{$errors->first('description')}}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label>{{__('Danh mục')}}</label>
                  <select name = "category_id" class="form-control">
                  <option></option>
                  @foreach($categories as $category)
                    <option value="{{$category->id}} "
                      {{ $category->id == $product->category->id ? 'selected' : '' }}>
                      {{$category->name}}
                    </option>
                  @endforeach
                </select>
                 {{--  <input type="text" class="form-control" readonly="true" value="{{ $product->category->name  }}"> --}}
                </div>
                {{-- old images --}}
                @include('backend.layouts.partials.modal')
                <div class="form-group">
                  <label for="old-images">{{ __('Hình ảnh hiện tại') }}</label>
                  <div
                    id="old-images"
                    class="col-md-12"
                    data-token="{{ csrf_token() }}"
                    data-title="{{ __('Xác nhận xóa!') }}"
                    data-confirm="{{ __('Bạn chắc chắn muốn xóa ảnh?') }}">
                    @if (isset($product->images[0]))
                      @foreach ($product->images as $img)
                        <div id="old-img-{{ $img->id }}" class="col-md-3 text-center img-contain">
                          <button
                            data-url="{{ route('image.destroy', $img->id) }}"
                            class="btn-remove-img btn-link fa fa-times fz-20">
                          </button>
                          <img class="img-product" src="{{ asset($img->path) }}">
                        </div>
                      @endforeach
                    @else
                      <div id="old-images" class="text-info">{{ __('Không có hình ảnh') }}</div>
                    @endif
                  </div>
                </div>
                <div class="form-group {{ $errors->has('images') || $errors->has('images.*') ? ' has-error' : '' }}"> 
                  <label for="input-file">{{ __("Chọn hình ảnh") }}</label>
                  <input type="file" class="form-control" name="images[]" id="multiple-image" multiple>
                  <small class=" text-danger">{{ $errors->first('images.*') . $errors->first('images') }}</small>
                  <div id="showImage" class="mt-20 ml-2per">
                    <img class="img-product pd-0" id="default-image" src="{{ asset(config('constant.default_image')) }}">
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <div class="btn-edit-news">
                  <a href="{{ route('products.index') }}" class="btn btn-default">
                    {{__('Trở lại')}}
                  </a>                
                  <button type="reset" class="btn btn-warning">
                    {{__('Xóa')}}
                  </button> 
                  <button type="submit" class="pull-right btn btn-primary">
                    {{__('Xác nhận')}}</button>
                </div>
                 
                  
                
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection