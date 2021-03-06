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



		<div class="col-sm-6 col-xs-6 new-customers">
			<div class="border-left">
				<h2>Register</h2>
			</div>
			<div class="description">
				<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
			</div>

			<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
			</fieldset>
			{{ csrf_field() }}

			<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
				<label for="name" class="col-md-4 control-label">Name</label>

				<div class="col-md-6">
					<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

					@if ($errors->has('name'))
					<span class="help-block">
						<strong>{{ $errors->first('name') }}</strong>
					</span>
					@endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				<label for="email" class="col-md-4 control-label">E-Mail Address</label>

				<div class="col-md-6">
					<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

					@if ($errors->has('email'))
					<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
					@endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
				<label for="password" class="col-md-4 control-label">Password</label>

				<div class="col-md-6">
					<input id="password" type="password" class="form-control" name="password" required>

					@if ($errors->has('password'))
					<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
					@endif
				</div>
			</div>

			<div class="form-group">
				<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

				<div class="col-md-6">
					<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
					<button type="submit" class="btn btn-primary">
						Register
					</button>
				</div>
			</div>
		</fieldset>
	</form>


</div>


<div class="col-sm-6 col-xs-6 reg-customers">
	<div class="border-left">
		<h2>Login</h2>
	</div>
	<div class="description"><p>If you have an account with us, please log in.</p></div>
	<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
		{{ csrf_field() }}
		<fieldset class="row">
			

			<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				<label for="email" class="col-md-4 control-label">E-Mail Address</label>

				<div class="col-md-6">
					<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

					@if ($errors->has('email'))
					<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
					@endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
				<label for="password" class="col-md-4 control-label">Password</label>

				<div class="col-md-6">
					<input id="password" type="password" class="form-control" name="password" required>

					@if ($errors->has('password'))
					<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
					@endif
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
						</label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-8 col-md-offset-4">
					<button type="submit" class="btn btn-primary">
						Login
					</button>

					<a class="btn btn-link" href="{{ route('password.request') }}">
						Forgot Your Password?
					</a>
				</div>
			</div>
		</fieldset>
		
	</form>
</div>



</div>
</div>
@endsection