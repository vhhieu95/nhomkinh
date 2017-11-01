@extends('frontend.layouts.master')
@section('title', __('$news->title'))
@section('content')
<div class="container">
    <div class="row">
        <!-- Blog Section -->
        <section id="blog_sec" class="col-md-8">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-image">
                        @if (isset($news->image))
                            <img class="img-responsive img-hover" src="{{ $news->image }}" alt="{{ $news->title }}">
                        @else
                            <img class="img-responsive img-hover" src="{{ asset(config('constant.default_image')) }}" alt="{{ $news->title }}">
                        @endif
                    </div>

                    <div class="panel-body">
                        <div class="blog_feat">
                            <p class="area"><i class="fa fa-home"></i> Đăng: Admin <span> :: </span>
                            </p>
                            <p class="bedrom"><i class="fa fa-comment"></i> Bình Luận <span> :: </span>
                            </p>
                            <p class="bedrom"><i class="fa fa-clock-o"></i> {{ $day }} </p>
                        </div>
                        <h3 class="sec_titl">
                            {{ $news->title }}     
                        </h3>

                        <h5 class="sec_desc">
                            {{ $news->description }}
                        </h5>
                        <p class="sec_desc">
                            {!! $news->content !!}
                        </p>
                        <div class="row nxt_pos">
                            <div class="col-md-5">
                                <a href="{{ route('tin-tuc.show', $newsDiff->slug ) }}" title="{{ $newsDiff->name }}">
                                    <img class="img-responsive img-hover" src="{{ $newsDiff->image }}" alt="{{ $newsDiff->title }}">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <h3 class="sec_titl">
                                    <a href="{{ route('tin-tuc.show', $newsDiff->slug ) }}" title="{{ $newsDiff->name }}">
                                        {{ $newsDiff->title }}
                                    </a>
                                </h3>

                                <p class="sec_desc">
                                    {{ $newsDiff->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="spacer-30"></div>
            <!-- Comment Section -->
            <div class="row commen_sec">
                <div class="titl_sec">
                    <div class="col-lg-12">
                        <h3 class="main_titl text-left">
                            Bình Luận
                        </h3>
                    </div>
                    <div class="clearfix"></div>
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