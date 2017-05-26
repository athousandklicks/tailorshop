@extends('main')

@section('title', '| Contact Tailorshop')

@section('content')
	<!-- BreadCrumbs Start -->
		<div class="breadcrumbs haslayout">
			<div class="container">
				<span class="page-title"></span>
			</div>
		</div>
		<!-- BreadCrumbs End -->
		<!-- BreadCrumbs Start -->
		<div class="storeslocation haslayout">
			<div id="contacus-map"></div>
		</div>
		<!-- BreadCrumbs End -->
		<!-- Main Start -->
		<div id="main" class="haslayout padding-section padding-bottom-zero">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="address col info">
							<div class="border-left">
								<h3>Get In Touch</h3>
							</div>
							<div class="description">
								<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
							</div>
							<ul class="address-info">
								<li>
									<i>Address: </i>
									<address>795 South Park Avenue, Door 6 Wonderland, CA 94107, Australia</address>
								</li>
								<li>
									<i>Phone: </i>
									<em>+440 875369208</em>
								</li>
								<li>
									<i>Email: </i>
									<em>
										<a href="support@sitename.com">support@sitename.com</a><br>
										<a href="info@sitename.com">info@sitename.com</a>
									</em>
								</li>
							</ul>
							<div class="social-area">
								<i>Follow Us:</i>
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
					<div class="col-sm-8">
						<div class="border-left">
							<h3>FeedBack</h3>
						</div>
						<form class="contact-form">
							<fieldset>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" class="form-control" placeholder="Full Name">
										</div>
										<div class="col-sm-6">
											<input type="email" class="form-control" placeholder="Email">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" class="form-control" placeholder="Number">
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" placeholder="Website">
										</div>
									</div>
								</div>
								<div class="form-group">
									<textarea placeholder="Message"></textarea>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-5">
											<button class="theme-btn btn-sendmessage" type="submit">Send Message</button>
										</div>
			
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Main End -->
@endsection