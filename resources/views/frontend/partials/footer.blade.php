<footer class="border-top">
	<div class="footer-top footer1">
		<div class="container">
			<div class="jumbotron" >
				<h6>F&M | DRIP DIFFERENT | AFFORDABLE LUXURY</h6>
				<p><b>Want to DRIP DIFFERENT from the rest</b> and look your best without burning a hole in your pocket?<br>
					You are definitely in the right place. </p>
				
				<p>Affordable Luxury sounds like an Oxy Moron right?.... but here at F&M we give new meaning to it.
					 Experience the Luxury of quality, tailor made and original designs at Unbeatable prices.</p>
				
				<p>Fashion is a language and we speak it Flawlessly with our Edgy, trendy and Exclusive designs. 
					We design and tailor make all our items from scratch in Nairobi, Kenya so when we say Exclusive.... we mean Exclusive. You deserve the best and We are the Best.</p>
						
				<p><b>Fashionistas Welcome to your happy place.</b></p>

				<hr class="my-4">

				<div class="row">
					<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Categories</h5>
					<div class="col-md-3">
						<div class="footer-widget">
							<ul class="widget-list">
								<li>
									<a class="text-uppercase mb-1" href="#!">Dresses</a>
								</li>
								<li>
									<a class="text-uppercase mb-1" href="#!">Kimonos</a>
								</li>
								<li>
									<a class="text-uppercase mb-1" href="http://shop.fikasystems.com/product-category/52/blouses">Blouses</a>
								</li>
								
							</ul>
						</div>
						
					</div>
					<div class="col-md-3">
						{{-- <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Categories</h5> --}}
						<div class="footer-widget">
							<ul class="widget-list">
								<li>
									<a class="text-uppercase mb-1" href="#!">Palazzo Pants</a>
								</li>
								<li>
									<a class="text-uppercase mb-1" href="#!">Two Piece Outfits</a>
								</li>
								<li>
									<a class="text-uppercase mb-1" href="#!">Skirts</a>
								</li>
								
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						{{-- <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Categories</h5> --}}
						<div class="footer-widget">
							<ul class="widget-list">
								<li>
									<a class="text-uppercase mb-1" href="#!">Shirt Dresses</a>
								</li>
								<li>
									<a class="text-uppercase mb-1" href="#!">Gift Cards</a>
								</li>
								<li>
									<a class="text-uppercase mb-1" href="#!">Jumpsuits</a>
								</li>
							
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer Section -->
	<footer class="border-top">
		<div class="footer-top footer2">
			<div class="container">
				<div class="row">
					@if($gtext['is_subscribe_footer'] == 1)
					<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
						@if($gtext['is_publish_contact'] == 1)
						<div class="footer-widget mb10">
							<h4 class="widget-title">{{ __('Contact Us') }}</h4>
							<ul class="widget-contact">
								@if($gtext['address_footer'] != '')
								<li><strong>{{ __('Address') }}:</strong> {{ $gtext['address_footer'] }}</li>
								@endif
								
								@if($gtext['email_footer'] != '')
								<li><strong>{{ __('Email') }}:</strong> {{ $gtext['email_footer'] }}</li>
								@endif
								
								@if($gtext['phone_footer'] != '')
								<li><strong>{{ __('Phone') }}:</strong> {{ $gtext['phone_footer'] }}</li>
								@endif
							</ul>
						</div>
						@endif
						<div class="social-media mb25">
							@php echo SocialMediaList(); @endphp
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
						<div class="footer-widget mb25">
							@if(FooterMenuList('footer_left') != '')
							<h4 class="widget-title">{{ __('Quick links') }}</h4>
							<ul class="widget-list">
								@php echo FooterMenuList('footer_left'); @endphp
							</ul>
							@endif
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
						<div class="footer-widget mb25">
							@if(FooterMenuList('footer_right') != '')
							<h4 class="widget-title">{{ __('Company') }}</h4>
							<ul class="widget-list">
								@php echo FooterMenuList('footer_right'); @endphp
							</ul>
							@endif
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
						<div class="footer-widget mb25">
							<h4 class="widget-title">{{ __('Subscribe our newsletter') }}</h4>
							<p>{{ $gtext['subscribe_popup_desc'] }}</p>
							<div class="newsletter-form">
								<input name="subscribe_email" id="subscribe_email" type="email" placeholder="{{ __('Enter your email address') }}" />
								<a class="btn theme-btn mt10 full subscribe_btn sub_btn" href="javascript:void(0);">{{ __('Submit') }}</a>
								<div class="subscribe_msg mt5"></div>
							</div>
						</div>
					</div>
					@else
					<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
						@if($gtext['is_publish_contact'] == 1)
						<div class="footer-widget mb10">
							<h4 class="widget-title">{{ __('Contact Us') }}</h4>
							<ul class="widget-contact">
								@if($gtext['address_footer'] != '')
								<li><strong>{{ __('Address') }}:</strong> {{ $gtext['address_footer'] }}</li>
								@endif
								
								@if($gtext['email_footer'] != '')
								<li><strong>{{ __('Email') }}:</strong> {{ $gtext['email_footer'] }}</li>
								@endif
								
								@if($gtext['phone_footer'] != '')
								<li><strong>{{ __('Phone') }}:</strong> {{ $gtext['phone_footer'] }}</li>
								@endif
							</ul>
						</div>
						@endif
						<div class="social-media mb25">
							@php echo SocialMediaList(); @endphp
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
						<div class="footer-widget mb25">
							@if(FooterMenuList('footer_left') != '')
							<h4 class="widget-title">{{ __('Quick links') }}</h4>
							<ul class="widget-list">
								@php echo FooterMenuList('footer_left'); @endphp
							</ul>
							@endif
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
						<div class="footer-widget mb25">
							@if(FooterMenuList('footer_right') != '')
							<h4 class="widget-title">{{ __('Company') }}</h4>
							<ul class="widget-list">
								@php echo FooterMenuList('footer_right'); @endphp
							</ul>
							@endif
						</div>
					</div>
					@endif
				</div>
			</div>
		</div>
		<div class="footer-bottom footer2">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						@if($gtext['is_publish_copyright'] == 1)
						<div class="copy-right">
							@php echo $gtext['copyright']; @endphp
						</div>
						@endif
					</div>
					<div class="col-lg-6">
						@if($gtext['is_publish_payment'] == 1)
						<div class="payment-method">
							@if($gtext['payment_gateway_icon'] != '')
							<img src="{{ asset('media/'.$gtext['payment_gateway_icon']) }}" alt="" />
							@endif
						</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /Footer Section -->
	
	<!-- /Shopping Cart -->
	<div class="cart-sidebar">
		<a href="javascript:void(0);" class="sidebar-close sidebar_show_hide">
			<i class="bi bi-x-lg"></i>
		</a>
		<div class="cart-head">
		{{ __('Shopping Cart') }}
		</div> 
		<div class="cart-body" id="tp_cart_data"></div>
		<div class="cart-footer">
			<div class="carttotals">
				<span class="title">{{ __('Subtotal') }}:</span>
				<span class="price sub_total"></span>
			</div>
			<div class="carttotals">
				<span class="title">{{ __('Tax') }}:</span>
				<span class="price tax"></span>
			</div>
			<div class="carttotals">
				<span class="title">{{ __('Total') }}:</span>
				<span class="price tp_total"></span>
			</div>
			<a href="{{ route('frontend.cart') }}" class="btn black-btn checkout mt10">{{ __('View Cart') }}</a>
			<a href="{{ route('frontend.checkout') }}" class="btn theme-btn checkout">{{ __('Checkout') }}</a>
		</div>
	</div>
	<!-- /Shopping Cart -->
	
	<!-- /Whatsapp -->
	@if($gtext['is_whatsapp_publish'] == 1)
	<div class="whatsapp-{{ $gtext['position'] }}">
		<a href="https://wa.me/{{ $gtext['whatsapp_id'] }}/?text={{ str_url($gtext['whatsapp_text']) }}" target="_blank" class="whatsapp-btn">
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48" style=" fill:#000000;"><path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path></svg>
		</a>
	</div>	
	@endif
	<!-- /Whatsapp -->
	