@extends('frontend.layouts.master')
@section('title', __('Lien he'))
@section('content')
<div class="container">
    <div class="row">
        <!-- Contact Section -->
        <section id="contact_sec" class="col-md-8">
            <!-- Contact form -->
            <div class="row">
                <div class="titl_sec">
                    <div class="col-lg-12">
                        <h3 class="main_titl text-left">{{(' Liên Hệ Với Chúng Tôi')}}</h3>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-12">
                    @include('flash::message')
                    <div class="cont_frm">
                        <form name="sentMessage" id="contactForm" method="POST" action="{{route('lien-he.store')}}">
                            {{csrf_field()}}
                            <div class="control-group form-group col-md-6 first">
                                <div class="controls {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Tên bạn" value="{{old('name')}}">
                                    <div class="in_ico">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                </div>
                                <div class="controls {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email của bạn">
                                    <div class="in_ico">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                </div>

                                <div class="controls {{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại của bạn">
                                    <div class="in_ico">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <small class="text-danger">{{ $errors->first('phone') }}</small>
                                </div>

                                <div class="controls last {{ $errors->has('subject') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Chủ đề">
                                    <div class="in_ico">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                    <small class="text-danger">{{ $errors->first('subject') }}</small>
                                </div>

                                <div class="clearfix"></div>
                            </div>

                            <div class="control-group form-group col-md-6">
                                <div class="controls {{ $errors->has('content') ? ' has-error' : '' }}">
                                    <textarea rows="10" cols="100" class="form-control" id="content"  maxlength="999" style="resize:none" placeholder="Nội dung" name="content"></textarea>
                                    <div class="in_ico">
                                        <i class="fa fa-paper-plane-o"></i>
                                    </div>
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                </div>
                                <button type="submit" class="btn btn-primary">Gửi Liên Hệ</button>
                            </div>
                            <div class="clearfix"></div>
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="spacer-30"></div>
            <!-- Location Map -->
            <div class="row">
                <div class="titl_sec">
                    <div class="col-lg-12">

                        <h3 class="main_titl text-left">
                {{('Vị trí của chúng tôi')}}
            </h3>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-12">
                    <div class="map_ara">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2642281208146!2d106.69153914958942!3d10.791063492273844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528cc9ee44733%3A0x863342a33fd220e!2zMzMgTMO9IFbEg24gUGjhu6ljLCBUw6JuIMSQ4buLbmgsIFF14bqtbiAxLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1509590011038" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- Sidebar Section -->
        <section id="sidebar" class="col-md-4">
            <!-- Contact Information -->
            <div class="row">
                <div class="titl_sec">
                    <div class="col-lg-12">
                        <h3 class="main_titl text-left">
                            House Door
                        </h3>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="cont_info">
                    <div class="info_sec first">
                        <div class="icon_box">
                            <i class="fa fa-map-marker "><span>Văn Phòng Đại Diện</span></i>
                        </div>
                        <p class="infos pull-right">33/6 Lý Văn Phức phường Tân Định Quận 1 TP.HCM </p>
                    </div>
                    <div class="info_sec">
                        <div class="icon_box">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <p class="infos"><a href="mailto:housedoor@gmail.com?Subject=template%20enquiry"> housedoor@gmail.com </a>
                        </p>
                    </div>
                    <div class="info_sec">
                        <div class="icon_box">
                            <i class="fa fa-phone"></i>
                        </div>
                        <p class="infos"> <a href="tel:0906202195"> 0906202195</a> </p>
                    </div>
                    <div class="info_sec">
                        <div class="icon_box">
                            <i class="fa fa-facebook"></i>
                        </div>
                        <p class="infos">facebook.com/housedoor</p>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </section>
        <div class="spacer-60"></div>
    </div>
</div>
@endsection