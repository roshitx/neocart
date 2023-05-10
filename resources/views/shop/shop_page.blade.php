@extends('layouts.main')
@section('content')
	<!-- preloader - start -->
	<!-- <div id="preloader"></div> -->
	<!-- preloader - end -->

	<!-- main body - start
			================================================== -->
	<main>
		<!-- breadcrumb_section - start
				================================================== -->
		<section class="breadcrumb_section minimal_breadcrumb d-flex align-items-end clearfix"
			data-background="{{ asset('images/hero.jpg') }}">
			<div class="maxw_1430 container">
				<h1 class="minimal_page_title mb_15">Shop Page</h1>
				<div class="f2_breadcrumb_nav_wrap mt-0">
					<ul class="ce_breadcrumb_nav ul_li clearfix">
						<li><a href="#!">Home</a></li>
						<li>Shop</li>
						<li>Minimal Shop</li>
						<li>Shop Page</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- breadcrumb_section - end
				================================================== -->

		<!-- product_section - start
				================================================== -->
		<section class="product_section sec_ptb_100 clearfix">
			<div class="container">
				<div class="carparts_filetr_bar">
					<div class="row align-items-center justify-content-lg-between">
						<div class="col-lg-6 col-md-6">
							<h4 class="result_text">Showing 1 to 16 of 17 total</h4>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="option_select d-flex align-items-center mb-0">
								<span class="option_title text-uppercase">Sort by:</span>
								<select style="display: none;">
									<option data-display="Select Your Option">Nothing</option>
									<option value="1" selected=""> Name</option>
									<option value="2">Another option</option>
									<option value="3" disabled="">A disabled option</option>
									<option value="4">Potato</option>
								</select>
							</div>
						</div>
					</div>
				</div>

				<div class="row mb_50 justify-content-center">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="minimal_product_item">
							<div class="tab-content">
								<div id="ptab1_1" class="tab-pane active">
									<img src="{{ asset('images/shop/img_01.jpg') }}" alt="image_not_found">
								</div>
								<div id="ptab1_2" class="tab-pane fade">
									<img src="{{ asset('images/shop/img_02.jpg') }}" alt="image_not_found">
								</div>
								<div id="ptab1_3" class="tab-pane fade">
									<img src="{{ asset('images/shop/img_03.jpg') }}" alt="image_not_found">
								</div>
							</div>
							<div class="item_content">
								<h3 class="item_title">
									<a href="#!">Cyrus short</a>
								</h3>
								<span class="item_category">Model Collection</span>
								<span class="item_price">£ 80.00</span>
							</div>
							<ul class="product_color ul_li_block nav clearfix">
								<li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#ptab1_1"></a></li>
								<li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab1_2"></a></li>
								<li><a class="pbg_brown" data-toggle="tab" href="#ptab1_3"></a></li>
							</ul>
							<ul class="product_label ul_li clearfix">
								<li class="bg_black">New</li>
							</ul>
							<ul class="product_action_btns ul_li_block clearfix">
								<li><a class="tooltips" data-placement="right" title="Add To Wishlist" href="#!"><i
											class="fal fa-heart"></i></a></li>
								<li><a class="tooltips" data-placement="right" title="Add To Cart" href="#!"><i
											class="fal fa-shopping-basket"></i></a></li>
								<li><a class="tooltips" data-placement="right" title="Quick View" href="#!" data-toggle="modal"
										data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="minimal_product_item">
							<div class="tab-content">
								<div id="ptab2_1" class="tab-pane active">
									<img src="{{ asset('images/shop/img_02.jpg') }}" alt="image_not_found">
								</div>
								<div id="ptab2_2" class="tab-pane fade">
									<img src="{{ asset('images/shop/img_03.jpg') }}" alt="image_not_found">
								</div>
								<div id="ptab2_3" class="tab-pane fade">
									<img src="{{ asset('images/shop/img_04.jpg') }}" alt="image_not_found">
								</div>
							</div>
							<div class="item_content">
								<h3 class="item_title">
									<a href="#!">Cyrus short</a>
								</h3>
								<span class="item_category">Model Collection</span>
								<span class="item_price">£ 80.00</span>
							</div>
							<ul class="product_color ul_li_block nav clearfix">
								<li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#ptab2_1"></a></li>
								<li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab2_2"></a></li>
								<li><a class="pbg_brown" data-toggle="tab" href="#ptab2_3"></a></li>
							</ul>
							<ul class="product_label ul_li clearfix">
								<li class="bg_black">New</li>
							</ul>
							<ul class="product_action_btns ul_li_block clearfix">
								<li><a class="tooltips" data-placement="right" title="Add To Wishlist" href="#!"><i
											class="fal fa-heart"></i></a></li>
								<li><a class="tooltips" data-placement="right" title="Add To Cart" href="#!"><i
											class="fal fa-shopping-basket"></i></a></li>
								<li><a class="tooltips" data-placement="right" title="Quick View" href="#!" data-toggle="modal"
										data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="minimal_product_item">
							<div class="tab-content">
								<div id="ptab3_1" class="tab-pane active">
									<img src="{{ asset('images/shop/img_03.jpg') }}" alt="image_not_found">
								</div>
								<div id="ptab3_2" class="tab-pane fade">
									<img src="{{ asset('images/shop/img_04.jpg') }}" alt="image_not_found">
								</div>
								<div id="ptab3_3" class="tab-pane fade">
									<img src="{{ asset('images/shop/img_05.jpg') }}" alt="image_not_found">
								</div>
							</div>
							<div class="item_content">
								<h3 class="item_title">
									<a href="#!">Cyrus short</a>
								</h3>
								<span class="item_category">Model Collection</span>
								<span class="item_price">£ 80.00</span>
							</div>
							<ul class="product_color ul_li_block nav clearfix">
								<li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#ptab3_1"></a></li>
								<li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab3_2"></a></li>
								<li><a class="pbg_brown" data-toggle="tab" href="#ptab3_3"></a></li>
							</ul>
							<ul class="product_label ul_li clearfix">
								<li class="bg_black">New</li>
							</ul>
							<ul class="product_action_btns ul_li_block clearfix">
								<li><a class="tooltips" data-placement="right" title="Add To Wishlist" href="#!"><i
											class="fal fa-heart"></i></a></li>
								<li><a class="tooltips" data-placement="right" title="Add To Cart" href="#!"><i
											class="fal fa-shopping-basket"></i></a></li>
								<li><a class="tooltips" data-placement="right" title="Quick View" href="#!" data-toggle="modal"
										data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="minimal_product_item">
							<div class="tab-content">
								<div id="ptab4_1" class="tab-pane active">
									<img src="{{ asset('images/shop/img_04.jpg') }}" alt="image_not_found">
								</div>
								<div id="ptab4_2" class="tab-pane fade">
									<img src="{{ asset('images/shop/img_05.jpg') }}" alt="image_not_found">
								</div>
								<div id="ptab4_3" class="tab-pane fade">
									<img src="{{ asset('images/shop/img_06.jpg') }}" alt="image_not_found">
								</div>
							</div>
							<div class="item_content">
								<h3 class="item_title">
									<a href="#!">Cyrus short</a>
								</h3>
								<span class="item_category">Model Collection</span>
								<span class="item_price">£ 80.00</span>
							</div>
							<ul class="product_color ul_li_block nav clearfix">
								<li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#ptab4_1"></a></li>
								<li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab4_2"></a></li>
								<li><a class="pbg_brown" data-toggle="tab" href="#ptab4_3"></a></li>
							</ul>
							<ul class="product_label ul_li clearfix">
								<li class="bg_black">New</li>
							</ul>
							<ul class="product_action_btns ul_li_block clearfix">
								<li><a class="tooltips" data-placement="right" title="Add To Wishlist" href="#!"><i
											class="fal fa-heart"></i></a></li>
								<li><a class="tooltips" data-placement="right" title="Add To Cart" href="#!"><i
											class="fal fa-shopping-basket"></i></a></li>
								<li><a class="tooltips" data-placement="right" title="Quick View" href="#!" data-toggle="modal"
										data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="minimal_product_item">
							<div class="tab-content">
								<div id="ptab5_1" class="tab-pane active">
									<img src="{{ asset('images/shop/img_05.jpg') }}" alt="image_not_found">
								</div>
								<div id="ptab5_2" class="tab-pane fade">
									<img src="{{ asset('images/shop/img_06.jpg') }}" alt="image_not_found">
								</div>
								<div id="ptab5_3" class="tab-pane fade">
									<img src="{{ asset('images/shop/img_07.jpg') }}" alt="image_not_found">
								</div>
							</div>
							<div class="item_content">
								<h3 class="item_title">
									<a href="#!">Cyrus short</a>
								</h3>
								<span class="item_category">Model Collection</span>
								<span class="item_price">£ 80.00</span>
							</div>
							<ul class="product_color ul_li_block nav clearfix">
								<li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#ptab5_1"></a></li>
								<li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab5_2"></a></li>
								<li><a class="pbg_brown" data-toggle="tab" href="#ptab5_3"></a></li>
							</ul>
							<ul class="product_label ul_li clearfix">
								<li class="bg_black">New</li>
							</ul>
							<ul class="product_action_btns ul_li_block clearfix">
								<li><a class="tooltips" data-placement="right" title="Add To Wishlist" href="#!"><i
											class="fal fa-heart"></i></a></li>
								<li><a class="tooltips" data-placement="right" title="Add To Cart" href="#!"><i
											class="fal fa-shopping-basket"></i></a></li>
								<li><a class="tooltips" data-placement="right" title="Quick View" href="#!" data-toggle="modal"
										data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="minimal_product_item">
							<div class="tab-content">
								<div id="ptab6_1" class="tab-pane active">
									<img src="{{ asset('images/shop/img_06.jpg') }}" alt="image_not_found">
								</div>
								<div id="ptab6_2" class="tab-pane fade">
									<img src="{{ asset('images/shop/img_07.jpg') }}" alt="image_not_found">
								</div>
								<div id="ptab6_3" class="tab-pane fade">
									<img src="{{ asset('images/shop/img_08.jpg') }}" alt="image_not_found">
								</div>
							</div>
							<div class="item_content">
								<h3 class="item_title">
									<a href="#!">Cyrus short</a>
								</h3>
								<span class="item_category">Model Collection</span>
								<span class="item_price">£ 80.00</span>
							</div>
							<ul class="product_color ul_li_block nav clearfix">
								<li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#ptab6_1"></a></li>
								<li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab6_2"></a></li>
								<li><a class="pbg_brown" data-toggle="tab" href="#ptab6_3"></a></li>
							</ul>
							<ul class="product_label ul_li clearfix">
								<li class="bg_black">New</li>
							</ul>
							<ul class="product_action_btns ul_li_block clearfix">
								<li><a class="tooltips" data-placement="right" title="Add To Wishlist" href="#!"><i
											class="fal fa-heart"></i></a></li>
								<li><a class="tooltips" data-placement="right" title="Add To Cart" href="#!"><i
											class="fal fa-shopping-basket"></i></a></li>
								<li><a class="tooltips" data-placement="right" title="Quick View" href="#!" data-toggle="modal"
										data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="minimal_product_item">
							<div class="tab-content">
								<div id="ptab7_1" class="tab-pane active">
									<img src="{{ asset('images/shop/img_07.jpg') }}" alt="image_not_found">
								</div>
								<div id="ptab7_2" class="tab-pane fade">
									<img src="{{ asset('images/shop/img_08.jpg') }}" alt="image_not_found">
								</div>
								<div id="ptab7_3" class="tab-pane fade">
									<img src="{{ asset('images/shop/img_09.jpg') }}" alt="image_not_found">
								</div>
							</div>
							<div class="item_content">
								<h3 class="item_title">
									<a href="#!">Cyrus short</a>
								</h3>
								<span class="item_category">Model Collection</span>
								<span class="item_price">£ 80.00</span>
							</div>
							<ul class="product_color ul_li_block nav clearfix">
								<li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#ptab7_1"></a></li>
								<li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab7_2"></a></li>
								<li><a class="pbg_brown" data-toggle="tab" href="#ptab7_3"></a></li>
							</ul>
							<ul class="product_label ul_li clearfix">
								<li class="bg_black">New</li>
							</ul>
							<ul class="product_action_btns ul_li_block clearfix">
								<li><a class="tooltips" data-placement="right" title="Add To Wishlist" href="#!"><i
											class="fal fa-heart"></i></a></li>
								<li><a class="tooltips" data-placement="right" title="Add To Cart" href="#!"><i
											class="fal fa-shopping-basket"></i></a></li>
								<li><a class="tooltips" data-placement="right" title="Quick View" href="#!" data-toggle="modal"
										data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="minimal_product_item">
							<div class="tab-content">
								<div id="ptab8_1" class="tab-pane active">
									<img src="{{ asset('images/shop/img_08.jpg') }}" alt="image_not_found">
								</div>
								<div id="ptab8_2" class="tab-pane fade">
									<img src="{{ asset('images/shop/img_09.jpg') }}" alt="image_not_found">
								</div>
								<div id="ptab8_3" class="tab-pane fade">
									<img src="{{ asset('images/shop/img_01.jpg') }}" alt="image_not_found">
								</div>
							</div>
							<div class="item_content">
								<h3 class="item_title">
									<a href="#!">Cyrus short</a>
								</h3>
								<span class="item_category">Model Collection</span>
								<span class="item_price">£ 80.00</span>
							</div>
							<ul class="product_color ul_li_block nav clearfix">
								<li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#ptab8_1"></a></li>
								<li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab8_2"></a></li>
								<li><a class="pbg_brown" data-toggle="tab" href="#ptab8_3"></a></li>
							</ul>
							<ul class="product_label ul_li clearfix">
								<li class="bg_black">New</li>
							</ul>
							<ul class="product_action_btns ul_li_block clearfix">
								<li><a class="tooltips" data-placement="right" title="Add To Wishlist" href="#!"><i
											class="fal fa-heart"></i></a></li>
								<li><a class="tooltips" data-placement="right" title="Add To Cart" href="#!"><i
											class="fal fa-shopping-basket"></i></a></li>
								<li><a class="tooltips" data-placement="right" title="Quick View" href="#!" data-toggle="modal"
										data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="minimal_product_item">
							<div class="tab-content">
								<div id="ptab9_1" class="tab-pane active">
									<img src="{{ asset('images/shop/img_09.jpg') }}" alt="image_not_found">
								</div>
								<div id="ptab9_2" class="tab-pane fade">
									<img src="{{ asset('images/shop/img_01.jpg') }}" alt="image_not_found">
								</div>
								<div id="ptab9_3" class="tab-pane fade">
									<img src="{{ asset('images/shop/img_02.jpg') }}" alt="image_not_found">
								</div>
							</div>
							<div class="item_content">
								<h3 class="item_title">
									<a href="#!">Cyrus short</a>
								</h3>
								<span class="item_category">Model Collection</span>
								<span class="item_price">£ 80.00</span>
							</div>
							<ul class="product_color ul_li_block nav clearfix">
								<li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#ptab9_1"></a></li>
								<li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab9_2"></a></li>
								<li><a class="pbg_brown" data-toggle="tab" href="#ptab9_3"></a></li>
							</ul>
							<ul class="product_label ul_li clearfix">
								<li class="bg_black">New</li>
							</ul>
							<ul class="product_action_btns ul_li_block clearfix">
								<li><a class="tooltips" data-placement="right" title="Add To Wishlist" href="#!"><i
											class="fal fa-heart"></i></a></li>
								<li><a class="tooltips" data-placement="right" title="Add To Cart" href="#!"><i
											class="fal fa-shopping-basket"></i></a></li>
								<li><a class="tooltips" data-placement="right" title="Quick View" href="#!" data-toggle="modal"
										data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="load_more clearfix text-center">
					<a class="custom_btn bg_modern_red text-uppercase" href="#!">Load More</a>
				</div>
			</div>
		</section>
		<!-- product_section - end
				================================================== -->

	</main>
	<!-- main body - end
			================================================== -->



	<!-- product quick view - start -->
	<div class="quickview_modal modal fade" id="quickview_modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content clearfix">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="item_image">
					<img src="{{ asset('images/img_07.jpg') }}" alt="image_not_found">
				</div>
				<div class="item_content">
					<h2 class="item_title mb_15">Digital Infrared Thermometer</h2>
					<div class="rating_star mb_30 clearfix">
						<ul class="ul_li float-left mr-2">
							<li class="active"><i class="las la-star"></i></li>
							<li class="active"><i class="las la-star"></i></li>
							<li class="active"><i class="las la-star"></i></li>
							<li class="active"><i class="las la-star"></i></li>
							<li><i class="las la-star"></i></li>
						</ul>
						<span class="review_text">(12 Reviews)</span>
					</div>
					<span class="item_price mb_15">$49.50</span>
					<p class="mb_30">
						Best Electronic Digital Thermometer adipiscing elit, sed do eiusmod teincididunt ut labore et dolore magna aliqua.
						Quis ipsum suspendisse us ultrices gravidaes.
					</p>
					<div class="quantity_form mb_30 clearfix">
						<strong class="list_title">Quantity:</strong>
						<div class="quantity_input">
							<form action="#">
								<span class="input_number_decrement">–</span>
								<input class="input_number" type="text" value="1">
								<span class="input_number_increment">+</span>
							</form>
						</div>
					</div>
					<ul class="btns_group ul_li mb_30 clearfix">
						<li><a href="#!" class="custom_btn bg_carparts_red">Add to Cart</a></li>
						<li><a href="#!" data-toggle="tooltip" data-placement="top" title=""
								data-original-title="Compare Product"><i class="fa-solid fa-rotate"></i></i></a></li>
						<li><a href="#!" data-toggle="tooltip" data-placement="top" title=""
								data-original-title="Add To Wishlist"><i class="fa-regular fa-heart"></i></a></li>
					</ul>
					<ul class="info_list ul_li_block clearfix">
						<li><strong class="list_title">Category:</strong> <a href="#!">Medical Equipment</a></li>
						<li class="social_icon">
							<strong class="list_title">Share:</strong>
							<ul class="ul_li clearfix">
								<li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#!"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#!"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#!"><i class="fab fa-pinterest-p"></i></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- product quick view - end -->
	<!-- shop_section - end
				================================================== -->
@endsection
