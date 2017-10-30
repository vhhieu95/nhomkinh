@extends('frontend.layouts.master')
@section('title', __('Chi tiet san pham'))
@section('content')
<div class="container">
    <div class="row">
        <!-- Blog Section -->
        <section id="blog_sec" class="col-md-8">
            <!-- Blog 1 -->
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-image">
                        <img class="img-responsive img-hover" src="http://placehold.it/800x450" alt="">
                        <div class="dat_labl">
                            <h2> 13 </h2>
                            <h4> APRIL </h4>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="blog_feat">
                            <p class="area"><i class="fa fa-home"></i> By Admin <span> :: </span>
                            </p>
                            <p class="bedrom"><i class="fa fa-comment"></i> Comments (3) <span> :: </span>
                            </p>
                            <p class="bedrom"><i class="fa fa-folder-open"></i> Real Estate </p>
                        </div>
                        <h3 class="sec_titl">
                     Tousled tofu tote bag direct trade flexitar                 </h3>

                        <p class="sec_desc">
                            Gluten-free street art irony, Williamsburg synth craft beer trust fund Carles McSweeney's kale chips messenger bag squid. Gastropub crucifix squid, photo booth artisan sustainable readymade PBR&amp;B craft beer umami Truffaut kogi gluten-free viral vinyl. Brunch meditation Blue Bottle.
                        </p>
                        <p class="readmore2"> <a href="blog-single.html"> Read More </a> </p>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="spacer-30"></div>
            <!-- Blog 2 -->
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-image">
                        <img class="img-responsive img-hover" src="http://placehold.it/800x450" alt="">
                        <div class="dat_labl">
                            <h2> 24 </h2>
                            <h4> APRIL </h4>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="blog_feat">
                            <p class="area"><i class="fa fa-home"></i> By Admin <span> :: </span>
                            </p>
                            <p class="bedrom"><i class="fa fa-comment"></i> Comments (3) <span> :: </span>
                            </p>
                            <p class="bedrom"><i class="fa fa-folder-open"></i> Real Estate </p>
                        </div>
                        <h3 class="sec_titl">
                     Neutra Kickstarter dreamcatcher craft beer                  </h3>

                        <p class="sec_desc">
                            Gluten-free street art irony, Williamsburg synth craft beer trust fund Carles McSweeney's kale chips messenger bag squid. Gastropub crucifix squid, photo booth artisan sustainable readymade PBR&amp;B craft beer umami Truffaut kogi gluten-free viral vinyl. Brunch meditation Blue Bottle.
                        </p>
                        <p class="readmore2"> <a href="blog-single.html"> Read More </a> </p>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="spacer-30"></div>
            <!-- Blog 3 -->
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-image">
                        <img class="img-responsive img-hover" src="http://placehold.it/800x450" alt="">
                        <div class="dat_labl">
                            <h2> 6 </h2>
                            <h4> APRIL </h4>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="blog_feat">
                            <p class="area"><i class="fa fa-home"></i> By Admin <span> :: </span>
                            </p>
                            <p class="bedrom"><i class="fa fa-comment"></i> Comments (3) <span> :: </span>
                            </p>
                            <p class="bedrom"><i class="fa fa-folder-open"></i> Real Estate </p>
                        </div>
                        <h3 class="sec_titl">
                     Intelligentsia banh mi kale chips irony sriracha            </h3>

                        <p class="sec_desc">
                            Gluten-free street art irony, Williamsburg synth craft beer trust fund Carles McSweeney's kale chips messenger bag squid. Gastropub crucifix squid, photo booth artisan sustainable readymade PBR&amp;B craft beer umami Truffaut kogi gluten-free viral vinyl. Brunch meditation Blue Bottle.
                        </p>
                        <p class="readmore2"> <a href="blog-single.html"> Read More </a> </p>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="spacer-30"></div>
            <!-- Blog 4 -->
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-image">
                        <img class="img-responsive img-hover" src="http://placehold.it/800x450" alt="">
                        <div class="dat_labl">
                            <h2> 11 </h2>
                            <h4> APRIL </h4>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="blog_feat">
                            <p class="area"><i class="fa fa-home"></i> By Admin <span> :: </span>
                            </p>
                            <p class="bedrom"><i class="fa fa-comment"></i> Comments (3) <span> :: </span>
                            </p>
                            <p class="bedrom"><i class="fa fa-folder-open"></i> Real Estate </p>
                        </div>
                        <h3 class="sec_titl">
                     Tousled bicycle rights Shoreditch            </h3>

                        <p class="sec_desc">
                            Gluten-free street art irony, Williamsburg synth craft beer trust fund Carles McSweeney's kale chips messenger bag squid. Gastropub crucifix squid, photo booth artisan sustainable readymade PBR&amp;B craft beer umami Truffaut kogi gluten-free viral vinyl. Brunch meditation Blue Bottle.
                        </p>
                        <p class="readmore2"> <a href="blog-single.html"> Read More </a> </p>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="spacer-30"></div>
            <!-- Pagination -->
            <div class="pagin">
                <ul>
                    <li> <a class="active" href="#"> 1 </a> </li>
                    <li> <a href="#"> 2 </a> </li>

                    <li> <a href="#"> 3 </a> </li>

                    <li> <a href="#"> 4 </a> </li>

                    <li>
                        <a href="#"> <i class="fa fa-long-arrow-right"></i> </a>
                    </li>



                </ul>

            </div>

        </section>

        <!-- Sidebar Section -->
        @include('frontend.layouts.partials.aside')

        <div class="spacer-60"></div>

    </div>
</div>
@endsection