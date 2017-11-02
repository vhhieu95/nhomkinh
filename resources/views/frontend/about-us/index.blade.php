@extends('frontend.layouts.master')
@section('title', __('Giới Thiệu'))
@section('content')
<div class="container">
    <div class="row">
        <!-- About Section -->
        <section id="abt_sec" class="col-md-8">
            <!-- Progressbars -->
            <div class="row skill_sec">
                <div class="titl_sec">
                    <div class="col-lg-12">
                        <h3 class="main_titl text-left">
                            Tại sao chọn House Door?
                        </h3>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-xs-12 skill_ara">
                    <div class="col-sm-5 p0">
                        <p class="m0" style="font-size: 15px; color: black;">Công ty CP House Door Việt Nam là đơn vị hàng đầu trong lĩnh vực tư vấn thiết kế, thi công các dòng sản phẩm về cửa và vách nhôm kính cao cấp.
                        Với đội ngũ kỹ sư có nhiều kinh nghiệm trong lĩnh vực nhôm kính, cùng đội ngũ thợ trẻ, năng động, sáng tạo nhiệt tình trong công việc.
                        Chúng tôi được khách hàng nhiều nơi tín nhiệm, được tham gia hoàn thiện nhiều công trình lớn và trọng điểm. </p>
                        <div class="spacer-30"></div>
                        {{-- <p class="m0"> Kale chips scenester ethical, squid keffiyeh craft beer post-ironic four dollar toast banjo messenger bag typewriter. Trust fund squid Wes Anderson fingerstache. </p> --}}
                    </div>
                    <div class="col-sm-7 p0">
                        <div class="prog_sec">
                            <p class=labl> WordPress </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" style="width: 80%;">
                                    <span> 80 </span> <i class="per_cent"> % </i>
                                </div>
                            </div>
                        </div>
                        <div class="prog_sec">
                            <p class=labl> Photoshop </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="92" style="width: 92%;">
                                    <span> 92 </span> <i class="per_cent"> % </i>
                                </div>
                            </div>
                        </div>
                        <div class="prog_sec">
                            <p class=labl> Javascript </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="44" style="width: 44%;">
                                    <span> 44 </span> <i class="per_cent"> % </i>
                                </div>
                            </div>
                        </div>
                        <div class="prog_sec">
                            <p class=labl> HTML / CSS </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" style="width: 60%;">
                                    <span> 60 </span> <i class="per_cent"> % </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="spacer-30"></div>
            <!-- Fun Facts -->
            <div class="row skill_sec">
                <div class="titl_sec">
                    <div class="col-lg-12">

                        <h3 class="main_titl text-left">
                fun facts
            </h3>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-xs-12 fun_fac">
                    <div class="col-xs-3 text-center">
                        <div class="circ_ico">
                            <i class="fa fa-heart-o"></i>
                        </div>
                        <h3 class="fun_num counter">18,450</h3>
                        <p class="desc">Satisfied Customers</p>
                    </div>

                    <div class="col-xs-3 text-center">
                        <div class="circ_ico">
                            <i class="fa fa-user"></i>
                        </div>
                        <h3 class="fun_num counter">9,100</h3>
                        <p class="desc"> team members </p>
                    </div>

                    <div class="col-xs-3 text-center">
                        <div class="circ_ico">
                            <i class="fa fa-thumbs-o-up"></i>
                        </div>
                        <h3 class="fun_num counter">24,500</h3>
                        <p class="desc">likes on facebook</p>
                    </div>

                    <div class="col-xs-3 text-center">
                        <div class="circ_ico">
                            <i class="fa fa-coffee"></i>
                        </div>
                        <h3 class="fun_num counter">10,000</h3>
                        <p class="desc">cups of coffee</p>
                    </div>

                </div>
            </div>
            <!-- /.row -->

            <div class="spacer-30"></div>
            <!-- What we do  -->
            <div class="row skill_sec">
                <div class="titl_sec">
                    <div class="col-lg-12">

                        <h3 class="main_titl text-left">
                what we do
            </h3>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-xs-12 serv_col">
                    <div class="col-xs-4 text-center">
                        <div class="nor_ico">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <h3 class="fun_num">support</h3>
                        <p class="desc"> Heirloom art party iPhone kogi American Apparel </p>
                    </div>

                    <div class="col-xs-4 text-center">
                        <div class="nor_ico">
                            <i class="fa fa-eye"></i>
                        </div>
                        <h3 class="fun_num">idea</h3>
                        <p class="desc"> Heirloom art party iPhone kogi American Apparel </p>
                    </div>

                    <div class="col-xs-4 text-center">
                        <div class="nor_ico">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <h3 class="fun_num">responsive</h3>
                        <p class="desc">Heirloom art party iPhone kogi American Apparel</p>
                    </div>

                </div>
            </div>
            <!-- /.row -->

            <div class="spacer-30"></div>

            <!-- Our clients -->
            <div id="clients" class="row skill_sec">
                <div class="titl_sec">
                    <div class="col-lg-12">

                        <h3 class="main_titl text-left">
                our sponsors
            </h3>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="pag-carousel" class="row">
                    <div class="owl_col">
                        <div class="mid_img"> <img class="img-responsive customer-img" src="images/clients/cl_logo_1.png" alt="">
                        </div>
                    </div>
                    <div class="owl_col">
                        <div class="mid_img"> <img class="img-responsive customer-img" src="images/clients/cl_logo_2.png" alt="">
                        </div>
                    </div>
                    <div class="owl_col">
                        <div class="mid_img"> <img class="img-responsive customer-img" src="images/clients/cl_logo_3.png" alt="">
                        </div>
                    </div>
                    <div class="owl_col">
                        <div class="mid_img"> <img class="img-responsive customer-img" src="images/clients/cl_logo_4.png" alt="">
                        </div>
                    </div>
                    <div class="owl_col">
                        <div class="mid_img"> <img class="img-responsive customer-img" src="images/clients/cl_logo_5.png" alt="">
                        </div>
                    </div>
                    <div class="owl_col">
                        <div class="mid_img"> <img class="img-responsive customer-img" src="images/clients/cl_logo_6.png" alt="">
                        </div>
                    </div>
                    <div class="owl_col">
                        <div class="mid_img"> <img class="img-responsive customer-img" src="images/clients/cl_logo_7.png" alt="">
                        </div>
                    </div>
                    <div class="owl_col">
                        <div class="mid_img"> <img class="img-responsive customer-img" src="images/clients/cl_logo_8.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>

        </section>

        <!-- Sidebar Section -->
        @include('frontend.layouts.partials.aside')

        <div class="spacer-60"></div>

    </div>
</div>
@endsection
