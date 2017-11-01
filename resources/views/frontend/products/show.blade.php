@extends('frontend.layouts.master')
@section('title', __('Chi tiet san pham'))
@section('content')
    <div class="spacer-60"></div>
    <div class="container">
        <div class="row">
            <!-- Proerty Details Section -->
            <section id="prop_detal" class="col-md-8">
                <div class="row">
                    <div class="panel panel-default">
                       <!-- Proerty Slider Images -->
                        <div class="panel-image">
                            <ul id="prop_slid">
                                @if ($product->images->count() == 0)

                                <li><img class="img-responsive" src="{{ asset(config('constant.default_image')) }}" alt="{{ $product->name }}">
                                </li>
                                @else
                                    @foreach ($product->images as $productImage)
                                    <li><img class="img-responsive" src="{{ asset($productImage->path) }}" alt="{{ $product->name }}">
                                    </li>
                                    @endforeach
                                @endif
                            </ul>
                        <!-- Proerty Slider Thumbnails -->    
                            <div class="col-md-12 rel_img">
                                <ul id="slid_nav">
                                    @php
                                        $i = -1;
                                    @endphp
                                    @foreach ($product->images as $productImage)
                                    @php
                                        $i++;
                                    @endphp
                                        <li>
                                            <a data-slide-index="{{ $i }}" href=""><img class="img-responsive img-hover" src="{{ asset($productImage->path) }}" alt="">
                                            </a>
                                        </li>
                                        
                                    @endforeach
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="panel-body">
                            <div class="prop_feat">
                                <p class="area"><i class="fa fa-phone"></i> Liên Hệ: 0905123456</p>
                                <div class="share_btn">
                                    <a href="#"> <i class="fa fa-share-alt"></i>
                                    </a>
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
                            <h3 class="sec_titl">
                                {{ $product->name }}
                            </h3>

                            <div class="col_labls larg_labl">
                                <p class="or_labl">{{ $product->category->name }}</p>
                                <p class="blu_labl"> 0905123456</p>
                            </div>
                            <p class="sec_desc">
                                {!! $product->description !!}
                            </p>                                                       
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="spacer-30"></div>                
                <!-- Agent Info -->
                <div class="row">
                    <div class="agen_info">
                        <div class="col-md-4 ">
                            <a href="{{ route('san-pham.show', $productDiff->slug) }}">
                            @if (isset($productDiff->images[0]))
                                <img class="img-responsive cls-img-product" src="{{ asset($productDiff->images[0]->path) }}" alt="{{ $productDiff->name }}">
                            @else  
                                <img class="img-responsive cls-img-product" src="{{ asset(config('constant.default_image')) }}" alt="{{ $productDiff->name }}"> 
                            @endif
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="panel panel-default">

                                <div class="panel-body cls-img-product">
                                    <div class="row agen_desc">
                                        <div class="col-sm-8">
                                            <h3 class="sec_titl">
                                                <a href="{{ route('san-pham.show', $productDiff->slug) }}"> 
                                                    {{ $productDiff->name }}
                                                </a>                                   
                                            </h3>
                                            <p class="sec_desc">
                                                {{ $productDiff->category->name }}
                                            </p>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="soc_icon">                                          
                                                <a href="#"> <i class="fa fa-facebook"></i> </a>
                                            </div>

                                        </div>
                                    </div>
                                    <p class="sec_desc">
                                        {{ contentLimit($productDiff->description) }}
                                    </p>
                                    <div class="panel_bottom">
                                        <div class="agen_feat">
                                            <p class="area">
                                                <a href="tel:910-213-7890"> <i class="fa fa-phone"></i> 0905123456 </a>
                                            </p>
                                            <p class="bedrom">
                                                <a href="#"> <i class="fa fa-envelope"></i> huuhieucntt@gmail.com </a>
                                            </p>
                                            <p class="bedrom"><a href="#"><i class="fa fa-skype"></i> scottberends1 </a> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="spacer-30"></div>
                
                <!-- Proerty Map -->

                <div class="row">
                    <div class="titl_sec">
                        <div class="col-lg-12">
                            <h3 class="main_titl text-left">
                                Bản Đồ
                            </h3>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-12">
                        <div class="prop_map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3023.0855969237605!2d-73.99038!3d40.738141999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a238556ce7%3A0x3445b7afb4f445e3!2sTaz+Studios!5e0!3m2!1sen!2sin!4v1432831471606" width="600" height="350"></iframe>
                        </div>

                    </div>
                </div>
                <!-- /.row -->


            </section>

            <!-- Sidebar Section -->                     
            @include('frontend.layouts.partials.aside')

            <div class="spacer-60"></div>

        </div>
    </div>

@endsection
