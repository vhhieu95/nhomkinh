@extends('frontend.layouts.master')
@section('title', __('Trang chủ'))
@section('content')
  <section id="srch_slide">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="srch_frm">
            <h3>Real Estate Search</h3>
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group form-group">
                <div class="controls">
                  <label>Keyword </label>
                  <input type="text" class="form-control" id="keyword" required data-validation-required-message="Please enter a keyword." placeholder="Any keyword">
                  <p class="help-block"></p>
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <label>Location </label>
                  <select name="State" class="form-control" required data-validation-required-message="Please select a state.">
                    <option value="" selected="selected">Any Location</option>
                    <option value="AL">Alabama</option>
                  </select>
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls col-md-6 first">
                  <label>Type </label>
                  <select name="Type" class="form-control" required data-validation-required-message="Please select a type.">
                    <option value="" selected="selected">Industrial</option>
                    <option value="2">Commercial</option>
                    <option value="3">Household</option>
                  </select>
                </div>
                <div class="controls col-md-6">
                  <label>Actions </label>
                  <select name="Actions" class="form-control" required data-validation-required-message="Please select a Actions.">
                    <option value="" selected="selected">For Rent</option>
                    <option value="2">For Sale</option>
                  </select>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="control-group form-group">
                <div class="controls col-md-6 first">
                  <label>Min. Price </label>
                  <select name="min-price" class="form-control" required data-validation-required-message="Please select a Min. Price.">
                    <option value="" selected="selected">$50</option>
                    <option value="2">$00</option>
                    <option value="3">$200</option>
                    <option value="3">$300</option>
                    <option value="3">$400</option>
                    <option value="3">$500</option>
                    <option value="3">$700</option>
                    <option value="3">$800</option>
                    <option value="3">$900</option>
                    <option value="3">$000</option>
                    <option value="3">$500</option>
                    <option value="3">$2000</option>
                    <option value="3">$2500</option>
                  </select>
                </div>
                <div class="controls col-md-6">
                  <label>Max. Price </label>
                  <select name="max-price" class="form-control" required data-validation-required-message="Please select a Max. Price.">
                    <option value="" selected="selected">$200</option>
                    <option value="2">$300</option>
                    <option value="3">$400</option>
                    <option value="3">$500</option>
                    <option value="3">$600</option>
                    <option value="3">$700</option>
                    <option value="3">$800</option>
                    <option value="3">$900</option>
                    <option value="3">$1000</option>
                    <option value="3">$1500</option>
                    <option value="3">$2000</option>
                    <option value="3">$2500</option>
                    <option value="3">$3000</option>
                  </select>
                </div>
                <div class="clearfix"></div>
              </div>
              <div id="success"></div>
              <button type="submit" class="btn btn-primary">Search</button>
            </form>
          </div>
        </div>
        <div class="col-md-8 slide_sec">
          <div id="slider" class="silde_img flexslider">
            <ul class="slides">
              @foreach($newsproduct->images as $key)
              <li>
                <img src="{{asset($key->path)}}" alt="Slider image" />
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
              <h3 class="sec_titl">{{ $product->name }}</h3>
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
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel nibh vitae sapien lacinia finibus. Etia faucibus lorem in dui laoreet, eget euismod tellus lacinia.
          </blockquote>
          <div class="auth_sec">
            <img src="http://placehold.it/100x100" alt="">
            <h6 class="auth_nam">
              David Greer
              <span class="auth_pos">
              Ceo Marketing
            </span>
            </h6>
          </div>
        </div>
        <div class="testim_box">
          <blockquote>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel nibh vitae sapien lacinia finibus. Etia faucibus lorem in dui laoreet, eget euismod tellus lacinia.
          </blockquote>
          <div class="auth_sec">
            <img src="http://placehold.it/100x100" alt="">
            <h6 class="auth_nam">
              David Greer
              <span class="auth_pos">
              Ceo Marketing
            </span>
            </h6>
          </div>
        </div>
        <div class="testim_box">
          <blockquote>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel nibh vitae sapien lacinia finibus. Etia faucibus lorem in dui laoreet, eget euismod tellus lacinia.
          </blockquote>
          <div class="auth_sec">
            <img src="http://placehold.it/100x100" alt="">
            <h6 class="auth_nam">
              David Greer
              <span class="auth_pos">
              Ceo Marketing
            </span>
            </h6>
          </div>
        </div>
        <div class="testim_box">
          <blockquote>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel nibh vitae sapien lacinia finibus. Etia faucibus lorem in dui laoreet, eget euismod tellus lacinia.
          </blockquote>
          <div class="auth_sec">
            <img src="http://placehold.it/100x100" alt="">
            <h6 class="auth_nam">
              David Greer
              <span class="auth_pos">
              Ceo Marketing
            </span>
            </h6>
          </div>
        </div>
        <div class="testim_box">
          <blockquote>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel nibh vitae sapien lacinia finibus. Etia faucibus lorem in dui laoreet, eget euismod tellus lacinia.
          </blockquote>
          <div class="auth_sec">
            <img src="http://placehold.it/100x100" alt="">
            <h6 class="auth_nam">
              David Greer
              <span class="auth_pos">
              Ceo Marketing
            </span>
            </h6>
          </div>
        </div>
        <div class="testim_box">
          <blockquote>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel nibh vitae sapien lacinia finibus. Etia faucibus lorem in dui laoreet, eget euismod tellus lacinia.
          </blockquote>
          <div class="auth_sec">
            <img src="http://placehold.it/100x100" alt="">
            <h6 class="auth_nam">
              David Greer
              <span class="auth_pos">
              Ceo Marketing
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
              <a href="blog.html">{{ ('Xem tất cả') }}</a>
            </h3>
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- News 1 -->
        @foreach($news as $value)
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-image">
              <img class="img-responsive cls-img" src="{{ (isset($value->image)) ? $value->image : asset(config('constant.default_thumbnail')) }}" alt="">
            </div>
            <div class="panel-body">
              <div class="news_dtd">
                <p>{{$value->created_at }} <a href="#"> John Doe </a> </p>
              </div>
              <h3 class="sec_titl">{{$value->title}}</h3>
              <p class="sec_desc">
                {{ contentLimit($value->description, 70)}}
              </p>
              <p class="readmore text-left"> <a href="blog-single.html">{{ ('Chi tiết ') }}</a> </p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <div class="spacer-60"></div>
  <section id="subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-right subs_info">
          <h5>For Subscribers Only</h5>
          <h2>Save up to 50% off your next trip</h2>
        </div>
        <!-- Subscribe Form -->
        <div class="col-md-6 text-left subs_form">
          <form name="sentMessage" id="contactForm2" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." placeholder="Put your email address">
                <button type="submit" class="btn btn-primary">Subscribe</button>
              </div>
            </div>
          </form>
        </div>
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