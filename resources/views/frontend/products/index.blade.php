@extends('frontend.layouts.master')
@section('title', __('Sản phẩm'))
@section('content')
<div class="container">
        <div class="row">
            <!-- Properties Section -->
            <section id="feat_propty">
                <div class="container">
                    <div class="row">
                        <!-- Property listing 1 -->
                        @foreach($products as $product)
                        <div class="col-md-4 item">
                            <div class="panel panel-default">
                                <div class="panel-image cls-img">
                                    @if (isset($product->images[0]))
                                    <img class="img-responsive img-hover" src="{{ asset($product->images[0]->path) }}" alt="{{ $product->name }}">
                                    @else 
                                    <img class="img-responsive img-hover" src="{{ asset(config('constant.default_image')) }}" alt="{{ $product->name }}">
                                    @endif

                                    <div class="img_hov_eff">
                                        <a class="btn btn-default btn_trans" href="{{ route('san-pham.show', $product->slug) }}" title="{{$product->name}}"> Chi tiết </a>
                                    </div>

                                </div> 
                                <div class="panel-body">
                                    <h3 class="sec_titl">
                                        <a href="{{ route('san-pham.show', $product->slug) }}" title="{{$product->name}}">
                                            {{ $product->name }} 
                                        </a>               
                                    </h3>
                                    <p class="sec_desc">
                                        {{ contentLimit($product->description), 70 }}
                                    </p>
                                    <div class="panel_bottom">
                                        <div class="col-md-6">
                                            <p class="price text-left">Giá Liên Hệ</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="readmore text-right"> <a href="{{ route('san-pham.show', $product->slug) }}" title="{{$product->name}}"> Chi Tiết </a>
                                            </p>

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
                    <!-- /.row -->
                    <div class="spacer-40"></div>
                    <!-- Pagination -->
                    <div class="pagin">
                        {{ $products->render() }}
                    </div>
                </div>
                <!-- /.container -->
            </section>
            <div class="spacer-60"></div>
        </div>
    </div>
@endsection