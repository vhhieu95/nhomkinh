@extends('frontend.layouts.master')
@section('title', __('Trang chủ'))
@section('content')
<section id="srch_slide">

		<div class="container">

			<!-- Search & Slider -->
			<div class="row">
				<!-- Search Form -->
				<div class="col-md-4">
					<div class="srch_frm">
						<h3>Real Estate Search</h3>
						<form name="sentMessage" id="contactForm" novalidate>
							<div class="control-group form-group">
								<div class="controls">
									<label>Keyword </label>
									<input type="text" class="form-control" id="keyword" required data-validation-required-message="Please enter a keyword." placeholder="Any keyword">
									<p class="help-block"></p>
								</div>
							</div>
							<div class="control-group form-group">
								<div class="controls">
									<label>Location </label>
									<select name="State" class="form-control" required data-validation-required-message="Please select a state.">
										<option value="" selected="selected">Any Location</option>
										<option value="AL">Alabama</option>
									</select>
								</div>
							</div>
							<div class="control-group form-group">
								<div class="controls col-md-6 first">
									<label>Type </label>
									<select name="Type" class="form-control" required data-validation-required-message="Please select a type.">
										<option value="" selected="selected">Industrial</option>
										<option value="2">Commercial</option>
										<option value="3">Household</option>
									</select>
								</div>
								<div class="controls col-md-6">
									<label>Actions </label>
									<select name="Actions" class="form-control" required data-validation-required-message="Please select a Actions.">
										<option value="" selected="selected">For Rent</option>
										<option value="2">For Sale</option>
									</select>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="control-group form-group">
								<div class="controls col-md-6 first">
									<label>Min. Price </label>
									<select name="min-price" class="form-control" required data-validation-required-message="Please select a Min. Price.">
										<option value="" selected="selected">$50</option>
										<option value="2">$00</option>
										<option value="3">$200</option>
										<option value="3">$300</option>
										<option value="3">$400</option>
										<option value="3">$500</option>
										<option value="3">$700</option>
										<option value="3">$800</option>
										<option value="3">$900</option>
										<option value="3">$000</option>
										<option value="3">$500</option>
										<option value="3">$2000</option>
										<option value="3">$2500</option>
									</select>
								</div>
								<div class="controls col-md-6">
									<label>Max. Price </label>
									<select name="max-price" class="form-control" required data-validation-required-message="Please select a Max. Price.">
										<option value="" selected="selected">$200</option>
										<option value="2">$300</option>
										<option value="3">$400</option>
										<option value="3">$500</option>
										<option value="3">$600</option>
										<option value="3">$700</option>
										<option value="3">$800</option>
										<option value="3">$900</option>
										<option value="3">$1000</option>
										<option value="3">$1500</option>
										<option value="3">$2000</option>
										<option value="3">$2500</option>
										<option value="3">$3000</option>
									</select>
								</div>
								<div class="clearfix"></div>
							</div>

							<div id="success"></div>
							<!-- For success/fail messages -->
							<button type="submit" class="btn btn-primary">Search</button>
						</form>
					</div>
				</div>
				 <!-- Slider -->
				<div class="col-md-8 slide_sec">
					<div id="slider" class="silde_img flexslider">
						<ul class="slides">
						   <!-- Slide 1 -->
							<li>
								<img src="http://placehold.it/770x460" alt="Slider image" />
								<div class="slide-info">
									<p class="sli_price"> $425.000 </p>
									<p class="sli_titl"> Amillarah Private Islands </p>
									<p class="sli_desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </p>
								</div>
							</li>
							<!-- Slide 2 -->
							<li>
								<img src="http://placehold.it/770x460" alt="Slider image" />
								<div class="slide-info">
									<p class="sli_price"> $450.000 </p>
									<p class="sli_titl"> Amillarah Lorem Islands </p>
									<p class="sli_desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </p>
								</div>
							</li>
							<!-- Slide 3 -->
							<li>
								<img src="http://placehold.it/770x460" alt="Slider image" />
								<div class="slide-info">
									<p class="sli_price"> $445.000 </p>
									<p class="sli_titl"> Amillarah Dolar Islands </p>
									<p class="sli_desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </p>
								</div>
							</li>
							<!-- Slide 4 -->
							<li>
								<img src="http://placehold.it/770x460" alt="Slider image" />
								<div class="slide-info">
									<p class="sli_price"> $545.000 </p>
									<p class="sli_titl"> Amillarah Amet Islands </p>
									<p class="sli_desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </p>
								</div>
							</li>
							<!-- Slide 5 -->
							<li>
								<img src="http://placehold.it/770x460" alt="Slider image" />
								<div class="slide-info">
									<p class="sli_price"> $475.000 </p>
									<p class="sli_titl"> Amillarah Consectetuer Islands </p>
									<p class="sli_desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </p>
								</div>
							</li>
							<!-- Slide 6 -->
							<li>
								<img src="http://placehold.it/770x460" alt="Slider image" />
								<div class="slide-info">
									<p class="sli_price"> $555.000 </p>
									<p class="sli_titl"> Amillarah Ipsum Islands </p>
									<p class="sli_desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </p>
								</div>
							</li>
							<!-- Slide 7 -->
							<li>
								<img src="http://placehold.it/770x460" alt="Slider image" />
								<div class="slide-info">
									<p class="sli_price"> $595.000 </p>
									<p class="sli_titl"> Amillarah Elition Islands </p>
									<p class="sli_desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </p>
								</div>
							</li>
							<!-- Slide 8 -->
							<li>
								<img src="http://placehold.it/770x460" alt="Slider image" />
								<div class="slide-info">
									<p class="sli_price"> $585.000 </p>
									<p class="sli_titl"> Amillarah Adituer Islands </p>
									<p class="sli_desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /.row -->

		</div>
		<!-- /.container -->

	</section>

	<div class="spacer-60"></div>

	<!-- Featured Properties Section -->
	<section id="feat_propty">
		<div class="container">
			<div class="row">
				<div class="titl_sec">
					<div class="col-xs-6">

						<h3 class="main_titl text-left">
					Featured Properties
				</h3>

					</div>
					<div class="col-xs-6">

						<h3 class="link_titl text-right">
					<a href="property_listing.html"> View Properties </a>
				</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- Property 1 -->
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-image">
							<img class="img-responsive img-hover" src="http://placehold.it/370x240" alt="">
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
									<p class="readmore text-right"> <a href="property_details.html"> Read More </a> </p>

								</div>



							</div>
						</div>
					</div>
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
				<!-- Property 2 -->
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-image">
							<img class="img-responsive img-hover" src="http://placehold.it/370x240" alt="">
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
									<p class="readmore text-right"> <a href="property_details.html"> Read More </a> </p>


								</div>



							</div>
						</div>
					</div>
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
				<!-- Property 3 -->
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-image">
							<img class="img-responsive img-hover" src="http://placehold.it/370x240" alt="">
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
									<p class="readmore text-right"> <a href="property_details.html"> Read More </a> </p>

								</div>
							</div>
						</div>
					</div>
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
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>

	<div class="spacer-60"></div>

	<!-- Talented Agents Section -->
	<section id="talen_agent">
		<div class="container">
			<div class="row">
				<div class="titl_sec">
					<div class="col-xs-6">

						<h3 class="main_titl text-left">
					talented agents
				</h3>

					</div>
					<div class="col-xs-6">

						<h3 class="link_titl text-right">
					<a href="agents.html"> all agents </a>
				</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- Agent 1 -->
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-image">
							<img class="img-responsive img-hover" src="http://placehold.it/270x255" alt="">
						</div>
						<div class="panel-body">
							<h3 class="sec_titl text-center">
							<a href="agents_single.html"> Scott Berends  </a>                                   </h3>

							<p class="sec_desc text-center">
								Buying Agents
							</p>
							<div class="panel_hidd">
								<hr>
								<p class="phon text-center"> <a href="tel:253-891-8159"> Phone: 253-891-8159 </a> </p>

								<div class="soc_icon">
									<a href="#"> <i class="fa fa-twitter"></i> </a>
									<a href="#"> <i class="fa fa-facebook"></i> </a>
									<a href="#"> <i class="fa fa-linkedin"></i> </a>

								</div>



							</div>
						</div>
					</div>
				</div>
				<!-- Agents 2 -->    
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-image">
							<img class="img-responsive img-hover" src="http://placehold.it/270x255" alt="">
						</div>
						<div class="panel-body">
							<h3 class="sec_titl text-center">
							<a href="agents_single.html">  Stanley Morgan </a>                                    </h3>

							<p class="sec_desc text-center">
								Buying Agents
							</p>
							<div class="panel_hidd">
								<hr>
								<p class="phon text-center"> <a href="tel:253-891-8159"> Phone: 253-891-8159 </a> </p>

								<div class="soc_icon">
									<a href="#"> <i class="fa fa-twitter"></i> </a>
									<a href="#"> <i class="fa fa-facebook"></i> </a>
									<a href="#"> <i class="fa fa-linkedin"></i> </a>

								</div>



							</div>
						</div>
					</div>
				</div>
				<!-- Agents 3 -->
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-image">
							<img class="img-responsive img-hover" src="http://placehold.it/270x255" alt="">
						</div>
						<div class="panel-body">
							<h3 class="sec_titl text-center">
							<a href="agents_single.html">   Michelle Ferrara  </a>                                    </h3>

							<p class="sec_desc text-center">
								Buying Agents
							</p>
							<div class="panel_hidd">
								<hr>
								<p class="phon text-center"> <a href="tel:253-891-8159"> Phone: 253-891-8159 </a> </p>

								<div class="soc_icon">
									<a href="#"> <i class="fa fa-twitter"></i> </a>
									<a href="#"> <i class="fa fa-facebook"></i> </a>
									<a href="#"> <i class="fa fa-linkedin"></i> </a>

								</div>



							</div>
						</div>
					</div>
				</div>
				<!-- Agents 4 -->
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-image">
							<img class="img-responsive img-hover" src="http://placehold.it/270x255" alt="">
						</div>
						<div class="panel-body">
							<h3 class="sec_titl text-center">
							<a href="agents_single.html">   Matthew Stalder  </a>                                    </h3>

							<p class="sec_desc text-center">
								Buying Agents
							</p>
							<div class="panel_hidd">
								<hr>
								<p class="phon text-center"> <a href="tel:253-891-8159"> Phone: 253-891-8159 </a> </p>

								<div class="soc_icon">
									<a href="#"> <i class="fa fa-twitter"></i> </a>
									<a href="#"> <i class="fa fa-facebook"></i> </a>
									<a href="#"> <i class="fa fa-linkedin"></i> </a>

								</div>



							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>

	<div class="spacer-60"></div>

	<!-- Testimonial Section -->
	<section id="testim">
		<div class="container">
			<div class="row testim_sec m0">
			   <!-- Testimonial 1 -->
				<div class="testim_box">
					<blockquote>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel nibh vitae sapien lacinia finibus. Etia faucibus lorem in dui laoreet, eget euismod tellus lacinia.
					</blockquote>
					<div class="auth_sec">
						<img src="http://placehold.it/100x100" alt="">
						<h6 class="auth_nam">
							David Greer
							<span class="auth_pos">
							Ceo Marketing
						</span>
						</h6>
					</div>
				</div>
			   <!-- Testimonial 2 -->
				<div class="testim_box">
					<blockquote>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel nibh vitae sapien lacinia finibus. Etia faucibus lorem in dui laoreet, eget euismod tellus lacinia.
					</blockquote>
					<div class="auth_sec">
						<img src="http://placehold.it/100x100" alt="">
						<h6 class="auth_nam">
							David Greer
							<span class="auth_pos">
							Ceo Marketing
						</span>
						</h6>
					</div>
				</div>
			   <!-- Testimonial 3 -->
				<div class="testim_box">
					<blockquote>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel nibh vitae sapien lacinia finibus. Etia faucibus lorem in dui laoreet, eget euismod tellus lacinia.
					</blockquote>
					<div class="auth_sec">
						<img src="http://placehold.it/100x100" alt="">
						<h6 class="auth_nam">
							Sara Jones
							<span class="auth_pos">
							Ceo Marketing
						</span>
						</h6>
					</div>
				</div>
			   <!-- Testimonial 4 -->
				<div class="testim_box">
					<blockquote>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel nibh vitae sapien lacinia finibus. Etia faucibus lorem in dui laoreet, eget euismod tellus lacinia.
					</blockquote>
					<div class="auth_sec">
						<img src="http://placehold.it/100x100" alt="">
						<h6 class="auth_nam">
							Rebecca Dee
							<span class="auth_pos">
							Ceo Marketing
						</span>
						</h6>
					</div>
				</div>
			   <!-- Testimonial 5 -->
				<div class="testim_box">
					<blockquote>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel nibh vitae sapien lacinia finibus. Etia faucibus lorem in dui laoreet, eget euismod tellus lacinia.
					</blockquote>
					<div class="auth_sec">
						<img src="http://placehold.it/100x100" alt="">
						<h6 class="auth_nam">
							John Connor
							<span class="auth_pos">
							Ceo Marketing
						</span>
						</h6>
					</div>
				</div>
			   <!-- Testimonial 6 -->
				<div class="testim_box">
					<blockquote>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel nibh vitae sapien lacinia finibus. Etia faucibus lorem in dui laoreet, eget euismod tellus lacinia.
					</blockquote>
					<div class="auth_sec">
						<img src="http://placehold.it/100x100" alt="">
						<h6 class="auth_nam">
							Jack Milton
							<span class="auth_pos">
							Ceo Marketing
						</span>
						</h6>
					</div>
				</div>


			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>

	<div class="spacer-60"></div>

	<!-- Latest News Section -->
	<section id="lates_news">
		<div class="container">
			<div class="row">
				<div class="titl_sec">
					<div class="col-xs-6">

						<h3 class="main_titl text-left">
					latest news
				</h3>

					</div>
					<div class="col-xs-6">

						<h3 class="link_titl text-right">
					<a href="blog.html"> view the blog </a>
				</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- News 1 -->
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-image">
							<img class="img-responsive img-hover" src="http://placehold.it/370x240" alt="">

						</div>

						<div class="panel-body">
							<div class="news_dtd">
								<p> On August 01, 2013 by <a href="#"> John Doe </a> </p>
							</div>
							<h3 class="sec_titl">
				Example Post With image format                 </h3>

							<p class="sec_desc">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod...
							</p>
							<p class="readmore text-left"> <a href="blog-single.html"> Read More </a> </p>

						</div>
					</div>
				</div>
				<!-- News 2 -->
				<div class="col-md-4">
					<div class="panel panel-default">
						<div id="slide_pan" class="panel-image">
							<img class="img-responsive img-hover" src="http://placehold.it/370x240" alt="">
							<img class="img-responsive img-hover" src="http://placehold.it/370x240" alt="">
							<img class="img-responsive img-hover" src="http://placehold.it/370x240" alt="">

						</div>

						<div class="panel-body">
							<div class="news_dtd">
								<p> On August 01, 2013 by <a href="#"> John Doe </a> </p>
							</div>
							<h3 class="sec_titl">
						 post example with slider included                 </h3>

							<p class="sec_desc">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod...
							</p>
							<p class="readmore text-left"> <a href="blog-single.html"> Read More </a> </p>

						</div>
					</div>
				</div>
				<!-- News 3 -->    
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-image">
							<img class="img-responsive img-hover" src="http://placehold.it/370x240" alt="">

						</div>

						<div class="panel-body">
							<div class="news_dtd">
								<p> On August 01, 2013 by <a href="#"> John Doe </a> </p>
							</div>
							<h3 class="sec_titl">
						 Lorem Ipsum Dolor Sit Amet                </h3>

							<p class="sec_desc">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod...
							</p>
							<p class="readmore text-left"> <a href="blog-single.html"> Read More </a> </p>

						</div>
					</div>
				</div>

			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>

	<div class="spacer-60"></div>

	<!-- Subscribe Section -->
	<section id="subscribe">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-right subs_info">
					<h5>
					For Subscribers Only
				</h5>

					<h2>
				   Save up to 50% off your next trip
				</h2>
				</div>
				<!-- Subscribe Form -->
				<div class="col-md-6 text-left subs_form">
					<form name="sentMessage" id="contactForm2" novalidate>
						<div class="control-group form-group">
							<div class="controls">
								<input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." placeholder="Put your email address">
								<button type="submit" class="btn btn-primary">Subscribe</button>
							</div>

						</div>
					</form>
				</div>

			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>

	<div class="spacer-60"></div>

	<!-- Our clients -->
	<section id="clients">
		<div class="container">
			<div id="owl-carousel" class="row">
			   <h2 class="hide"> Our Clients </h2>
				<div class="owl_col">
					<div class="mid_img"> <img class="img-responsive customer-img" src="http://placehold.it/160x27" alt="">
					</div>
				</div>
				<div class="owl_col">
					<div class="mid_img"> <img class="img-responsive customer-img" src="http://placehold.it/160x38" alt="">
					</div>
				</div>
				<div class="owl_col">
					<div class="mid_img"> <img class="img-responsive customer-img" src="http://placehold.it/160x36" alt="">
					</div>
				</div>
				<div class="owl_col">
					<div class="mid_img"> <img class="img-responsive customer-img" src="http://placehold.it/160x30" alt="">
					</div>
				</div>
				<div class="owl_col">
					<div class="mid_img"> <img class="img-responsive customer-img" src="http://placehold.it/160x33" alt="">
					</div>
				</div>
				<div class="owl_col">
					<div class="mid_img"> <img class="img-responsive customer-img" src="http://placehold.it/160x27" alt="">
					</div>
				</div>
				<div class="owl_col">
					<div class="mid_img"> <img class="img-responsive customer-img" src="http://placehold.it/160x36" alt="">
					</div>
				</div>
				<div class="owl_col">
					<div class="mid_img"> <img class="img-responsive customer-img" src="http://placehold.it/160x31" alt="">
					</div>
				</div>
			</div>
			<!-- /.row -->
		</div>

	</section>

	<div class="spacer-60"></div>

@endsection