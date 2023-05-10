<!-- header_section - start
		================================================== -->
<header class="header_section minimal_header sticky_header clearfix">
	<div class="header_content_wrap d-flex align-items-center clearfix">
		<div class="maxw_1430 container">
			<div class="row align-items-center justify-content-lg-between">
				<div class="col-lg-3">
					<div class="brand_logo">
						<a class="brand_link" href="index.html">
							<img src="{{ asset('images/logo.png') }}" width="180"" alt="logo_not_found">
						</a>

						<ul class="mh_action_btns ul_li clearfix">
							<li>
								<button type="button" class="search_btn" data-toggle="collapse" data-target="#search_body_collapse"
									aria-expanded="false" aria-controls="search_body_collapse">
									<i class="fa-solid fa-magnifying-glass"></i>
								</button>
							</li>
							<li>
								<button type="button" class="cart_btn">
									<i class="fa-solid fa-cart-shopping"></i>
									<span class="btn_badge">2</span>
								</button>
							</li>
							<li><button type="button" class="mobile_menu_btn"><i class="fa-solid fa-bars"></i></button></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-6">
					<nav class="main_menu clearfix">
						<ul class="ul_li_center clearfix">
							<li><a href="{{ route('home.page') }}">Home</a></li>
							<li><a href="{{ route('shop.page') }}">Shop</a></li>
							<li><a href="contact.html">Contact us</a></li>
						</ul>
					</nav>
				</div>

				<div class="col-lg-3">
					<ul class="action_btns_group ul_li_right clearfix">
						<li>
							<button type="button" class="search_btn" data-toggle="collapse" data-target="#search_body_collapse"
								aria-expanded="false" aria-controls="search_body_collapse">
								<i class="fa-solid fa-magnifying-glass"></i>
							</button>
						</li>
						<li>
							<button type="button" class="user_btn" data-toggle="collapse" data-target="#use_deropdown" aria-expanded="false"
								aria-controls="use_deropdown">
								<i class="fa-solid fa-user"></i>
							</button>
							<div id="use_deropdown" class="collapse_dropdown collapse">
								<div class="dropdown_content">
									<div class="profile_info clearfix">
										<div class="user_thumbnail">
											<img src="{{ asset('images/meta/img_01.png') }}" alt="thumbnail_not_found">
										</div>
										<div class="user_content">
											<h4 class="user_name">{{ Auth::check() ? Auth::user()->name : 'Guest' }}</h4>
											<span class="user_title">{{ Auth::check() ? Auth::user()->role : 'Please login first' }}</span>
										</div>
									</div>
									<ul class="settings_options ul_li_block clearfix">
										@auth()
										<li><a href="#!"><i class="fa-solid fa-circle-user"></i> Profile</a></li>
										<li><a href="{{ route('dashboard') }}" target="_blank"><i class="fa-solid fa-table-columns"></i> Dashboard</a></li>
										<li><a href="/logouts"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
										@endauth
										<li><a href="#!"><i class="fa-solid fa-gear"></i> Settings</a></li>
									</ul>
								</div>
							</div>
						</li>
						@auth()
						<li>
							<button type="button" class="cart_btn">
								<i class="fa-solid fa-cart-shopping"></i>
								<span class="btn_badge">2</span>
							</button>
						</li>
						@endauth
						@guest
							
						
							<li>
								<button class="">
									<a href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket text-dark"></i></a>
								</button>
							</li>
						@endguest
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="search_body_collapse" class="search_body_collapse collapse">
		<div class="search_body">
			<div class="container-fluid prl_90">
				<form action="#">
					<div class="form_item mb-0">
						<input type="search" name="search" placeholder="Type here...">
						<button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</header>
<!-- header_section - end
		================================================== -->
