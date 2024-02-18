<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Bucklin : Blog HTML Template" />
	<meta property="og:title" content="Bucklin : Blog HTML Template" />
	<meta property="og:description" content="Bucklin : Blog HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="{{ asset('/frontend/images/favicon.ico') }}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>Bucklin : Blog HTML Template</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/plugins.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/templete.css') }}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/skin/skin-1.css') }}">
	
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-area"></div>
	<!-- Content -->
    <div class="page-content bg-white">
        <div class="banner-top-info">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-8">
						<div class="location">
							<p><i class="fa fa-map-marker"></i>Miami, Florida, USA</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-4 align-self-center">
						<ul class="social-link list-inline m-b0">
							<li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
							<li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Slider Banner -->
        <div class="banner-slide owl-carousel owl-dots">
			<div class="item">
				<div class="slider-bx">
					<div class="dlab-post-media overlay-black-light">
						<img src="{{ asset('/frontend/images/main-slider/1.jpg') }}" alt="">
					</div>
					<div class="slider-info text-white">
						<h6>Welcome to</h6>
						<h2>My Blog</h2>
					</div>
				</div>
			</div>			
			<div class="item">
				<div class="slider-bx">
					<div class="dlab-post-media overlay-black-light">
						<img src="{{ asset('/frontend/images/main-slider/2.PNG') }}" alt="">
					</div>
					<div class="slider-info text-white">
						<h6>Welcome to</h6>
						<h2>My Blog</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Section -->
		<header class="site-header mo-left header-full header header-transparent header-bottom">
			<!-- Main Header -->
			<div class="sticky-header main-bar-wraper navbar-expand-lg">
				<div class="main-bar clearfix ">
					<div class="container-fluid">
						<div class="header-content-bx">
							<!-- website logo -->
							<div class="logo-header">
								<a href="{{ url('/') }}"><img src="{{ asset('/frontend/images/logo.png') }}" alt=""/></a>
							</div>
							<!-- Extra Nav -->
							<div class="extra-nav">
								<div class="extra-cell">
									<ul>
										<li class="search-btn">
											<a href="javascript:;" class="btn-link menu-icon">
												<div class="menu-icon-in">
													<span></span>
													<span></span>
													<span></span>
													<span></span>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- Main Nav -->
							<div class="header-nav navbar-collapse collapse justify-content-center" id="navbarNavDropdown">
								<ul class="nav navbar-nav">	
									<li class="active">
										<a href="javascript:void(0);">Home </a>
										<ul class="sub-menu">
											<li><a href="{{ url('/') }}">Home 01</a></li>
											<li><a href="index-2.html">Home 02</a></li>
											<li><a href="index-3.html">Home 03</a></li>
											<li><a href="index-4.html">Home 04</a></li>
											<li><a href="index-5.html">Home 05</a></li>
										</ul>	
									</li>
									<li>
										<a href="javascript:void(0);">Featured </a>
										<ul class="sub-menu">
											<li><a href="post-standart.html">Post Standart</a></li>
											<li><a href="post-left-sidebar.html">Post Left Sidebar</a></li>
											<li><a href="post-full-width.html">Post Full Width</a></li>
											<li><a href="post-slide-show.html">Post Slide Show</a></li>
											<li><a href="post-header-image.html">Post Header Image</a></li>
											<li><a href="post-gallery.html">Post Gallery</a></li>
											<li><a href="post-audio.html">Post Audio</a></li>
											<li><a href="post-video.html">Post Video</a></li>
											<li><a href="post-side-image.html">Post Side Image</a></li>
											<li><a href="post-without-image.html">Post Without Image</a></li>
											<li><a href="post-open-gutenberg.html">Post Open Gutenberg</a></li>
										</ul>
									</li>
									<li>
										<a href="javascript:void(0);">Pages </a>
										<ul class="sub-menu">
											<li><a href="about-us.html">About Us</a></li>
											<li><a href="error-404.html">Error 404</a></li>
											<li><a href="shop-product.html">Shop Product</a></li>
											<li><a href="shopping-cart.html">Shopping Cart</a></li>
											<li><a href="checkout.html">Checkout</a></li>
											<li><a href="product-details.html">Product Details</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Main Header END -->
			<!-- Header Left -->
			<div class="header-nav navbar-collapse collapse full-sidenav content-scroll">
				<div class="location">
					<p><i class="fa fa-map-marker"></i>Miami, Florida, USA</p>
				</div>
				<ul class="nav navbar-nav">	
					<li class="active">
						<a href="javascript:void(0);">Home </a>
						<ul class="sub-menu">
							<li><a href="{{ url('/') }}">Home 01</a></li>
							<li><a href="index-2.html">Home 02</a></li>
							<li><a href="index-3.html">Home 03</a></li>
							<li><a href="index-4.html">Home 04</a></li>
							<li><a href="index-5.html">Home 05</a></li>
						</ul>	
					</li>
					<li>
						<a href="javascript:void(0);">Featured </a>
						<ul class="sub-menu">
							<li><a href="post-standart.html">Post Standart</a></li>
							<li><a href="post-left-sidebar.html">Post Left Sidebar</a></li>
							<li><a href="post-full-width.html">Post Full Width</a></li>
							<li><a href="post-slide-show.html">Post Slide Show</a></li>
							<li><a href="post-header-image.html">Post Header Image</a></li>
							<li><a href="post-gallery.html">Post Gallery</a></li>
							<li><a href="post-audio.html">Post Audio</a></li>
							<li><a href="post-video.html">Post Video</a></li>
							<li><a href="post-side-image.html">Post Side Image</a></li>
							<li><a href="post-without-image.html">Post Without Image</a></li>
							<li><a href="post-open-gutenberg.html">Post Open Gutenberg</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);">Pages </a>
						<ul class="sub-menu">
							<li><a href="about-us.html">About Us</a></li>
							<li><a href="error-404.html">Error 404</a></li>
							<li><a href="shop-product.html">Shop Product</a></li>
							<li><a href="shopping-cart.html">Shopping Cart</a></li>
							<li><a href="checkout.html">Checkout</a></li>
							<li><a href="product-details.html">Product Details</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
				<div class="logo-header">
					<a href="{{ url('/') }}"><img src="{{ asset('/frontend/images/logo.png') }}" alt=""/></a>
				</div>
			</div>
			<div class="menu-close">
				<i class="la la-close"></i>
			</div>
			<!-- Header Left End -->
		</header>
		<!-- header END -->
		<!-- Trending Posts -->
		<div class="section-full bg-white content-inner-1">
			<div class="container-fluid">
				<div class="section-head text-center">
					<h4 class="title text-uppercase">Trending Posts</h4>
					<div class="title-separate"></div>
				</div>
				<div class="trending-post-bx owl-carousel owl-btn-center-lr">

					@foreach($trending_posts as $trending_post)
					<div class="item">
						<div class="trending-post text-center">
							<div class="trending-media">
								<img src="{{ asset('/uploads/post') }}/{{ $trending_post->image }}" alt=""/>
							</div>
							<div class="trending-info">
								<h3 class="trending-title"><a href="{{ route('single', $trending_post->id) }}">{{ $trending_post->title }}</a></h3>
								<div class="post-date">
									{{ $trending_post->created_at->diffForHumans() }}
								</div>
							</div>
						</div>
					</div>
					@endforeach
					
				</div>
			</div>
		</div>
		<!-- Trending Posts End -->
		<!-- Blog Post -->
		<div class="section-full bg-white content-inner-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-7 col-sm-12 col-12">
						<div class="row">

							@foreach($mockup_posts as $mockup_post)
							<div class="col-lg-12 m-b30">
								<div class="blog-card blog-grid blog-full bg-dark">
									<div class="blog-card-media">
										<img src="{{ asset('/uploads/post') }}/{{ $mockup_post->image }}" alt=""/>
									</div>
									<div class="blog-card-info text-center">
										<h2 class="title"><a href="{{ route('single', $mockup_post->id) }}">{{ $mockup_post->title }}</a></h2>
										<div class="post-date">
											{{ $mockup_post->created_at->diffForHumans() }}
										</div>
										<ul class="add-info">
											<li><a href="javascript:void(0);"><i class="la la-share-alt-square"></i><span>9</span></a></li>
											<li><a href="{{ route('single', $mockup_post->id) }}" class="btn outline radius-no white">Read More</a></li>
											<li><a href="javascript:void(0);"><i class="la la-comment"></i><span>3</span></a></li>
										</ul>
									</div>
								</div>
							</div>
							@endforeach

							@foreach($graphic_posts as $graphic_post)
							<div class="col-lg-6 m-b30">
								<div class="blog-card blog-grid bg-dark">
									<div class="blog-card-media">
										<img src="{{ asset('/uploads/post') }}/{{ $graphic_post->image }}" alt=""/>
									</div>
									<div class="blog-card-info text-center">
										<h2 class="title"><a href="{{ route('single', $graphic_post->id) }}">{{ $graphic_post->title }}</a></h2>
										<div class="post-date">
											{{ $graphic_post->created_at->diffForHumans() }}
										</div>
										<ul class="add-info">
											<li><a href="javascript:void(0);"><i class="la la-share-alt-square"></i><span>9</span></a></li>
											<li><a href="{{ route('single', $graphic_post->id) }}" class="btn outline radius-no white">Read More</a></li>
											<li><a href="javascript:void(0);"><i class="la la-comment"></i><span>3</span></a></li>
										</ul>
									</div>
								</div>
							</div>
							@endforeach

						</div>
					</div>
					<div class="col-lg-4 col-md-5 col-sm-12 col-12">
						<div class="side-bar p-l20 m-b30 sticky-top">
							<div class="widget widget-map">
								<h6 class="widget-title">Current Location</h6>
								<div class="map-bx text-center">
									<img src="{{ asset('/frontend/images/map.png') }}" alt="">
									<p class="map-location text-primary">Located at:<span> Miami</span></p>
								</div>	
							</div>
							<div class="widget widget-about">
								<img class="img-cover" src="/frontend/images/about/img1.png" alt="">
								<div class="about-info text-center bg-dark">
									<h5>Meet Lida...</h5>
									<p class="m-b0">Sed bibendum massa id luctus cras et lorem feugiat.</p>
								</div>
							</div>
							<div class="widget recent-posts-entry">
								<h5 class="widget-title">Popular Posts</h5>
								<div class="widget-post-bx">

									@foreach($popular_posts as $popular_post)
									<div class="widget-post clearfix">
										<div class="dlab-post-media">
											<img src="{{ asset('/uploads/post') }}/{{ $popular_post->image }}" alt="" width="200" height="143">
										</div>
										<div class="dlab-post-info">
											<div class="dlab-post-header">
												<h6 class="post-title"><a href="{{ route('single', $popular_post->id) }}">{{ $popular_post->title }}</a></h6>
												<div class="post-date">
													{{ $popular_post->created_at->diffForHumans() }}
												</div>
											</div>
										</div>
									</div>
									@endforeach

								</div>
							</div>
							<div class="widget widget-instagram">
								<h5 class="widget-title">Instagram</h5>
								<ul class="instagram-bx clearfix">
									<li class="instagram-icon"><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
									<li><a href="javascript:void(0);"><img class="img-cover" src="/frontend/images/instagram-post/pic1.jpg" alt=""></a></li>
									<li><a href="javascript:void(0);"><img class="img-cover" src="/frontend/images/instagram-post/pic2.jpg" alt=""></a></li>
									<li><a href="javascript:void(0);"><img class="img-cover" src="/frontend/images/instagram-post/pic3.jpg" alt=""></a></li>
									<li><a href="javascript:void(0);"><img class="img-cover" src="/frontend/images/instagram-post/pic4.jpg" alt=""></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Blog Post End -->
		<!-- Blog Slider -->
		<div class="section-full blog-full-bx" style="background-image: url(images/background/bg1.jpg); background-size: cover;">
			<div class="container">
				<div class="blog-slider-full bg-dark owl-carousel owl-btn-center-lr">

					@foreach($slider_posts as $slider_post)
					<div class="item">
						<div class="blog-slider-box">
							<div class="post-date">
								{{ $slider_post->created_at->diffForHumans() }}
							</div>
							<div class="post-thumb">
								<img src="{{ asset('/uploads/post') }}/{{ $slider_post->image }}" alt="">
							</div>
							<h2 class="title"><a href="{{ route('single', $slider_post->id) }}">{{ $slider_post->title }}</a></h2>
						</div>
					</div>
					@endforeach
					
				</div>
			</div>
		</div>
		<!-- Blog Slider End -->
		<!-- Blog Post -->
		<div class="section-full bg-white content-inner-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-7 col-sm-12 col-12">
						<div class="row loadmore-content">
							@foreach($latest_posts as $latest_post)
							<div class="col-lg-6 m-b30">
								<div class="blog-card blog-grid bg-dark">
									<div class="blog-card-media">
										<img src="{{ asset('/uploads/post') }}/{{ $latest_post->image }}" alt=""/>
									</div>
									<div class="blog-card-info text-center">
										<h2 class="title"><a href="{{ route('single', $latest_post->id) }}">{{ $latest_post->title }}</a></h2>
										<div class="post-date">
											{{ $latest_post->created_at->diffForHumans() }}
										</div>
										<ul class="add-info">
											<li><a href="javascript:void(0);"><i class="la la-share-alt-square"></i><span>9</span></a></li>
											<li><a href="{{ route('single', $latest_post->id) }}" class="btn outline radius-no white">Read More</a></li>
											<li><a href="javascript:void(0);"><i class="la la-comment"></i><span>3</span></a></li>
										</ul>
									</div>
								</div>
							</div>
							@endforeach

						</div>
					</div>
					<div class="col-lg-4 col-md-5 col-sm-12 col-12">
						<div class="side-bar p-l20 m-b30 sticky-top">
							<div class="widget widget_categories">
								<h6 class="widget-title">Category</h6>
								<ul>
									<li><a href="javascript:void(0);">Beauty </a> 15 </li>
									<li><a href="javascript:void(0);">Travel </a> 17 </li>
									<li><a href="javascript:void(0);">Lifestyle </a> 18 </li>
									<li><a href="javascript:void(0);">Fashion </a> 9 </li>
								</ul>
							</div>
							<div class="widget widget_mailbox">
								<div class="mailbox" style="background-image: url(images/background/img3.jpg); background-size: cover; background-position: center;">
									<a href="javascript:void(0);" class="btn radius-no btn-block primary">bucklinblog.com</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- About Us End -->
		<!-- Blog Card Carousel -->
		<div class="blog-card-carousel owl-carousel mfp-gallery  owl-none">
			<div class="item">
				<a href="{{ asset('/frontend/images/blog/card/pic1.jpg') }}" class="mfp-link dlab-img-effect fade-out" title="Title Come Here">
					<img src="{{ asset('/frontend/images/blog/card/pic1.jpg') }}" alt="">
				</a>
			</div>
			<div class="item">
				<a href="{{ asset('/frontend/images/blog/card/pic2.jpg') }}" class="mfp-link dlab-img-effect fade-out" title="Title Come Here">
					<img src="{{ asset('/frontend/images/blog/card/pic2.jpg') }}" alt="">
				</a>
			</div>
			<div class="item">
				<a href="{{ asset('/frontend/images/blog/card/pic3.jpg') }}" class="mfp-link dlab-img-effect fade-out" title="Title Come Here">
					<img src="{{ asset('/frontend/images/blog/card/pic3.jpg') }}" alt="">
				</a>
			</div>
			<div class="item">
				<a href="{{ asset('/frontend/images/blog/card/pic4.jpg') }}" class="mfp-link dlab-img-effect fade-out" title="Title Come Here">
					<img src="{{ asset('/frontend/images/blog/card/pic4.jpg') }}" alt="">
				</a>
			</div>
			<div class="item">
				<a href="{{ asset('/frontend/images/blog/card/pic5.jpg') }}" class="mfp-link dlab-img-effect fade-out" title="Title Come Here">
					<img src="{{ asset('/frontend/images/blog/card/pic5.jpg') }}" alt="">
				</a>
			</div>
			<div class="item">
				<a href="{{ asset('/frontend/images/blog/card/pic6.jpg') }}" class="mfp-link dlab-img-effect fade-out" title="Title Come Here">
					<img src="{{ asset('/frontend/images/blog/card/pic6.jpg') }}" alt="">
				</a>
			</div>
		</div>
		<!-- Blog Card Carousel End -->
		<!-- Newslatter -->
		<div class="newslatter-bx">
			<div class="container">
				<form action="script/mailchamp.php" method="post" class="row m-lr0 align-items-center dezPlaceAni dzSubscribe">
					<div class="col-xl-6 col-lg-6 col-md-12">
						<div class="title-bx">
							<h2 class="m-b0">Join Our Newslatter!</h2>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 contact-form-bx">
						<div class="form-group">
							<div class="input-group">
								<label>Your Email Address</label>
								<input name="dzEmail" required="required" type="email" class="form-control" placeholder="" >
								<button name="submit" value="Submit" type="submit" class="btn-link">Subscribe</button>
							</div>
							<div class="dzSubscribeMsg"></div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- Newslatter End -->
		<!-- Social Link Box -->
		<div class="section-full social-link-bx">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-4 col-sm-4 col-6">
						<a href="javascript:void(0);" class="social-link">
							<i class="fa fa-twitter"></i>
							<span>twitter</span>
						</a>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-4 col-6">
						<a href="javascript:void(0);" class="social-link">
							<i class="fa fa-facebook"></i>
							<span>Facebook</span>
						</a>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-4 col-6">
						<a href="javascript:void(0);" class="social-link">
							<i class="fa fa-instagram"></i>
							<span>Instagram</span>
						</a>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-4 col-6">
						<a href="javascript:void(0);" class="social-link">
							<i class="fa fa-behance"></i>
							<span>Behance</span>
						</a>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-4 col-6">
						<a href="javascript:void(0);" class="social-link">
							<i class="fa fa-youtube-play"></i>
							<span>Youtube</span>
						</a>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-4 col-6">
						<a href="javascript:void(0);" class="social-link">
							<i class="fa fa-pinterest-p"></i>
							<span>Pinterest</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Social Link Box End -->
    </div>
    <!-- Content END-->
	<!-- Footer -->
    <footer class="site-footer">
        <div class="footer-top">
            <div class="container">
				<div class="row">
					<div class="col-lg-4">
						<ul class="footer-link m-b0">
							<li><a href="{{ url('/') }}">Home</a></li>
							<li><a href="about-us.html">About</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>						
					</div>
					<div class="col-lg-4">
						<div class="footer-logo">
							<a href="{{ url('/') }}"><img src="{{ asset('/frontend/images/logo.png') }}" alt=""/></a>
						</div>
					</div>
					<div class="col-lg-4">
						<p class="copyright">Copyright © 2020 DexignZone.</p>
					</div>
				</div>
			</div>
        </div>
    </footer>
    <!-- Footer END-->
    <button class="scroltop fa fa-chevron-up" ></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{ asset('/frontend/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script src="{{ asset('/frontend/plugins/bootstrap/js/popper.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('/frontend/plugins/bootstrap/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('/frontend/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('/frontend/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('/frontend/plugins/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{ asset('/frontend/plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('/frontend/plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script src="{{ asset('/frontend/plugins/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
<script src="{{ asset('/frontend/plugins/masonry/masonry-3.1.4.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('/frontend/plugins/masonry/masonry.filter.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('/frontend/plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL SLIDER -->
<script src="{{ asset('/frontend/plugins/scroll/scrollbar.min.js') }}"></script><!-- Scroll Bar -->
<script src="{{ asset('/frontend/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{ asset('/frontend/js/dz.carousel.js') }}"></script><!-- SORTCODE FUCTIONS -->
<script src="{{ asset('/frontend/js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->
</body>
</html>
