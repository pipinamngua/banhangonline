<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
	<title>Shoppe</title>
	<script src="{{ asset('js/app.js') }}"></script>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
	<link href="{{ asset('css/slider.css') }}" rel="stylesheet" type="text/css" media="all"/>
	<script type="text/javascript" src="{{ asset('js/jquery-1.7.2.min.js') }}"></script> 
	<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/startstop-slider.js') }}""></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="{{ asset('js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
	<link href="{{ asset('css/easy-responsive-tabs.css') }}" rel="stylesheet" type="text/css" media="all"/>
	<link rel="stylesheet" href="{{ asset('css/global.css') }}">
	<script src="{{ asset('js/slides.min.jquery.js') }}"></script>
	<link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
	<!-- Cart-->
	<link rel="stylesheet" href="{{ asset('Cart/css/style1.css') }}" type="text/css" media="all" />
	<script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function () {
			var listItems = [
			<?php 
			foreach ($product as $key) {
				echo "'".$key->name."',";
			}
			?>
			];
			$("#search").autocomplete({
				source: function(request, response) {
					var results = $.ui.autocomplete.filter(listItems, request.term);

					response(results.slice(0, 10));
				}
			});
		});
	</script>
	@yield('head')
</head>
<body>
	<div class="wrap">
		<div class="header">
			<div class="headertop_desc">
				<div class="call">
					<p><span>Need help?</span> call us <span class="number">1-22-3456789</span></span></p>
				</div>
				<div class="account_desc">
					<ul>
						@guest
						<li><a href="{{ route('login') }}">Login</a></li>
						<li><a href="{{ route('register') }}">Register</a></li>
						@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>

							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="{{ route('logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
									Logout
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
					@endguest
					<li><a href="#">Delivery</a></li>
					<li><a href="#">Checkout</a></li>
					<li><a href="{{ url('profile') }}">My Account</a></li>
					<li><div class="button"><a href="{{ url('cart') }}" style="color:white" >Cart</a></div></li>
					<li><div class="button"><a href="{{ url('send-message') }}" style="color:white" >Tư vấn trực tuyến</a></div></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="header_top">
			<div class="logo">
				<a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="" /></a>
			</div>
			<div class="cart">
				<p>Welcome to our Online Store! 
					<span>Cart:</span>
					<div id="dd" class="wrapper-dropdown-2"> 
						@if(count(Cart::content())>0)
						<ul class="dropdown">
							<li>You have {{ count(Cart::content()) }} items in your Shopping Cart</li>
						</ul>
						@else
						<ul class="dropdown">
							<li>you have no items in your Shopping cart</li>
						</ul>
						@endif
					</div>
				</p>
			</div>
			<script type="text/javascript">
				function DropDown(el) {
					this.dd = el;
					this.initEvents();
				}
				DropDown.prototype = {
					initEvents : function() {
						var obj = this;

						obj.dd.on('click', function(event){
							$(this).toggleClass('active');
							event.stopPropagation();
						});	
					}
				}

				$(function() {

					var dd = new DropDown( $('#dd') );

					$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

				});

			</script>
			<div class="clear"></div>
		</div>
		<div class="header_bottom">
			<div class="menu">
				<ul>
					<li><a href="{{ url('/') }}">Home</a></li>
					<li><a href="{{ url('about-us') }}">About</a></li>
					<li><a href="{{ url('delivery') }}">Delivery</a></li>
					<li><a href="{{ url('news') }}">News</a></li>
					<li><a href="{{ url('contact-us') }}">Contact</a></li>
					<div class="clear"></div>
				</ul>
			</div>
			<div class="search_box">
				<form method ="GET" action="{{ url('product') }}">
					<input type="text" id="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search'; }" name="keyword">
					<input type="submit" value="">
				</form>

			</div>
			<div class="clear"></div>
		</div>
		@section('content')  
		<div class="header_slide">
			<div class="header_bottom_left">				
				<div class="categories">
					<ul>
						<h3>Loại sản phẩm</h3>
						@foreach($category as $item)
						<li><a href="{{ url('page-loaisp/'.$item->id) }}">{{ $item->name }}</a></li>
						@endforeach
					</ul>
				</div>					
			</div>
			@yield('slide')
			@yield('page-product')
			<div class="clear"></div>
		</div>
	</div>
	@yield('main')
</div>
@show
<div class="footer">
	<div class="wrap">	
		<div class="section group">
			<div class="col_1_of_4 span_1_of_4">
				<h4>Information</h4>
				<ul>
					<li><a href="about.html">About Us</a></li>
					<li><a href="contact.html">Customer Service</a></li>
					<li><a href="#">Advanced Search</a></li>
					<li><a href="delivery.html">Orders and Returns</a></li>
					<li><a href="contact.html">Contact Us</a></li>
				</ul>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<h4>Why buy from us</h4>
				<ul>
					<li><a href="about.html">About Us</a></li>
					<li><a href="contact.html">Customer Service</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="contact.html">Site Map</a></li>
					<li><a href="#">Search Terms</a></li>
				</ul>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<h4>My account</h4>
				<ul>
					<li><a href="contact.html">Sign In</a></li>
					<li><a href="index.html">View Cart</a></li>
					<li><a href="#">My Wishlist</a></li>
					<li><a href="#">Track My Order</a></li>
					<li><a href="contact.html">Help</a></li>
				</ul>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<h4>Contact</h4>
				<ul>
					<li><span>+91-123-456789</span></li>
					<li><span>+00-123-000000</span></li>
				</ul>
				<div class="social-icons">
					<h4>Follow Us</h4>
					<ul>
						<li><a href="#" target="_blank"><img src="{{ asset('images/facebook.png') }}" alt="" /></a></li>
						<li><a href="#" target="_blank"><img src="{{ asset('images/twitter.png') }}" alt="" /></a></li>
						<li><a href="#" target="_blank"><img src="{{ asset('images/skype.png') }}" alt="" /> </a></li>
						<li><a href="#" target="_blank"> <img src="{{ asset('images/dribbble.png') }}" alt="" /></a></li>
						<li><a href="#" target="_blank"> <img src="{{ asset('images/linkedin.png') }}" alt="" /></a></li>
						<div class="clear"></div>
					</ul>
				</div>
			</div>
		</div>			
	</div>
	<div class="copy_right">
		<p>Company Name © All rights Reseverd | Design by  <a href="http://w3layouts.com">W3Layouts</a> </p>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {			
		$().UItoTop({ easingType: 'easeOutQuart' });

	});
</script>
<a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

