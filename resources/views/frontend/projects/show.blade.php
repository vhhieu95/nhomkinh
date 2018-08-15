@extends('frontend.layouts.master')
@section('title', __(':title', ['title' => $project->title]))
@section('content')
<div class="container">
  <div class="row">
    <!-- Agent Section -->
    <section id="agent_sec" class="col-md-8">
      <!-- Agent Info -->
      <div class="agen_info2">
        <div class="col-md-5">
          <img class="img-responsive cls-img" src="{{asset($project->image)}}" alt="">
          
        </div>
        <div class="col-md-7">
          <div class="panel panel-default ">
            <div class="panel-body cls-img">
              <div class="row agen_desc">
                <div class="col-md-7">
                  <h3 class="sec_titl">{{$project->title}}</h3>
                </div>
                <div class="col-md-5 p0">
                  <div class="soc_icon">
                    {{-- <a href="#"> <i class="fa fa-facebook"></i> </a> --}}
                    <div class="fb-share-button" data-href="{{ route('du-an.show', $project->slug ) }}" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Chia sẻ</a></div>
                  </div>
                </div>
              </div>
              <p class="sec_desc">
                  <strong>{{$project->content}}</strong> </p>
              <p class="sec_desc">
                {{$project->description}}
              </p>
              <div class="panel_bottom">
                <div class="agen_feat">
                  <p class="area">
                      <a href="tel: 0906202195"> <i class="fa fa-phone"></i>  0906202195 </a>
                  </p>
                  <p class="bedrom">
                      <a href="mailto:Housedoor.qtp@gmail.com?Subject=Agent%20enquiry"> <i class="fa fa-envelope"></i> Housedoor.qtp@gmail.com </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="spacer-30"></div>
        <!-- Property Listing -->
      <div class="row prlist_sec">
        <div class="titl_sec">
          <div class="col-lg-12">
            <h3 class="main_titl text-left">
              {{('Sản phẩm')}}
            </h3>

          </div>
          <div class="clearfix"></div>
        </div>
          <!-- Property List -->
        @foreach($products as $product)
          <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-image">
                @if(isset($product->images[0]))
                  <img class="img-responsive cls-img" src="{{asset($product->images[0]->path)}}">
                @else
                  <img class="img-responsive cls-img" src="{{asset(config('constant.default_image' )) }}">
                @endif
                <div class="img_hov_eff">
                  <a class="btn btn-default btn_trans" href="{{route('san-pham.show', $product->slug)}}">{{('Chi tiết')}}</a>
                </div>
              </div>

              <div class="panel-body">
                <h3 class="sec_titl">{{$product->name}}</h3>
                <p class="sec_desc">
                  {{contentLimit($product->description)}}
                </p>
                <div class="panel_bottom">
                  <div class="col-md-6">
                      <p class="price text-left">{{('Liên hệ')}}</p>
                  </div>
                  <div class="col-md-6">
                    <p class="readmore text-right"> <a href="#">{{('Chi tiết')}}</a> </p>
                    <div class="share_btn">
                      <i class="fa fa-share-alt"></i>
                      <div class="soc_btn">
                        <ul>
                          <li>
                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                            <a href="#"> <i class="fa fa-google-plus"></i> </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </section>
    <!-- Sidebar Section -->
    @include('frontend.layouts.partials.aside')
    <div class="spacer-60"></div>
  </div>
</div>
@endsection