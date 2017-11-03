@extends('frontend.layouts.master')
@section('title', __('Trang chủ'))
@section('content')
  <section id="srch_slide">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
           <div class="panel panel-default">
              <div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b> Sản Phẩm Mới </b></div>
              <div class="panel-body">
                 <div class="row">
                    <div class="col-xs-12">
                       <ul class="demo1">
                          @foreach($products as $product)
                          <li class="news-item">
                             <table cellpadding="4">
                                <tr>
                                   <td style="padding-right: 10px">
                                    @if(isset($product->images[0]))
                                      <img class="img-circle" width="80px" src="{{asset($product->images[0]->path)}}">
                                    @else
                                       <img class="img-circle" width="80" src="{{asset(config('constant.default_image' ))}}">
                                    @endif
                                  </td>
                                   <td>
                                     <p><a href="{{route('san-pham.show', $newsproduct->slug)}}">
                                          {{ $product->name }}
                                        </a></p>
                                   
                                     <p>{!!contentLimit($newsproduct->description, 50)!!}</p>
                                   </td>
                                </tr>
                             </table>
                          </li>
                        @endforeach
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="panel-footer"> </div>
           </div>
        
        </div>
        <div class="col-md-8 slide_sec">
          <div id="slider" class="silde_img flexslider">
            <ul class="slides">
              @foreach($newsproduct->images as $key)
              <li>
                @if(isset($key))
                <img src="{{asset($key->path)}}" alt="Slider image" />
                @else
                <img src="{{ asset(config('constant.default_image')) }}" height="400px" with="600px" alt="Slider image" />
                @endif
                <div class="slide-info">
                  <p class="sli_price"><a href="{{route('san-pham.show', $newsproduct->slug)}}">{{('Chi tiết')}}</a></p>
                  <p class="sli_titl">{{$newsproduct->name}} </p>
                  <p class="sli_desc"> {{contentLimit($newsproduct->description, 100)}}</p>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="spacer-60"></div>
  <section id="feat_propty">
    <div class="container">
      <div class="row">
        <div class="titl_sec">
          <div class="col-xs-6">
            <h3 class="main_titl text-left">{{ ('Sản phẩm mới') }}</h3>
          </div>
          <div class="col-xs-6">
            <h3 class="link_titl text-right"><a href="{{route('san-pham.index')}}">{{ ('Xem tất cả') }} </a></h3>
          </div>
          <div class="clearfix"></div>
        </div>
        @foreach($products as $product)
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-image">
              @if(isset($product->images[0]))
                <img class="img-responsive cls-img" src="{{asset($product->images[0]->path)}}">
              @else
                 <img class="img-responsive cls-img" src="{{asset(config('constant.default_image' )) }}">
              @endif
             
              <div class="img_hov_eff">
                <a class="btn btn-default btn_trans" href="{{route('san-pham.show', $product->slug)}}">{{ ('Chi tiết') }}</a>
              </div>
            </div>
            <div class="panel-body">
              <h3 class="sec_titl"><a href="{{route('san-pham.show', $newsproduct->slug)}}">{{ $product->name }}</a></h3>
              <p class="sec_desc">
                {!! contentLimit($product->description, 70) !!}
              </p>
              <div class="panel_bottom">
                <div class="col-md-6">
                  <p class="price text-left">{{ ('Liên hệ') }}</p>
                </div>
                <div class="col-md-6">
                  <p class="readmore text-right"> <a href="{{route('san-pham.show', $product->slug)}}">{{ ('Chi tiết') }}</a> </p>
                </div>
              </div>
            </div>
          </div>
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
        @endforeach
      </div>
    </div>
  </section>
  <div class="spacer-60"></div>
  <section id="talen_agent">
    <div class="container">
      <div class="row">
        <div class="titl_sec">
          <div class="col-xs-6">
            <h3 class="main_titl text-left">{{  ('Dự án') }}</h3>
          </div>
          <div class="col-xs-6">
            <h3 class="link_titl text-right"><a href="{{route('du-an.index')}}"> {{ ('Xem tất cả') }}</a></h3>
          </div>
          <div class="clearfix"></div>
        </div>
        @foreach($projects as $project)
        <!-- Agent 1 -->
        <div class="col-md-3">
          <div class="panel panel-default">
            <div class="panel-image">
              <img class="img-responsive cls-img-project" src="{{$project->image}}" alt="">
            </div>
            <div class="panel-body cls-height">
              <h3 class="sec_titl text-center">
                <a href="{{route('du-an.show', $project->slug)}}">{{ $project->title }}</a>
              </h3>  
              <p class="sec_desc text-center">{{ contentLimit($project->description, 50) }}</p>
              <div class="panel_hidd">
                <hr>
                <small class="phon text-center"> <a href="">{{ ('Số điện thoại: 253-891-8159') }}</a></small>
                <div class="soc_icon">
                  <a href=""> <i class="fa fa-facebook"></i> </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach()
      </div>
    </div> 
  </section>
  <div class="spacer-60"></div>
  <section id="testim">
    <div class="container">
      <div class="row testim_sec m0">
         <div class="testim_box">
          <blockquote>
            Sứ mệnh của House Door chính là đem lại một công trình hoàn hảo,khiến cho quý khách hài lòng là phương châm làm việc của chúng tôi,bạn đang thắc mắc,hãy gọi chúng tôi ngay nhé. House Door điểm nhấn của ngôi nhà Việt.
          </blockquote>
          <div class="auth_sec">
            <img src="{{ asset('frontend/images/icon-customer.png') }}" alt="">
            <h6 class="auth_nam">
              Phạm Văn Hậu
              <span class="auth_pos">
              Ceo Marketing
            </span>
            </h6>
          </div>
        </div>
        <div class="testim_box">
          <blockquote>          
            House Door làm việc rất chuyên nghiệp,chất liệu Nhôm của họ rất tốt,trông rất chắn chắn,tôi nghiệm thu Vách kính thì chịu lực rât tốt,giá cả lại phải chăng,anh em thợ làm việc rất nhiệt tình,xong việc mới chịu nghỉ,thật sự chúng tôi rất hài lòng.                 
          </blockquote>
          <div class="auth_sec">
            <img src="{{ asset('frontend/images/icon-customer.png') }}" alt="">
            <h6 class="auth_nam">
              Nguyễn Thanh Tuấn
              <span class="auth_pos">
              Khách Hàng
            </span>
            </h6>
          </div>
        </div>
        <div class="testim_box">
          <blockquote>          
            Nhà tôi thực sự sang trong hơn hẳn khi House Door thi công xong,tôi ngắm cả đêm mà vẫn không chán,vách kính cầu thang rất chắc chắn,có lúc bê đồ động phải nhưng không hề hấn gì,cảm ơn các bạn đã giúp tôi có được căn nhà như ý.                 
          </blockquote>
          <div class="auth_sec">
            <img src="{{ asset('frontend/images/icon-customer.png') }}" alt="">
            <h6 class="auth_nam">
              Trần Văn Thái
              <span class="auth_pos">
              Khách Hàng
            </span>
            </h6>
          </div>
        </div>
      </div>
    </div>    
  </section>
  <div class="spacer-60"></div>
  <section id="lates_news">
    <div class="container">
      <div class="row">
        <div class="titl_sec">
          <div class="col-xs-6">
            <h3 class="main_titl text-left">{{ ('Tin tức mới') }}
            </h3>
          </div>
          <div class="col-xs-6">
            <h3 class="link_titl text-right">
              <a href="{{ route('tin-tuc.index') }}">{{ ('Xem tất cả') }}</a>
            </h3>
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- News 1 -->
        @foreach($news as $value)
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-image">
              <a href="{{ route('tin-tuc.show', $value->slug) }}">
                <img class="img-responsive cls-img" src="{{ (isset($value->image)) ? $value->image : asset(config('constant.default_thumbnail')) }}" alt="{{ $value->title }}">
              </a>
            </div>
            <div class="panel-body">
              <div class="news_dtd">
                <p>{{$value->created_at }} <a href="#"> Admin </a> </p>
              </div>
              <h3 class="sec_titl">
                <a href="{{ route('tin-tuc.show', $value->slug) }}">
                  {{$value->title}}
                </a>
              </h3>
              <p class="sec_desc">
                {{ contentLimit($value->description, 70)}}
              </p>
              <p class="readmore text-left"> <a href="{{ route('tin-tuc.show', $value->slug) }}">{{ ('Chi tiết ') }}</a> </p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <div class="spacer-60"></div>
  <section id="clients">
    <div class="container">
      <div id="owl-carousel" class="row">
        <h2 class="hide"> Our Clients </h2>
        <div class="owl_col">
          <div class="mid_img"> <img class="img-responsive customer-img" src="http://placehold.it/160x27" alt="">
          </div>
        </div>
        <div class="owl_col">
          <div class="mid_img"> <img class="img-responsive customer-img" src="http://placehold.it/160x38" alt="">
          </div>
        </div>
        <div class="owl_col">
          <div class="mid_img"> <img class="img-responsive customer-img" src="http://placehold.it/160x36" alt="">
          </div>
        </div>
        <div class="owl_col">
          <div class="mid_img"> <img class="img-responsive customer-img" src="http://placehold.it/160x30" alt="">
          </div>
        </div>
        <div class="owl_col">
          <div class="mid_img"> <img class="img-responsive customer-img" src="http://placehold.it/160x33" alt="">
          </div>
        </div>
        <div class="owl_col">
          <div class="mid_img"> <img class="img-responsive customer-img" src="http://placehold.it/160x27" alt="">
          </div>
        </div>
        <div class="owl_col">
          <div class="mid_img"> <img class="img-responsive customer-img" src="http://placehold.it/160x36" alt="">
          </div>
        </div>
        <div class="owl_col">
          <div class="mid_img"> <img class="img-responsive customer-img" src="http://placehold.it/160x31" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="spacer-60"></div>
@endsection