@extends('frontend.layouts.master')
@section('title', __('Lien he'))
@section('content')
<div class="container">
    <div class="row">
        <!-- Contact Section -->
        <section id="contact_sec" class="col-md-8">
            <!-- Contact form -->
            <div class="row">
                <div class="titl_sec">
                    <div class="col-lg-12">

                        <h3 class="main_titl text-left">
                Send us email
            </h3>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-12">
                    <div class="cont_frm">
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="control-group form-group col-md-6 first">
                                <div class="controls">
                                    <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name." placeholder="Your Name">
                                    <div class="in_ico">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <p class="help-block"></p>
                                </div>

                                <div class="controls">
                                    <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter an email address." placeholder="Email Address">
                                    <div class="in_ico">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <p class="help-block"></p>
                                </div>

                                <div class="controls">
                                    <input type="number" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number." placeholder="Your Phone">
                                    <div class="in_ico">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <p class="help-block"></p>
                                </div>

                                <div class="controls last">
                                    <input type="text" class="form-control" id="web" required data-validation-required-message="Please enter your website." placeholder="Website">
                                    <div class="in_ico">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                    <p class="help-block"></p>
                                </div>

                                <div class="clearfix"></div>
                            </div>

                            <div class="control-group form-group col-md-6">
                                <div class="controls">
                                    <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none" placeholder="Message"></textarea>
                                    <div class="in_ico">
                                        <i class="fa fa-paper-plane-o"></i>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                            <div class="clearfix"></div>
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="spacer-30"></div>
            <!-- Location Map -->
            <div class="row">
                <div class="titl_sec">
                    <div class="col-lg-12">

                        <h3 class="main_titl text-left">
                Our Location
            </h3>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-12">
                    <div class="map_ara">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3023.0855969237605!2d-73.99038!3d40.738141999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a238556ce7%3A0x3445b7afb4f445e3!2sTaz+Studios!5e0!3m2!1sen!2sin!4v1432831471606" width="600" height="350"></iframe>
                    </div>

                </div>
            </div>
            <!-- /.row -->

        </section>

        <!-- Sidebar Section -->
        <section id="sidebar" class="col-md-4">
            <!-- Contact Information -->
            <div class="row">
                <div class="titl_sec">
                    <div class="col-lg-12">

                        <h3 class="main_titl text-left">
                Weedor information
            </h3>

                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="cont_info">
                    <div class="info_sec first">
                        <div class="icon_box">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <p class="infos">4737 Horizon Circle Seattle WA 98109</p>
                    </div>

                    <div class="info_sec">
                        <div class="icon_box">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <p class="infos"><a href="mailto:weedor@realestate.com?Subject=template%20enquiry"> weedor@realestate.com </a>
                        </p>
                    </div>

                    <div class="info_sec">
                        <div class="icon_box">
                            <i class="fa fa-phone"></i>
                        </div>
                        <p class="infos"> <a href="tel:+112-510-360-7617"> +112 (510) 360 7617 </a> </p>
                    </div>

                    <div class="info_sec">
                        <div class="icon_box">
                            <i class="fa fa-facebook"></i>
                        </div>
                        <p class="infos">facebook.com/weedor</p>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </section>

        <div class="spacer-60"></div>

    </div>
</div>
@endsection