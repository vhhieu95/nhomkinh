<a href="tel:0906202195" class="fancybox">
   <div class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show" id="coccoc-alo-phoneIcon" style="left:0%; top:67%">
    <h4 style="margin: 25px 35px 0px 54px; color:white; background:red; ">0906.202.195</h4>
      <div class="coccoc-alo-ph-circle">
      </div>
      <div class="coccoc-alo-ph-circle-fill">
      </div>
      <div class="coccoc-alo-ph-img-circle">
      </div>
      <div>
        
     </div>
   </div>

</a>
<nav class="navbar" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('frontend/images/logoheader.png')}}" alt="logo">
                </a>
            </div>
            <!-- Navigation -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{route('home')}}">Trang chủ</a>
                    </li>
                    <li>
                        <a href="{{route('san-pham.index')}}"> Sản phẩm</a>
                        @php
                            $categories = getCategories();
                        @endphp
                        <ul class="dropdown-menu">
                            @foreach($categories as $category)
                            <li>
                                <a href="{{route('danh-muc.san-pham.index', $category->slug)}}">{{$category->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('du-an.index')}}">Dự án</a>
                    </li>
                    <li>
                        <a href="/bao-gia">Báo Giá</a>
                    </li>
                    <li>
                        <a href="/tuyen-dung">Tuyển Dụng</a>
                    </li>
                    <li>
                        <a href="{{route('tin-tuc.index')}}">Tin Tức</a>
                    <li>
                        <a href="/gioi-thieu">Giới thiệu</a>
                    </li>
                    <li>
                        <a class="" href="{{route('lien-he.create')}}">Liên hệ</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Stat Banner -->
    <header id="banner" class="stat_bann">
        {{-- <div class="bannr_sec">
            <img src="{{ asset('frontend/images/slide-img.jpg') }}" alt="Banner">
            <h1 class="main_titl">
                House Door - Cửa kính cao cấp
            </h1>
            <h4 class="sub_titl">
                Đẳng cấp cho ngôi nhà của bạn
            </h4>

        </div> --}}
        <div class="container-fluid ">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="{{ asset('frontend/images/slide-img.jpg') }}" alt="Banner">
                <div class="carousel-caption">
                    <h1>
                        House Door - Cửa Kính Cao Cấp
                    </h1>
                    <h4>
                        Đẳng Cấp Cho Ngôi Nhà Của Bạn
                    </h4>
                </div>

              </div>
              <div class="item">
                <img src="{{ asset('frontend/images/slide-2.jpg') }}" alt="Banner">
                <div class="carousel-caption">
                    <h1>
                        Dịch Vụ Thi Công Khung Nhôm Cửa Kính
                    </h1>
                    <h4>
                        An toàn Chất Lượng
                    </h4>
                </div>

              </div>
              <div class="item">
                <img src="{{ asset('frontend/images/slide-3.jpg') }}" alt="Banner">
                <div class="carousel-caption">
                    <h1>
                        Hãy Đến Với House Door
                    </h1>
                    <h4>
                        Điểm Nhấn Cho Ngôi Nhà Việt
                    </h4>
                </div>

              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <div class="pg_links">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="lnk_pag"><a href="{{route('home')}}">{{('Trang chủ')}}</a> </p>
                        <p class="lnk_pag"> / </p>
                        <p class="lnk_pag">
                            @php
                                $str = explode('/', request()->url());
                            @endphp
                            @if(isset($str[3]))
                            {{$str[3]}}
                            @endif
                        </p>
                    </div>
                    <div class="col-md-6 text-right">
                        <p class="lnk_pag"><a href="{{route('home')}}">{{('Trang chủ')}} </a> </p>
                    </div>
                </div>
            </div>
        </div>
    </header>