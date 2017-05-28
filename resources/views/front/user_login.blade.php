@extends('main')

@section('title', '| Welcome Guest - Login/Register')

@section('content')

		<!-- BreadCrumbs Start -->
		<div class="breadcrumbs haslayout">
			<div class="container">
				<span class="page-title"></span>
			</div>
		</div>
		<!-- BreadCrumbs End -->
		<div id="main" class="haslayout padding-section">
			<div class="container">
				<form class="login-form">
					<fieldset class="row">

						<div class="col-sm-6 col-xs-6 new-customers">
							<div class="border-left">
								<h2>New Customers</h2>
							</div>
							<div class="description">
								<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
							</div>
								<div class="form-group">
								<label>Name*</label>
								<input type="email" class="form-control" placeholder="">
							</div>
							<div class="form-group">
								<label>Email Address*</label>
								<input type="email" class="form-control" placeholder="">
							</div>
							<div class="form-group">
								<label>Password*</label>
								<input type="password" class="form-control" placeholder="">
							</div>
							<div class="form-group">
								<label>Confirm Password*</label>
								<input type="password" class="form-control" placeholder="">
							</div>
							<div class="form-group clearfix">
								<div class="note">Required fields *</div>
							</div>
							<div class="form-group clearfix">
								<button type="submit" class="theme-btn btn-small">Sign Up</button>
							</div>
							
						</div>


						<div class="col-sm-6 col-xs-6 reg-customers">
							<div class="border-left">
								<h2>Registered Customers</h2>
							</div>
							<div class="description"><p>If you have an account with us, please log in.</p></div>
							<div class="form-group">
								<label>Email Address*</label>
								<input type="email" class="form-control" placeholder="">
							</div>
							<div class="form-group">
								<label>Password*</label>
								<input type="password" class="form-control" placeholder="">
							</div>
							<div class="form-group clearfix">
								<a class="btn-forgotpassword" href="#">Forgot your password?</a>
								<div class="note">Required fields *</div>
							</div>
							<div class="form-group clearfix">
								<button type="submit" class="theme-btn btn-small">Log In</button>
							</div>
						</div>


					</fieldset>
				</form>
			</div>
		</div>
@endsection