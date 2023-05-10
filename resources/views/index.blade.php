@extends('layouts.main')
@section('content')
@endsection

<!-- main body - start
		================================================== -->
<main>

	@include('home.slider')
	@include('home.product')

	<!-- advertisement_section - start
			================================================== -->
	<section class="advertisement_section sec_ptb_100 clearfix" style="background-color: #e7e7e7"
		data-background="assets/images/backgrounds/bg_06.jpg">
		<div class="minimal_advertisement">
			<div class="container">
				<div class="row align-items-center justify-content-center">

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="item_image">
							<img src="{{ asset('images/offer_image.png') }}" alt="image_not_found">
						</div>
					</div>

					<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
						<div class="item_content">
							<h2 class="title_text">
								Topshop Washed Black Dad Jean
							</h2>
							<p>
								The main thing about dad jeans is that they come in a trendy wider straight leg, have a total slouchier fit and
								a high rise. Whereas the mom jean is a more fitted style with baggier and tapered legs.
							</p>
							<a class="custom_btn bg_modern_red text-uppercase" href="#!">Model Collection</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- advertisement_section - end
			================================================== -->

	<!-- brand_section - start
			================================================== -->
	<div class="barnd_section sec_ptb_100 clearfix">
		<div class="container">
			<div class="brand_carousel clearfix">
				<div class="item">
					<a class="brand_item" href="#!">
						<img src="{{ asset('images/brands/adidas_logo.png') }}" alt="image_not_found">
					</a>
				</div>

				<div class="item">
					<a class="brand_item" href="#!">
						<img src="{{ asset('images/brands/converse_logo.png') }}" alt="image_not_found">
					</a>
				</div>

				<div class="item">
					<a class="brand_item" href="#!">
						<img src="{{ asset('images/brands/nike_logo.png') }}" alt="image_not_found">
					</a>
				</div>

				<div class="item">
					<a class="brand_item" href="#!">
						<img src="{{ asset('images/brands/uniqlo_logo.png') }}" alt="image_not_found">
					</a>
				</div>

				<div class="item">
					<a class="brand_item" href="#!">
						<img src="{{ asset('images/brands/h&m_logo.png') }}" alt="image_not_found">
					</a>
				</div>

				<div class="item">
					<a class="brand_item" href="#!">
						<img src="assets/images/brands/img_18.png" alt="image_not_found">
					</a>
				</div>

				<div class="item">
					<a class="brand_item" href="#!">
						<img src="assets/images/brands/img_01.png" alt="image_not_found">
					</a>
				</div>

				<div class="item">
					<a class="brand_item" href="#!">
						<img src="assets/images/brands/img_02.png" alt="image_not_found">
					</a>
				</div>

				<div class="item">
					<a class="brand_item" href="#!">
						<img src="assets/images/brands/img_03.png" alt="image_not_found">
					</a>
				</div>

				<div class="item">
					<a class="brand_item" href="#!">
						<img src="assets/images/brands/img_04.png" alt="image_not_found">
					</a>
				</div>

				<div class="item">
					<a class="brand_item" href="#!">
						<img src="assets/images/brands/img_05.png" alt="image_not_found">
					</a>
				</div>

				<div class="item">
					<a class="brand_item" href="#!">
						<img src="assets/images/brands/img_06.png" alt="image_not_found">
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- brand_section - end
			================================================== -->
	
</main>
<!-- main body - end
		================================================== -->
</body>

</html>
