<section id="sidebar" class="col-md-4">
                <!-- Search Form -->               
                <div class="row">
                    <div class="col-md-12">
                        <div class="srch_frm">
                            <div class="fb-page" data-href="https://www.facebook.com/nhomkinhgovap" data-width="350" data-hide-cover="false" data-show-facepile="true"></div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="spacer-30"></div>
                <!-- Categories -->
                <div class="row">
                    <div class="titl_sec">
                        <div class="col-lg-12">

                            <h3 class="main_titl text-left">
                    {{('Danh mục sản phẩm')}}
                </h3>

                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="categ_info">
                        @php
                            $categories = getCategories();
                        @endphp
                        <div class="info_sec first">
                            @foreach($categories as $category)
                            <div class="col-md-6">
                                <a href="{{route('danh-muc.san-pham.index', $category->slug)}}">
                                    <i class="fa fa-long-arrow-right"></i>
                                    <p class="infos">{{$category->name}} ({{$category->products->count()}}) </p>
                                </a>
                            </div>
                            @endforeach
                    </div>
                </div>
                <!-- /.row -->


                <div class="spacer-30"></div>
                <!-- Featured Properties -->
                <div class="row">
                    <div class="titl_sec">
                        <div class="col-lg-12">

                            <h3 class="main_titl text-left">
                                {{('Sản phẩm mới')}}
                            </h3>

                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="side_feat">
                        @php
                            $products = getNewsProduct();
                        @endphp
{{--                         {{dd($products[0]->images)}} --}}
                        @foreach($products as $product)
                        <div class="panel panel-default">
                            <div class="panel-image col-md-3">
                                @if(isset($product->images[0]))
                                    <a href="{{route('san-pham.show', $product->slug)}}"> <img class="img-responsive cls-small-img" src="{{asset($product->images[0]->path)}}"></a>
                                @else
                                    <a href="{{route('san-pham.show', $product->slug)}}"> <img class="img-responsive cls-small-img" src="{{asset(config('constant.default_image')) }}"></a>
                                @endif
                            </div>

                            <div class="panel-body col-md-9">
                                <h3 class="sec_titl">
                                    <a href="{{route('san-pham.show', $product->slug)}}">{{$product->name}} </a>                         
                                </h3>

                                <div class="prop_feat">
                                    <div>
                                        <p class="area"><i class="fa fa-home"></i>{{$product->category->name}}</p>
                                    </div>
                                    <div>
                                        <p class="bedrom">
                                            {!! contentLimit($product->description,50) !!}
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- /.row -->

                <div class="spacer-30"></div>
                <!-- Tags -->
                <div class="row">
                    <div class="titl_sec">
                        <div class="col-lg-12">
                            <h3 class="main_titl text-left">
                                {{('Tin tức')}}
                            </h3>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="side_feat">
                    @php
                        $news = getNews();
                    @endphp
                    @foreach($news as $value)
                        <div class="panel panel-default">
                            <div class="panel-image col-md-3">
                                @if(isset($value->image))
                                    <a href="{{route('tin-tuc.show', $value->slug)}}"> <img class="img-responsive cls-small-img" src="{{asset($value->image)}}"></a>
                                @else
                                    <a href="{{route('tin-tuc.show', $value->slug)}}"> <img class="img-responsive cls-small-img" src="{{asset(config('constant.default_image')) }}"></a>
                                @endif
                            </div>

                            <div class="panel-body col-md-9">
                                <h3 class="sec_titl">
                                    <a href="{{route('tin-tuc.show', $value->slug)}}">{{$value->title}} </a>                         
                                </h3>

                                <div class="prop_feat">
                                     <div>
                                        <p class="area"><i class="fa fa-home"></i>{{contentLimit($value->content,30)}}</p>
                                    </div>
                                    <div>
                                        <p class="bedrom">
                                            {!! contentLimit($value->description,50) !!}
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach


                </div>
                </div>
                <!-- /.row -->

                <div class="spacer-30"></div>

            </section>