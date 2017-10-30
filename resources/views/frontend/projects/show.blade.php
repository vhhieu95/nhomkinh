@extends('frontend.layouts.master')
@section('title', __('Chi tiet du an'))
@section('content')
<div class="container">
    <div class="row">
        <!-- Agent Section -->
        <section id="agent_sec" class="col-md-8">
            <!-- Agent Info -->
            <div class="agen_info2">
                <div class="col-md-5">
                    <img class="img-responsive img-hover" src="http://placehold.it/270x260" alt="">
                    <div class="cont_frm2">
                        <h2 class="frm_titl"> CONTACT ME </h2>
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="control-group form-group first">
                                <div class="controls">
                                    <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name." placeholder="Your Name">
                                    <p class="help-block"></p>
                                </div>

                                <div class="controls">
                                    <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter an email address." placeholder="Email Address">

                                    <p class="help-block"></p>
                                </div>

                                <div class="controls">
                                    <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none" placeholder="Message Box"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Send Message</button>
                                <div id="success"></div>
                                <!-- For success/fail messages -->
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="panel panel-default">

                        <div class="panel-body">
                            <div class="row agen_desc">
                                <div class="col-md-7">
                                    <h3 class="sec_titl">
                     Scott Berends                                       </h3>
                                    <p class="sec_desc">
                                        Buying Agents
                                    </p>

                                </div>
                                <div class="col-md-5 p0">
                                    <div class="soc_icon">
                                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                                        <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                    </div>

                                </div>
                            </div>
                            <p class="sec_desc">
                                <strong> Cred tousled +1 kogi, irony iPhone hashtag fixie church-key selfies XOXO four loko actually DIY cold-pressed. </strong> </p>
                            <p class="sec_desc">
                                Sustainable health goth put a bird on it Kickstarter butcher, skateboard semiotics occupy paleo fingerstache Etsy single-origin coffee ethical. Next level butcher Intelligentsia, occupy hella messenger bag organic brunch banjo food truck chambray put a bird on it cardigan Neutra pickled. </p>
                            <p class="sec_desc">
                                Cardigan pork belly bicycle rights, Echo Park gastropub forage literally you probably haven't heard of them mlkshk hella heirloom. Deep v small batch viral gastropub you probably haven't heard of them Helvetica PBR, McSweeney's pop-up fanny pack locavore. Sustainable mustache art party, stumptown craft beer slow-carb scenester. Odd Future narwhal sartorial, cornhole cray kale chips selvage tote bag.
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
                <div class="clearfix"></div>
            </div>
            <div class="spacer-30"></div>

            <!-- Property Listing -->
            <div class="row prlist_sec">
                <div class="titl_sec">
                    <div class="col-lg-12">

                        <h3 class="main_titl text-left">
                            property listing
                        </h3>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- Property List 1 -->
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-image">
                            <img class="img-responsive img-hover" src="http://placehold.it/700x450" alt="">
                            <div class="img_hov_eff">
                                <a class="btn btn-default btn_trans" href="property_details.html"> More Details </a>
                            </div>

                        </div>
                        <div class="sal_labl">
                            For Sale
                        </div>

                        <div class="panel-body">
                            <div class="prop_feat">
                                <p class="area"><i class="fa fa-home"></i> 3000 Sq Ft</p>
                                <p class="bedrom"><i class="fa fa-bed"></i> 3 Bedrooms</p>
                                <p class="bedrom"><i class="fa fa-car"></i> 1 Garage</p>
                            </div>
                            <h3 class="sec_titl">
                     Amillarah Private Islands                 </h3>

                            <p class="sec_desc">
                                Heirloom art party iPhone kogi American Apparel stumptown try-hard tousled organic...
                            </p>
                            <div class="panel_bottom">
                                <div class="col-md-6">
                                    <p class="price text-left"> $250,100</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="readmore text-right"> <a href="#"> Read More </a> </p>
                                    <div class="share_btn">
                                        <i class="fa fa-share-alt"></i>
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
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Property List 2 -->
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-image">
                            <img class="img-responsive img-hover" src="http://placehold.it/700x450" alt="">
                            <div class="img_hov_eff">
                                <a class="btn btn-default btn_trans" href="property_details.html"> More Details </a>
                            </div>

                        </div>
                        <div class="sal_labl">
                            For Rent
                        </div>

                        <div class="panel-body">
                            <div class="prop_feat">
                                <p class="area"><i class="fa fa-home"></i> 3000 Sq Ft</p>
                                <p class="bedrom"><i class="fa fa-bed"></i> 3 Bedrooms</p>
                                <p class="bedrom"><i class="fa fa-car"></i> 1 Garage</p>
                            </div>
                            <h3 class="sec_titl">
                     Amillarah Private Islands                 </h3>

                            <p class="sec_desc">
                                Heirloom art party iPhone kogi American Apparel stumptown try-hard tousled organic...
                            </p>
                            <div class="panel_bottom">
                                <div class="col-md-6">
                                    <p class="price text-left"> $250,100</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="readmore text-right"> <a href="#"> Read More </a> </p>

                                    <div class="share_btn">
                                        <i class="fa fa-share-alt"></i>
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



                            </div>
                        </div>
                    </div>
                </div>

                <div class="spacer-30"></div>

                <div class="clearfix"></div>
                <!-- Property List 3 -->
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-image">
                            <img class="img-responsive img-hover" src="http://placehold.it/700x450" alt="">
                            <div class="img_hov_eff">
                                <a class="btn btn-default btn_trans" href="property_details.html"> More Details </a>
                            </div>

                        </div>
                        <div class="sal_labl">
                            For Rent
                        </div>

                        <div class="panel-body">
                            <div class="prop_feat">
                                <p class="area"><i class="fa fa-home"></i> 3000 Sq Ft</p>
                                <p class="bedrom"><i class="fa fa-bed"></i> 3 Bedrooms</p>
                                <p class="bedrom"><i class="fa fa-car"></i> 1 Garage</p>
                            </div>
                            <h3 class="sec_titl">
                     Amillarah Private Islands                 </h3>

                            <p class="sec_desc">
                                Heirloom art party iPhone kogi American Apparel stumptown try-hard tousled organic...
                            </p>
                            <div class="panel_bottom">
                                <div class="col-md-6">
                                    <p class="price text-left"> $250,100</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="readmore text-right"> <a href="#"> Read More </a> </p>

                                    <div class="share_btn">
                                       <i class="fa fa-share-alt"></i>
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



                            </div>
                        </div>
                    </div>
                </div>
                <!-- Property List 4 -->
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-image">
                            <img class="img-responsive img-hover" src="http://placehold.it/700x450" alt="">
                            <div class="img_hov_eff">
                                <a class="btn btn-default btn_trans" href="property_details.html"> More Details </a>
                            </div>

                        </div>
                        <div class="sal_labl">
                            For Sale
                        </div>

                        <div class="panel-body">
                            <div class="prop_feat">
                                <p class="area"><i class="fa fa-home"></i> 3000 Sq Ft</p>
                                <p class="bedrom"><i class="fa fa-bed"></i> 3 Bedrooms</p>
                                <p class="bedrom"><i class="fa fa-car"></i> 1 Garage</p>
                            </div>
                            <h3 class="sec_titl">
                     Amillarah Private Islands                 </h3>

                            <p class="sec_desc">
                                Heirloom art party iPhone kogi American Apparel stumptown try-hard tousled organic...
                            </p>
                            <div class="panel_bottom">
                                <div class="col-md-6">
                                    <p class="price text-left"> $250,100</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="readmore text-right"> <a href="#"> Read More </a> </p>

                                    <div class="share_btn">
                                         <i class="fa fa-share-alt"></i>
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




                            </div>
                        </div>
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