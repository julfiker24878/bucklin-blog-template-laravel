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
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/frontend/images/favicon.png') }}" />
	
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
	<!-- header -->
	<header class="site-header mo-left header-full header bg-dark">
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
						<div class="header-nav navbar-collapse collapse justify-content-center nav-dark" id="navbarNavDropdown">
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
    <!-- Content -->
    <div class="page-content bg-white">
		<!-- About Us -->
		<div class="section-full content-inner bg-white">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-7 col-sm-12 col-12">
						<div class="blog-post blog-single blog-post-style-2 sidebar">
							<div class="dlab-post-info">
								<div class="dlab-post-meta text-center">
									<ul>
										<li class="post-tag"><a href="javascript:void(0);">{{ $post->rel_to_category->name }}</a></li>
										<li class="post-date">
											{{ $post->created_at->diffForHumans() }}
										</li>
									</ul>
								</div>
								<div class="dlab-post-title text-center">
									<h2 class="post-title">{{ $post->title }}</h2>
								</div>
								<div class="dlab-post-text text">
									<div class="wp-block-image alignwide">
										<figure class="aligncenter">
											<img src="{{ asset('/uploads/post') }}/{{ $post->image }}" alt="">
										</figure>
									</div>
									<p>{{ $post->desc }}</p>
									<p>Set pharetra neque consequat a. Mauris lobortis nunc amassa tempor interdum. Proin ante neque, aliquam the sitmet maximus vitae, malesuada ac sem. Donec vestibulum suscipit tortor vitae auctor. Fusce ac viverra massailla tellus.</p>
									<p>Donec lacinia, nunc vitae eleifend varius, libero sem sollicitudin mauris, nec consectetur est eros a leo. Maecenas ullamcorper dignissim ipsum eget sollicitudin. Fusce suscipit nulla atex eleifend euismod. Duis nec aliquami. Praesent feugiat congue sem a posuere. Aenean pretium elementum est ac vestibulum. Aliquam hendrerit maximus vitae. </p>
									<blockquote class="wp-block-quote style1">
										<div class="quote-author-img">
											<img src="{{ asset('/frontend/images/testimonials/pic2.jpg') }}" alt="">
										</div>
										<div class="quote-info">
											<p>Ut cursus, leo id condimentum varius, purus urna lacinia augue at maximus lorem felis sit amet neque.</p>
											<h6 class="block-quote-author">Peter Thomas Roth</h6>
										</div>
									</blockquote>
									<p>Mauris nec purus rutrum lorem ultricies dignissim. Suspendisse vestibulum eu lorem non fermentum. Maecenas eu pellentesqu dui. Vestibulu dui neque, egestas at suscipit et, convallis sed eros. Etiam hendrerit tempor asina viverra ac.</p>
									<div class="wp-block-image alignwide">
										<figure class="alignright">
											<img src="{{ asset('/frontend/images/gallery/pic1.jpg') }}" alt="">
										</figure>
									</div>
									<p>Fusce ut sagittis mauris. Cras fermentum augue vel blandit. Aliquam ultrices dui lorem aliquamae efficitur turpis vehicula. Mauris suscipit arcu quis pelentesque semper. Mauris sagit tis urna ac nisl mattis, vitae volutpat augue volutpat.</p>
									<p>Vestibulum condimentum nulla sapien placerat venenatis. Sed utih erat. Maecenas sed semper quam, quis lacinia felis.</p>
									<p>Praesent id egestas justo. Mauris porta massa idnunc conga blandit libero varius. Nunc acgue egestas, viverra urnavitae dictum elit. Donec eleifend mattis arcu nec ultrices.</p>
									<p>Duis sit amet venenatis leo. Morbi diam diam, consequat a ligula ac, conseq semper lacus. Lorem ipsum dolor sit amet.</p>
									<p>Fusce ultricies lorem et eros rhoncus aliquam. Curabitur nec interdum magna. Nunc sodales sodales lorem quis  convallis. Aliquam eleifend consequat est laoreet bibendum. Proin et nibh augue. Fusce condimentum vehicula condi mentum. Nulla rutrum justo pellentesque nunc porta aliquam. Mauris sodales mauris sed mi elementum faucibus.</p>
									<p>Aliquam tincidunt sem nec augue porta euismod. Nulla facilisi. Nulla ultricies ipsum massa, quis molestie magna acibus sed. Mauris sed risus facilisis, ullamcorper massa eu, elementum ligula. Vivamus sit amet risus i ornare finibus vitae ac nulla. Aenean eget ex ut libero congue rutrum a et diam. Mauris eu metus et nibh pulvinar tempus idefficitur dolor. Maecenas erat leo, ullamcorper vel turpis eget, auctor mollis nunc. Sed a volutpat quam.</p>
									<p>Duis et tortor semper arcu tristique sollicitudin non tincidunt sapien. Praesent nulla velit, aliquam eget purus aconcus tincidunt turpis. Pellentesque rhoncus, lorem vel pretium semper, justo ligula blandit sapienit ipsum non quam.</p>
									<div class="row post-footer m-lr0">
										<div class="col-lg-4 p-lr0 m-b30">												 
											<span class="m-r5">by</span> <a href="javascript:void(0);" class="text-uppercase">Carey Ferguson</a> 
										</div>
										<div class="col-lg-4 p-lr0 m-b30 text-center">
											<ul class="add-info">
												<li><a href="javascript:void(0);"><i class="la la-share-alt-square"></i><span>9</span></a></li>
												<li><a href="javascript:void(0);"><i class="la la-comment"></i><span>3</span></a></li>
											</ul>
										</div>
										<div class="col-lg-4 p-lr0 m-b30">
											<div class="text-right">
												<a href="javascript:void(0);" class="text-uppercase">Write A Comment</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="min-container">
							<div class="row m-b60">
								<div class="col-lg-3">
									<div class="sticky-top">
										<h6 class="title-style1 text-uppercase">About Author</h6>
									</div>
								</div>
								<div class="col-lg-9">
									<div class="author-box blog-user bg-dark">
										<div class="author-profile-info">
											<div class="author-profile-pic">
												<img src="{{ asset('/frontend/images/testimonials/pic1.jpg') }}" alt="">
											</div>
											<div class="author-profile-content">
												<h6>Carey Ferguson</h6>
												<ul class="list-inline m-b0">
													<li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-instagram"></i></a></li>
													<li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-twitter"></i></a></li>
													<li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-facebook"></i></a></li>
												</ul>
												<p class="m-b0">Aliquam viverra, ligula at mattis pharetra, risus nibh dignissim leo in luctus odio nulla in nunc. Fusce a purus faucibus suscipit.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row m-b30">
								<div class="col-lg-3">
									<div class="sticky-top">
										<h6 class="title-style1 text-uppercase">Top Posts</h6>
									</div>
								</div>
								<div class="col-lg-9">
									<div class="row">
										<div class="col-lg-6">
											<div class="category-box overlay m-b30">
												<div class="category-media">
													<img src="{{ asset('/frontend/images/category/pic1.jpg') }}" alt="">
												</div>
												<div class="category-info bg-dark p-a20 text-center">
													<h6 class="title m-b0"><a href="post-video.html">Crafts for Kids</a></h6>
												</div>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="category-box overlay m-b30">
												<div class="category-media">
													<img src="{{ asset('/frontend/images/category/pic2.jpg') }}" alt="">
												</div>
												<div class="category-info bg-dark p-a20 text-center">
													<h6 class="title m-b0"><a href="post-video.html">February Things</a></h6>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>						
							<div class="clear m-b30" id="comment-list">
								<div class="comments-area" id="comments">
									<div class="row m-b30">
										<div class="col-lg-3">
											<div class="sticky-top">
												<h6 class="title-style1 text-uppercase">Reviews</h6>
											</div>
										</div>
										<div class="col-lg-9">
											<!-- comment list END -->
											<ol class="comment-list">
												<li class="comment">
													<div class="comment-body">
														<div class="comment-content">
															<p>Aliquam viverra, ligula at mattis pharetra, risus nibh dignissim le in luctus odio nulla in nunc. Fusce a purus sed mauris faucibus suscipit.</p>
														</div>
														<div class="comment-author vcard"> 
															<img class="avatar photo" src="{{ asset('/frontend/images/testimonials/pic1.jpg') }}" alt=""> 
															<cite class="fn">Kelly Milton</cite> <span class="says">says:</span> 
														</div>
														<div class="comment-meta"> 
															<a href="javascript:void(0);">27 <span>02</span>2020</a> 
														</div>
													</div>
												</li>
												<li class="comment">
													<div class="comment-body">
														<div class="comment-content">
															<p>Aliquam viverra, ligula at mattis pharetra, risus nibh dignissim le in luctus odio nulla in nunc. Fusce a purus sed mauris faucibus suscipit.</p>
														</div>
														<div class="comment-author vcard"> 
															<img class="avatar photo" src="{{ asset('/frontend/images/testimonials/pic1.jpg') }}" alt=""> 
															<cite class="fn">Kelly Milton</cite> <span class="says">says:</span> 
														</div>
														<div class="comment-meta"> 
															<a href="javascript:void(0);">27 <span>02</span>2020</a> 
														</div>
													</div>
												</li>
												<li class="comment">
													<div class="comment-body">
														<div class="comment-content">
															<p>Aliquam viverra, ligula at mattis pharetra, risus nibh dignissim le in luctus odio nulla in nunc. Fusce a purus sed mauris faucibus suscipit.</p>
														</div>
														<div class="comment-author vcard"> 
															<img class="avatar photo" src="{{ asset('/frontend/images/testimonials/pic1.jpg') }}" alt=""> 
															<cite class="fn">Kelly Milton</cite> <span class="says">says:</span> 
														</div>
														<div class="comment-meta"> 
															<a href="javascript:void(0);">27 <span>02</span>2020</a> 
														</div>
													</div>
												</li>
											</ol>
											<!-- comment list END -->
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3">
											<div class="sticky-top">
												<h6 class="title-style1 text-uppercase">Leave a Reply</h6>
											</div>
										</div>
										<div class="col-lg-9">
											<!-- Form -->
											<div class="comment-respond" id="respond">
												<h3 class="comment-reply-title" id="reply-title"><small> <a style="display:none;" href="#" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a> </small> </h3>
												<form class="comment-form" id="commentform" method="post">
													<p class="comment-form-author">
														<label for="author">Name <span class="required">*</span></label>
														<input type="text" value="" placeholder="Author" id="author">
													</p>
													<p class="comment-form-email">
														<label for="email">Email <span class="required">*</span></label>
														<input type="text" value="" placeholder="Email" id="email">
													</p>
													<p class="comment-form-comment">
														<label for="comment">Comment</label>
														<textarea rows="8" placeholder="Add a Comment" id="comment"></textarea>
													</p>
													<p class="form-submit">
														<input type="submit" value="Post Comment" class="submit" id="submit">
													</p>
												</form>
											</div>
											<!-- Form END -->
										</div>
									</div>
								</div>
							</div>
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
								<img class="img-cover" src="{{ asset('/frontend/images/about/img1.jpg') }}" alt="">
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
									<li><a href="javascript:void(0);"><img class="img-cover" src="{{ asset('/frontend/images/instagram-post/pic1.jpg') }}" alt=""></a></li>
									<li><a href="javascript:void(0);"><img class="img-cover" src="{{ asset('/frontend/images/instagram-post/pic2.jpg') }}" alt=""></a></li>
									<li><a href="javascript:void(0);"><img class="img-cover" src="{{ asset('/frontend/images/instagram-post/pic3.jpg') }}" alt=""></a></li>
									<li><a href="javascript:void(0);"><img class="img-cover" src="{{ asset('/frontend/images/instagram-post/pic4.jpg') }}" alt=""></a></li>
								</ul>
							</div>
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
