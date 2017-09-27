@extends('main')

@section('title', '| Design Male Shirt')

@section('content')
<!-- BreadCrumbs Start -->
<div class="breadcrumbs haslayout">
	<div class="container">
		<span class="page-title"></span>
	</div>
</div>
<div id="main" class="haslayout padding-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 width">
				<div class="form-wrapper">
					<div class="form-heading">
						<a>Enter your Parameters</a>
					</div>
						
						{!!Form::model($shirts, ['route'=>['maleshirt.update', $shirts->id], 'method' => 'PUT', 'files' => true, 'onsubmit' => 'return ConfirmSave()'])!!}

						{{csrf_field()}}

					<fieldset>
						<legend class="form-legend">Style</legend>
						{!! Form::select('collar', $collartypes, null, ['class' => 'form-control', 'class' => 'form-resized', 'placeholder' => 'Collar Type']) !!}

						{!! Form::select('sleeve_and_cuffs', $sleeveAndCuffs, null, ['class' => 'form-control' , 'class' => 'form-resized', 'placeholder' => 'Sleeve and Cuffs']) !!}

						{!! Form::select('buttons', $buttons, null, ['class' => 'form-control' , 'class' => 'form-resized', 'placeholder' => 'Button']) !!}

						{!! Form::select('pockets', $pockets, null, ['class' => 'form-control' , 'class' => 'form-resized', 'placeholder' => 'Pockets']) !!}	
					</fieldset>

					<fieldset>
						<legend class="form-legend">Measurement</legend>

						{!! Form::text('neck', null, ['class' => 'form-control', 'class' => 'form-resized', 'placeholder' => 'Neck']) !!}

						{!! Form::text('arm_length', null, ['class' => 'form-control' , 'class' => 'form-resized', 'placeholder' => 'Arm Length']) !!}

						{!! Form::text('arm_round', null, ['class' => 'form-control' , 'class' => 'form-resized', 'placeholder' => 'Arm Round']) !!}

						{!! Form::text('chest_bust', null, ['class' => 'form-control' , 'class' => 'form-resized', 'placeholder' => 'Chest Bust']) !!}

						{!! Form::text('front_length', null, ['class' => 'form-control' , 'class' => 'form-resized', 'placeholder' => 'Front Length']) !!}

						{!! Form::text('back_length', null, ['class' => 'form-control' , 'class' => 'form-resized', 'placeholder' => 'Back Length']) !!}
					</fieldset>

					<fieldset>
						<legend class="form-legend">Details</legend>
						{!! Form::select('placket', $plackets,null, ['class' => 'form-control', 'class' => 'form-resized', 'placeholder' => 'Placket']) !!}

						{!! Form::select('fit', $fittings, null, ['class' => 'form-control' , 'class' => 'form-resized', 'placeholder' => 'Fit']) !!}

						{!! Form::select('back', $backs,null, ['class' => 'form-control' , 'class' => 'form-resized', 'placeholder' => 'Back']) !!}

						{!! Form::select('bottom', $bottoms,null, ['class' => 'form-control' , 'class' => 'form-resized', 'placeholder' => 'Bottom']) !!}

						{!! Form::select('zip', $zipperTypes, null, ['class' => 'form-control' , 'class' => 'form-resized', 'placeholder' => 'Zipper']) !!}

						{!! Form::select('thread_color', $threads, null, ['class' => 'form-control' , 'class' => 'form-resized', 'placeholder' => 'Thread Color']) !!}

						{!! Form::select('pocket_hankerchief', $pocketHankerchiefs, null, ['class' => 'form-control' , 'class' => 'form-resized', 'placeholder' => 'Pocket Hankerchief']) !!}


					</fieldset>

					<fieldset>
						<legend class="form-legend">Others</legend>

						{!! Form::textarea('description', null, ['class' => 'form-control', 'class' => 'form-resized', 'placeholder' => 'Provide More Details about your Design']) !!}
						
						{{ Form::label('refImage1','Upload Image One (1)', array('class' => 'form-control', 'class'=>'btn btn-default', 'class' => 'form-resized')) }}
						{{ Form::file('refImage1', array('class' => 'form-control', 'class'=>'btn btn-default', 'class' => 'form-resized')) }}
						{{ Form::reset('Reset Image one (1)', array('class' => 'form-control', 'class'=>'btn btn-default', 'class' => 'form-resized')) }}
						<br/>
						{{ Form::label('refImage2','Upload Image Two (2)', array('class' => 'form-control', 'class'=>'btn btn-default', 'class' => 'form-resized')) }}
						{{ Form::file('refImage2', array('class' => 'form-control', 'class'=>'btn btn-default', 'class' => 'form-resized')) }}
						{{ Form::reset('Reset Image Two (2)', array('class' => 'form-control', 'class'=>'btn btn-default', 'class' => 'form-resized')) }}

						{!! Form::close() !!}
						
					</fieldset>								

				</div>
			</div>






			<div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 width">
				<div class="product-making">
					<div class="product-tabs">
						<div class="head">
							<div id="product-tabs" class="product-tabs">
								<div class="item">
									<a href="#top-rated">Enter your Parameters</a>
								</div>
							</div>
						</div>
						<div id="product-tab-data" class="product-tab-data">
							<div class="item toprated-product">
								<div class="row">
									<ul class="tab-nav" role="tablist">
										<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 tab-productfull active">
											<div class="product">
												<a href="#productnameone" aria-controls="productnameone" role="tab" data-toggle="tab">
													<div class="product-img">
														<img src="images/design_shirt/design_thum1.jpg" alt="image description">
														<div class="cart-badge">
															<span class="corner"></span>
														</div>
														<div class="img-hover">
															<div class="holder">
																<i class="icon glyph-icon flaticon-plus79"></i>
															</div>
														</div>
													</div>
												</a>
											</div>
										</li>
										<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 tab-productfull">
											<div class="product">
												<a href="#productnametwo" aria-controls="productnametwo" role="tab" data-toggle="tab">
													<div class="product-img">
														<img src="images/design_shirt/design_thum2.jpg" alt="image description">
														<div class="cart-badge">
															<span class="corner"></span>
														</div>
														<div class="img-hover">
															<div class="holder">
																<i class="icon glyph-icon flaticon-plus79"></i>
															</div>
														</div>
													</div>
												</a>
											</div>
										</li>
										<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 tab-productfull">
											<div class="product">
												<a href="#productnamethree" aria-controls="productnamethree" role="tab" data-toggle="tab">
													<div class="product-img">
														<img src="images/design_shirt/design_thum3.jpg" alt="image description">
														<div class="cart-badge">
															<span class="corner"></span>
														</div>
														<div class="img-hover">
															<div class="holder">
																<i class="icon glyph-icon flaticon-plus79"></i>
															</div>
														</div>
													</div>
												</a>
											</div>
										</li>
										<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 tab-productfull">
											<div class="product">
												<a href="#productnamefour" aria-controls="productnamefour" role="tab" data-toggle="tab">
													<div class="product-img">
														<img src="images/design_shirt/design_thum4.jpg" alt="image description">
														<div class="cart-badge">
															<span class="corner"></span>
														</div>
														<div class="img-hover">
															<div class="holder">
																<i class="icon glyph-icon flaticon-plus79"></i>
															</div>
														</div>
													</div>
												</a>
											</div>
										</li>
										<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 tab-productfull">
											<div class="product">
												<a href="#productnamefive" aria-controls="productnamefive" role="tab" data-toggle="tab">
													<div class="product-img">
														<img src="images/design_shirt/design_thum5.jpg" alt="image description">
														<div class="cart-badge">
															<span class="corner"></span>
														</div>
														<div class="img-hover">
															<div class="holder">
																<i class="icon glyph-icon flaticon-plus79"></i>
															</div>
														</div>
													</div>
												</a>
											</div>
										</li>
										<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 tab-productfull">
											<div class="product">
												<a href="#productnamesix" aria-controls="productnamesix" role="tab" data-toggle="tab">
													<div class="product-img">
														<img src="images/design_shirt/design_thum6.jpg" alt="image description">
														<div class="cart-badge">
															<span class="corner"></span>
														</div>
														<div class="img-hover">
															<div class="holder">
																<i class="icon glyph-icon flaticon-plus79"></i>
															</div>
														</div>
													</div>
												</a>
											</div>
										</li>
										<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 tab-productfull">
											<div class="product">
												<a href="#productnameseven" aria-controls="productnameseven" role="tab" data-toggle="tab">
													<div class="product-img">
														<img src="images/design_shirt/design_thum7.jpg" alt="image description">
														<div class="cart-badge">
															<span class="corner"></span>
														</div>
														<div class="img-hover">
															<div class="holder">
																<i class="icon glyph-icon flaticon-plus79"></i>
															</div>
														</div>
													</div>
												</a>
											</div>
										</li>
										<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 tab-productfull">
											<div class="product">
												<a href="#productnameeight" aria-controls="productnameeight" role="tab" data-toggle="tab">
													<div class="product-img">
														<img src="images/design_shirt/design_thum8.jpg" alt="image description">
														<div class="cart-badge">
															<span class="corner"></span>
														</div>
														<div class="img-hover">
															<div class="holder">
																<i class="icon glyph-icon flaticon-plus79"></i>
															</div>
														</div>
													</div>
												</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="item design-shirt">
								<form class="shirtdesign-form">
									<fieldset>
										<div class="panel-group shirtdesign-accordion theme-accordion" id="shirtdesign-accordion">
											<div class="panel accordion-pannel">
												<div class="accordion-heading">
													<h4>
														<a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseOne">
															<em>Fabric</em>
															<i class="indicator fa fa-angle-down pull-right"></i>
														</a>
													</h4>
												</div>
												<div id="collapseOne" class="panel-collapse collapse in">
													<div class="panel-body">
														<ul class="tab-nav" role="tablist">
															<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half">
																<a href="#pattranone" aria-controls="pattranone" role="tab" data-toggle="tab">
																	<label>
																		<em>green</em>
																		<img src="images/pattran/pattran01.jpg" alt="image description">
																		<span class="bg-checkbox">
																			<input type="radio" name="pattran" value="" checked>
																		</span>
																	</label>
																</a>
															</li>
															<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half">
																<a href="#pattrantwo" aria-controls="pattrantwo" role="tab" data-toggle="tab">
																	<label>
																		<em>green</em>
																		<img src="images/pattran/pattran02.jpg" alt="image description">
																		<span class="bg-checkbox">
																			<input type="radio" name="pattran" value="">
																		</span>
																	</label>
																</a>
															</li>
															<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half">
																<a href="#pattranthree" aria-controls="pattranthree" role="tab" data-toggle="tab">
																	<label>
																		<em>green</em>
																		<img src="images/pattran/pattran03.jpg" alt="image description">
																		<span class="bg-checkbox">
																			<input type="radio" name="pattran" value="">
																		</span>
																	</label>
																</a>
															</li>
															<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half">
																<a href="#pattranfour" aria-controls="pattranfour" role="tab" data-toggle="tab">
																	<label>
																		<em>green</em>
																		<img src="images/pattran/pattran04.jpg" alt="image description">
																		<span class="bg-checkbox">
																			<input type="radio" name="pattran" value="">
																		</span>
																	</label>
																</a>
															</li>
															<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half">
																<a href="#pattranfive" aria-controls="pattranfive" role="tab" data-toggle="tab">
																	<label>
																		<em>green</em>
																		<img src="images/pattran/pattran05.jpg" alt="image description">
																		<span class="bg-checkbox">
																			<input type="radio" name="pattran" value="">
																		</span>
																	</label>
																</a>
															</li>
															<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half">
																<a href="#pattransix" aria-controls="pattransix" role="tab" data-toggle="tab">
																	<label>
																		<em>green</em>
																		<img src="images/pattran/pattran06.jpg" alt="image description">
																		<span class="bg-checkbox">
																			<input type="radio" name="pattran" value="">
																		</span>
																	</label>
																</a>
															</li>
															<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half">
																<a href="#pattranseven" aria-controls="pattranseven" role="tab" data-toggle="tab">
																	<label>
																		<em>green</em>
																		<img src="images/pattran/pattran07.jpg" alt="image description">
																		<span class="bg-checkbox">
																			<input type="radio" name="pattran" value="">
																		</span>
																	</label>
																</a>
															</li>
															<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half">
																<a href="#pattraneight" aria-controls="pattraneight" role="tab" data-toggle="tab">
																	<label>
																		<em>green</em>
																		<img src="images/pattran/pattran03.jpg" alt="image description">
																		<span class="bg-checkbox">
																			<input type="radio" name="pattran" value="">
																		</span>
																	</label>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="panel accordion-pannel">
												<div class="accordion-heading">
													<h4>
														<a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseTwo">
															<em>Measurement</em>
															<i class="indicator fa fa-angle-right pull-right"></i>
														</a>
													</h4>
												</div>
												<div id="collapseTwo" class="panel-collapse collapse">
													<div class="panel-body">
														<ul>
															<li class="col-sm-5">
																<img src="images/size-guide.jpg" alt="image description">
															</li>
															<li class="col-sm-7">
																<div class="size-input">
																	<input type="text" class="form-control" placeholder="Neck (cm)">
																</div>
																<div class="size-input">
																	<input type="text" class="form-control" placeholder="Arm (cm)">
																</div>
																<div class="size-input">
																	<input type="text" class="form-control" placeholder="Chest (cm)">
																</div>
																<div class="size-input">
																	<input type="text" class="form-control" placeholder="Waist (cm)">
																</div>
																<div class="size-input">
																	<input type="text" class="form-control" placeholder="Hip (cm)">
																</div>
																<div class="size-input">
																	<input type="text" class="form-control" placeholder="Leg (cm)">
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="panel accordion-pannel">
												<div class="accordion-heading">
													<h4>
														<a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseThree">
															<em>Fitting</em>
															<i class="indicator fa fa-angle-right pull-right"></i>
														</a>
													</h4>
												</div>
												<div id="collapseThree" class="panel-collapse collapse">
													<div class="panel-body">
														<ul>
															<li class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
																<label>
																	<em>too loose</em>
																	<img src="images/pattran/01-too-loose.jpg" alt="image description">
																	<span class="bg-checkbox">
																		<input type="radio" name="size" value="">
																	</span>
																</label>
															</li>
															<li class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
																<label>
																	<em>normal</em>
																	<img src="images/pattran/02-normal.jpg" alt="image description">
																	<span class="bg-checkbox">
																		<input type="radio" name="size" value="">
																	</span>
																</label>
															</li>
															<li class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
																<label>
																	<em>just right</em>
																	<img src="images/pattran/03-just-right.jpg" alt="image description">
																	<span class="bg-checkbox">
																		<input type="radio" name="size" value="" checked>
																	</span>
																</label>
															</li>
															<li class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
																<label>
																	<em>too tight</em>
																	<img src="images/pattran/04-too-tight.jpg" alt="image description">
																	<span class="bg-checkbox">
																		<input type="radio" name="size" value="">
																	</span>
																</label>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="panel accordion-pannel">
												<div class="accordion-heading">
													<h4>
														<a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseFour">
															<em>Misc</em>
															<i class="indicator fa fa-angle-right pull-right"></i>
														</a>
													</h4>
												</div>
												<div id="collapseFour" class="panel-collapse collapse">
													<div class="panel-body">
														<ul>
															<li class="col-sm-6">
																<div class="size-input">
																	<select>
																		<option>Thread Color</option>
																		<option>Thread Color</option>
																	</select>
																</div>
																<div class="size-input">
																	<select>
																		<option>Collar Type</option>
																		<option>Collar Type</option>
																	</select>
																</div>
																<div class="size-input">
																	<select>
																		<option>Pockets</option>
																		<option>Pockets</option>
																	</select>
																</div>
																<div class="size-input">
																	<select>
																		<option>Buttons</option>
																		<option>Buttons</option>
																	</select>
																</div>
																<div class="size-input">
																	<select>
																		<option>Zip</option>
																		<option>Zip</option>
																	</select>
																</div>
																<div class="size-input">
																	<select>
																		<option>Pocket Handkerchief</option>
																		<option>Pocket Handkerchief</option>
																	</select>
																</div>
															</li>
															<li class="col-sm-6">
																<div class="size-input">
																	<span class="extra-option"><strong>Extras</strong> (Optional)</span>
																</div>
																<div class="size-input">
																	<input type="text" class="form-control" placeholder="Enter Text To Print">
																</div>
																<div class="size-input">
																	<span class="or">OR</span>
																</div>
																<div class="size-input">
																	<select>
																		<option>Select Tatto/Embroidery</option>
																		<option>Select Tatto/Embroidery</option>
																	</select>
																</div>
																<div class="size-input">
																	<span class="or">OR</span>
																</div>
																<div class="size-input">
																	<input type="file" data-jcf='{"buttonText": "Upload Image"}'>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="panel accordion-pannel">
												<div class="accordion-heading">
													<h4>
														<a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseFive">
															<em>Finalize</em>
															<i class="indicator fa fa-angle-right pull-right"></i>
														</a>
													</h4>
												</div>
												<div id="collapseFive" class="panel-collapse collapse">
													<div class="panel-body">
														<ul>
															<li class="col-sm-7 order-detail">
																<div class="size-input">
																	<span class="title">Order Summary</span>
																</div>
																<div class="row">
																	<div class="col-sm-6">
																		<span>Fabric: Pattern #1</span>
																		<span>Neck (cm): 27</span>
																		<span>Arm (cm): 4 3</span>
																		<span>Chest (cm): 88</span>
																		<span>Waist (cm): 78</span>
																		<span>Hip (cm): 90</span>
																		<span>Leg (cm): 32</span>
																		<span>Fitting: Just Right</span>
																		<span>Thread Color: Black</span>
																		<span>Collar Type: None</span>
																		<span>Pockets: None</span>
																	</div>
																	<div class="col-sm-6">
																		<span>Buttons: 3 Buttons</span>
																		<span>Zip: None</span>
																		<span>Pockets Handkerchief: None</span>
																		<span>Extras (Optional): None</span>
																		<div class="border-left"></div>
																		<strong>Order #: 60A29B</strong>
																		<strong>Grand Total: $16</strong>
																		<span>
																			<i class="fa fa-print"></i>
																			<em>Print Invoice</em>
																		</span>
																		<span>
																			<i class="fa fa-download"></i>
																			<em>Download Invoice</em>
																		</span>
																	</div>
																</div>
															</li>
															<li class="col-sm-5">
																<div class="size-input">
																	<span class="title">Enter Your Detail</span>
																</div>
																<div class="size-input">
																	<input type="text" class="form-control" placeholder="Full Name">
																</div>
																<div class="size-input">
																	<input type="text" class="form-control" placeholder="Phone">
																</div>
																<div class="size-input">
																	<input type="text" class="form-control" placeholder="Email">
																</div>
																<div class="size-input">
																	<input type="text" class="form-control" placeholder="Address">
																</div>
																<div class="size-input">
																	<button type="submit" class="theme-btn checkout-btn">Checkout</button>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</fieldset>
								</form>
							</div>
							<div class="item">
								<h1>Design Trousers</h1>
							</div>
							<div class="item">
								<h1>Settings</h1>
							</div>
						</div>
					</div>
					<div class="foot">
						<div class="howitwork">
							<div class="video-box">
								<img src="images/video-placeholder.jpg" alt="image description">
							</div>
							<div class="content-box">
								<strong>How it works?</strong>
								<p>Sed ut perspiciatis unde nis iste natus error sit volupttem accum oloremq unde nis.</p>
							</div>
						</div>
						<div class="needhelp">
							<strong>need help?</strong>
							<p>Contact us for friendly, free help.</p>
							<span>Call: 001-234-5678</span>
							<span>Email: <a href="info@domain.com">info@domain.com</a></span>
						</div>
						<div class="likeus">
							<strong>like us</strong>
							<ul class="social-icon">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
								<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

@endsection
