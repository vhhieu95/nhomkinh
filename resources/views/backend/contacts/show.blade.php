@extends('backend.layouts.main')

@section('title', __('Quản lý liên hệ'))

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-xs-12  ">
          <div class="box clearfix">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">{{ __('Liên Hệ ') }}</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <div class="mailbox-read-info">
                  <h3>{{ __('Tên:') }} {{ $contact->name }}</h3>
                  <h4>{{ __('Email:') }} {{ $contact->email }}
                  <h4>{{ __('Số điện thoại:') }} {{ $contact->phone }}
                    <span class="mailbox-read-time pull-right">{{ $contact->created_at }}</span>
                  </h4>
                </div>
                <div class="mailbox-read-info">
                    <h3>{{ $contact->subject }}</h3>
                </div>
                <div class="mailbox-read-message">
                  <p>{{ $contact->content }} </p>
                </div>
              </div>
              <div class="box-footer">
                @include('backend.layouts.partials.modal')
                <div class="pull-right">
                  <form  class="form-delete" method="post" 
                    action="{{ route('contacts.destroy', $contact->id) }}">
                    {!! csrf_field() !!}
                    {{ method_field('DELETE') }}
                    <button class=" btn btn-default btn-delete-item fa fa-trash-o"
                      data-title="{{ __('Xác nhận xóa!') }}"
                      data-confirm="{{ __('Bạn có chắc chắn xóa?') }}" 
                      type="submit" >
                    </button>  
                  </form> 
                </div>
                <a class="btn btn-default btn-custom" id="btn-go-back" 
                  href="javascript:history.back()">
                  <i class="fa fa-arrow-left"></i>{{ __(' Trở về') }}
                </a>
              </div>
            </div>
          </div>   
        </div>   
      </div>
    </section>
  </div>
@endsection
