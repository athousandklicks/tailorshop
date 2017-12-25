		<header id="header" class="haslayout">
			<div class="top-bar haslayout">
				<div class="container">
					<div class="col-md-6 col-sm-3 col-xs-6 pull-left">
						<div class="row">
							<span class="phone">
								<i class="glyphicon glyphicon-phone"></i>
								<em>+440 875369208</em>
							</span>
							<span class="email">
								<i class="glyphicon glyphicon-send"></i>
								<em><a href="info@sitename.com">info@sitename.com</a></em>
							</span>
						</div>
					</div>
					<div class="col-md-6 col-sm-3 col-xs-6 pull-right">
						<div class="row">

							@if (Auth::check())
							<span class="phone">			

								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> <em>Hello {{ Auth::user()->name }}</em> <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="#">Your Designs</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li role="separator" class="divider"></li>
												<li><a href="#">Separated link</a></li>
												<li role="separator" class="divider"></li>
												<li><a href="{{ route('logout') }}"
													onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">
													Logout
												</a>
												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
													{{ csrf_field() }}
												</form></li>
											</ul>
										</li>
									</ul>
								</div><!-- /.navbar-collapse -->


							</span>
							@else
						<span class="phone">
							<i class="glyphicon glyphicon-phone"></i>
							<em><a href="/user_login">Register</a></em>
						</span>

						<span class="email">
							<i class="glyphicon glyphicon-send"></i>
							<em><a href="/user_login">Login</a></em>
						</span>
						@endif	


						<ul class="social-icon">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="mid-bar haslayout">
			<div class="container">

				<div class="cart pull-right btn-dropdown btn-cart">
					<button class="btn-badge" type="button" id="cart" data-toggle="dropdown" aria-haspopup="true">
						<i class="fa fa-shopping-cart"></i>
						<span class="badge">2</span>
						<em>$337.00</em>
					</button>
					<div class="dropdown-menu cart-item" aria-labelledby="cart"> 
						<strong class="title">Recently added item(s)</strong>
						<ul class="cart-list">
							<li>
								<div class="product-img">
									<img src="images/img1.jpg" alt="image description">
								</div>
								<div class="detail">
									<span class="product-title">Pearl Izumi Men's E:Motion Tri N1 Neutral Race Shoe</span>
									<span class="quantity">1 x $124.99</span>
								</div>
								<i class="btn-delete-item"><a class="fa fa-remove" href="#"></a></i>
							</li>
							<li>
								<div class="product-img">
									<img src="images/img1.jpg" alt="image description">
								</div>
								<div class="detail">
									<span class="product-title">Pearl Izumi Men's E:Motion Tri N1 Neutral Race Shoe</span>
									<span class="quantity">1 x $124.99</span>
								</div>
								<i class="btn-delete-item">
									<a class="fa fa-remove" href="#"></a>
								</i>
							</li>
						</ul>
						<div class="btn-area">
							<a href="cart.html" class="theme-btn btn-viewall">View All</a>
							<a href="checkout.html" class="theme-btn btn-checkout">Checkout</a>
						</div>
					</div>
				</div>
				<strong class="logo">
					<a href="index.html">
						<img src="images/logo.png" alt="image description">
					</a>
				</strong>
			</div>
		</div>
		<nav id="nav" class="haslayout navbar">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul>


						<li class="{{Request::is('/') ? "active" : ""}}"><a href="/">Home</a></li>

						<li class="{{Request::is('about') ? "active" : ""}}"><a href="/about">About</a></li>

						<li class="{{Request::is('design-shirts') ? "active" : ""}}"><a href="/design-shirts">Shirts</a></li>

						<li class="{{Request::is('design-pants') ? "active" : ""}}"><a href="/design-pants">Pants</a></li>

						<li class="{{Request::is('suit-jackets') ? "active" : ""}}"><a href="/suit-jackets">Suits/Jackets</a></li>

						<li class="{{Request::is('dresses-skirts') ? "active" : ""}}"><a href="/dresses-skirts">Skirts/Dresses</a></li>

						<li class="{{Request::is('accessories') ? "active" : ""}}"><a href="/accessories">Accessories</a></li>

						<li class="{{Request::is('shop') ? "active" : ""}}"><a href="/shop">Shop</a></li>

						<li class="{{Request::is('contact') ? "active" : ""}}"><a href="/contact">Contact</a></li>

					</ul>
				</div>
			</div>
		</nav>
	</header>