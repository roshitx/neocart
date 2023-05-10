		<!-- sidebar mobile menu & sidebar cart - start
				================================================== -->
		<div class="sidebar-menu-wrapper">
			<div class="cart_sidebar">
				<button type="button" class="close_btn"><i class="fa-solid fa-xmark"></i></button>

				<ul class="cart_items_list ul_li_block mb_30 clearfix">
					<li>
						<div class="item_image">
							<img src="{{ asset('images/cart/img_01.jpg') }}" alt="image_not_found">
						</div>
						<div class="item_content">
							<h4 class="item_title">Yellow Blouse</h4>
							<span class="item_price">$30.00</span>
						</div>
						<button type="button" class="remove_btn"><i class="fa-solid fa-trash"></i></i></button>
					</li>
					<li>
						<div class="item_image">
							<img src="{{ asset('images/cart/img_01.jpg') }}" alt="image_not_found">
						</div>
						<div class="item_content">
							<h4 class="item_title">Yellow Blouse</h4>
							<span class="item_price">$30.00</span>
						</div>
						<button type="button" class="remove_btn"><i class="fa-solid fa-trash"></i></i></button>
					</li>
					<li>
						<div class="item_image">
							<img src="{{ asset('images/cart/img_01.jpg') }}" alt="image_not_found">
						</div>
						<div class="item_content">
							<h4 class="item_title">Yellow Blouse</h4>
							<span class="item_price">$30.00</span>
						</div>
						<button type="button" class="remove_btn"><i class="fa-solid fa-trash"></i></i></button>
					</li>
				</ul>

				<ul class="total_price ul_li_block mb_30 clearfix">
					<li>
						<span>Subtotal:</span>
						<span>$90</span>
					</li>
					<li>
						<span>Vat 5%:</span>
						<span>$4.5</span>
					</li>
					<li>
						<span>Discount 20%:</span>
						<span>- $18.9</span>
					</li>
					<li>
						<span>Total:</span>
						<span>$75.6</span>
					</li>
				</ul>

				<ul class="btns_group ul_li_block clearfix">
					<li><a href="shop_cart.html">View Cart</a></li>
					<li><a href="shop_checkout.html">Checkout</a></li>
				</ul>
			</div>

			<div class="sidebar_mobile_menu">
				<button type="button" class="close_btn"><i class="fa-solid fa-xmark"></i></button>

				<div class="msb_widget brand_logo text-center">
					<a href="index.html">
						<img src="{{ asset('images/logo.png') }}" width="200" alt="logo_not_found">
					</a>
				</div>

				<div class="msb_widget mobile_menu_list clearfix">
					<h3 class="title_text mb_15 text-uppercase"><i class="fa-solid fa-bars mr-2"></i> Menu List</h3>
					<ul class="ul_li_block clearfix">
						<li><a href="../shop/shop_page.blade.php">Shop</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>

				<div class="user_info">
					<h3 class="title_text mb_30 text-uppercase"><i class="fas fa-user mr-2"></i> User Info</h3>
					<div class="profile_info clearfix">
						<div class="user_thumbnail">
							<img src="{{ asset('images/meta/img_01.png') }}" alt="thumbnail_not_found">
						</div>
						<div class="user_content">
							<h4 class="user_name">Jone Doe</h4>
							<span class="user_title">Seller</span>
						</div>
					</div>
					<ul class="settings_options ul_li_block clearfix">
						<li><a href="#!"><i class="fa-solid fa-circle-user"></i> Profile</a></li>
						<li><a href="#!"><i class="fa-solid fa-gear"></i> Settings</a></li>
						<li><a href="#!"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
					</ul>
				</div>
			</div>

			<div class="overlay"></div>
		</div>
		<!-- sidebar mobile menu & sidebar cart - end
				================================================== -->