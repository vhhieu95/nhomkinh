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
                                <li><img class="img-responsive" src="frontend/images/property/prop.png" alt="Property Slide Image">
                                </li>
                                <li><img class="img-responsive" src="frontend/images/property/prop.png" alt="Property Slide Image">
                                </li>
                                <li><img class="img-responsive" src="frontend/images/property/prop.png" alt="Property Slide Image">
                                </li>
                                <li><img class="img-responsive" src="frontend/images/property/prop.png" alt="Property Slide Image">
                                </li>
                                <li><img class="img-responsive" src="frontend/images/property/prop.png" alt="Property Slide Image">
                                </li>
                            </ul>
                        <!-- Proerty Slider Thumbnails -->    
                            <div class="col-md-12 rel_img">
                                <ul id="slid_nav">
                                    <li>
                                        <a data-slide-index="0" href=""><img class="img-responsive img-hover" src="frontend/images/property/prop_thumb.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a data-slide-index="1" href=""><img class="img-responsive img-hover" src="frontend/images/property/prop_thumb.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a data-slide-index="2" href=""><img class="img-responsive img-hover" src="frontend/images/property/prop_thumb.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a data-slide-index="3" href=""><img class="img-responsive img-hover" src="frontend/images/property/prop_thumb.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a data-slide-index="4" href=""><img class="img-responsive img-hover" src="frontend/images/property/prop_thumb.png" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="panel-body">
                            <div class="prop_feat">
                                <p class="area"><i class="fa fa-home"></i> 3000 Sq Ft</p>
                                <p class="bedrom"><i class="fa fa-bed"></i> 3 Bedrooms</p>
                                <p class="bedrom"><i class="fa fa-car"></i> 1 Garage</p>
                                <p class="bedrom"><i class="fa fa-star-o"></i> Add to Favorites </p>
                                <p class="bedrom"><i class="fa fa-print"></i> Print This Details </p>

                                <div class="share_btn">
                                    <a href="#"> <i class="fa fa-share-alt"></i>
                                    </a>
                                    <div class="soc_btn">
                                        <ul>
                                            <li>
                                                <a href="#"> <i class="fa fa-facebook"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fa fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fa fa-google-plus"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                            </li>

                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <h3 class="sec_titl">
                         Amillarah Private Islands                </h3>

                            <div class="col_labls larg_labl">

                                <p class="or_labl">For Sale</p>
                                <p class="blu_labl"> $470,00</p>

                            </div>

                            <p class="sec_desc">
                                Whatever diy Odd Future. Lomo cornhole pickled viral, Godard trust fund McSweeney's mlkshk seitan blog PBR&amp;B occupy health goth four loko. Intelligentsia raw denim tousled quinoa. Listicle cred chillwave flannel, migas next level sriracha Shoreditch. Pop-up Williamsburg PBR&amp;B, aesthetic YOLO kogi butcher Austin chia yr XOXO cliche. Normcore pug Blue Bottle 3 wolf moon gentrify.
                            </p>
                            
                            <!-- Proerty Additional Info -->
                            <div class="prop_addinfo">
                                <h2 class="add_titl">
                                Additional Details
                            </h2>

                                <div class="info_sec first">
                                    <div class="col-md-5">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos"> Price: <span> $250.100 </span> </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos"> For Sale/Rent: <span> Sale </span> </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos"> Cross Streets: <span> City of New York </span> </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos"> Area: <span> 3000 Sq Ft </span> </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos"> Garages: <span> 1 </span> </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos">Bedrooms: <span> 3 </span> </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos">Bathrooms: <span> 2 </span> </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos">Acres: <span> 0.19 </span> </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos">Heat: <span> Forced Air </span> </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos">Dimensions: <span> 80x100 </span> </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos">Size Source: <span> Assessor </span> </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos">AC: <span> Center </span> </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="spacer-30"></div>
                
                <!-- Agent Info -->
                <div class="row">
                    <div class="agen_info">

                        <div class="col-md-4">
                            <a href="agents_single.html"><img class="img-responsive img-hover" src="http://placehold.it/270x260" alt="">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="panel panel-default">

                                <div class="panel-body">
                                    <div class="row agen_desc">
                                        <div class="col-sm-8">
                                            <h3 class="sec_titl">
                            <a href="agents_single.html"> Scott Berends </a>                                   </h3>
                                            <p class="sec_desc">
                                                Buying Agents
                                            </p>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="soc_icon">
                                                <a href="#"> <i class="fa fa-twitter"></i> </a>
                                                <a href="#"> <i class="fa fa-facebook"></i> </a>
                                                <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                            </div>

                                        </div>
                                    </div>
                                    <p class="sec_desc">
                                        Single origin coffee crucifix tousled freegan lo-fi wayfare flexitaria Marfa deepbanh mi church-key direct trad street American Apparel Pinterest pop-up banh mi you probably.
                                    </p>
                                    <div class="panel_bottom">
                                        <div class="agen_feat">
                                            <p class="area">
                                                <a href="tel:910-213-7890"> <i class="fa fa-phone"></i> 910-213-7890 </a>
                                            </p>
                                            <p class="bedrom">
                                                <a href="mailto:scott@berends.com?Subject=Agent%20enquiry"> <i class="fa fa-envelope"></i> scott@berends.com </a>
                                            </p>
                                            <p class="bedrom"><a href="skype:-scottberends1-?chat"><i class="fa fa-skype"></i> scottberends1 </a> </p>
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
                    Property Map
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
