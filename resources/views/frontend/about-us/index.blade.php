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
                            <p class=labl> Chất Lượng </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" style="width: 95%;">
                                    <span> 95 </span> <i class="per_cent"> % </i>
                                </div>
                            </div>
                        </div>
                        <div class="prog_sec">
                            <p class=labl> Uy Tín </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="92" style="width: 92%;">
                                    <span> 92 </span> <i class="per_cent"> % </i>
                                </div>
                            </div>
                        </div>
                        <div class="prog_sec">
                            <p class=labl> Giá Cả </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="97" style="width: 97%;">
                                    <span> 97 </span> <i class="per_cent"> % </i>
                                </div>
                            </div>
                        </div>
                        <div class="prog_sec">
                            <p class=labl> Hài Lòng </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" style="width: 100%;">
                                    <span> 100 </span> <i class="per_cent"> % </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="spacer-30"></div>

        </section>

        <!-- Sidebar Section -->
        @include('frontend.layouts.partials.aside')

        <div class="spacer-60"></div>

    </div>
</div>
@endsection
