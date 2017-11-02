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
                <!-- Logo -->
                <a class="navbar-brand" href="index.html"><img src="frontend/images/logo.png" alt="logo">
                </a>
            </div>
            <!-- Navigation -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{route('home')}}">Trang chủ</a>
                    </li>
                    <li>
                        <a href="{{ route('san-pham.index') }}"> Sản phẩm</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="property_listing.html">Property Listings </a>
                            </li>
                            <li>
                                <a href="property_details.html"> Property Single </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('du-an.index')}}">Dự án</a>
                    </li>
                    <li>
                        <a href="{{ route('tin-tuc.index') }}">Tin Tức</a>
                    </li>
                    <li>
                        <a href="/gioi-thieu">Giới thiệu</a>
                    </li>
                    <li>
                        <a class="" href="/lien-he">Liên hệ</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Stat Banner -->
    <header id="banner" class="stat_bann">
        <div class="bannr_sec">
            <img src="{{ asset('frontend/images/slide-img.jpg') }}" alt="Banner">
            <h1 class="main_titl">
                House Door - Cửa kính cao cấp
            </h1>
            <h4 class="sub_titl">
                Đẳng cấp cho ngôi nhà của bạn
            </h4>

        </div>
        <div class="pg_links">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="lnk_pag"><a href="{{route('home')}}">{{('Trang chủ')}}</a> </p>
                        <p class="lnk_pag"> / </p>
                        <p class="lnk_pag"> Sản Phẩm </p>
                    </div>
                    <div class="col-md-6 text-right">
                        <p class="lnk_pag"><a href="{{route('home')}}">{{('Trang chủ')}} </a> </p>
                    </div>
                </div>
            </div>
        </div>
    </header>