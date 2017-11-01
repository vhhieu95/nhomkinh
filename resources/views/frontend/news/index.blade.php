@extends('frontend.layouts.master')
@section('title', __('Tin Tức'))
@section('content')
<div class="container">
    <div class="row">
        <!-- Blog Section -->
        <section id="blog_sec" class="col-md-8">
            <!-- Blog 1 -->
            @foreach($news as $value)
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-image">
                        @if (isset($value->image))
                        <img class="img-responsive img-hover" src="{{ $value->image }}" alt="{{ $value->title }}">
                        @else
                        <img class="img-responsive img-hover" src="{{ asset(config('constant.default_image')) }}" alt="{{ $value->title }}">
                        @endif
                        <div class="dat_labl">
                            <h3>{{ $day }}</h3>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="blog_feat">
                            <p class="area"><i class="fa fa-home"></i> Đăng Admin <span> :: </span>
                            </p>
                            <p class="bedrom"><i class="fa fa-comment"></i> Bình Luận <span> :: </span>
                            </p>
                            <p class="bedrom"><i class="fa fa-folder-open"> <a href="{{ route('tin-tuc.show', $value->slug ) }}" title="{{ $value->name }}">
                                </i> Chi Tiết </a></p>
                        </div>
                        <h3 class="sec_titl">
                            <a href="{{ route('tin-tuc.show', $value->slug ) }}" title="{{ $value->name }}">
                                {{ $value->title }}
                            </a>
                        </h3>
                        <h5 class="sec_desc">
                            {!! contentLimit(($value->description), 300) !!}
                        </h5>
                        <p class="readmore2"> <a href="{{ route('tin-tuc.show', $value->slug ) }}" title="{{ $value->name }}">
                            Chi Tiết 
                        </a> 

                        </p>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="spacer-30"></div>
            @endforeach
            <!-- /.row -->

            <div class="spacer-30"></div>
            <!-- Pagination -->
            <div class="pagin">
                {{ $news->render() }}
            </div>

        </section>

        <!-- Sidebar Section -->
        @include('frontend.layouts.partials.aside')

        <div class="spacer-60"></div>

    </div>
</div>
@endsection
