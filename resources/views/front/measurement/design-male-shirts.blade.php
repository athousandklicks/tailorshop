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
						<a>Enter your Parameters 
					{{-- @foreach ($users as $user)
						{{ $user->name }}
						@endforeach --}}

						{{-- {{ $users->name }} --}}
						</a>
					</div>
						
						{!!Form::model($shirts, ['route'=>['maleshirt.update', $shirts->id], 'method' => 'PUT', 'files' => true, 'onsubmit' => 'return ConfirmSave()'])!!}

						{{csrf_field()}}

					<fieldset>
						<legend class="form-legend">Style  </legend>
						{!! Form::select('collar', $collartypesList, null, ['class' => 'form-control', 'class' => 'form-resized', 'placeholder' => 'Collar Type']) !!}

						{!! Form::select('sleeve_and_cuffs', $sleeveAndCuffsList, null, ['class' => 'form-control' , 'class' => 'form-resized', 'placeholder' => 'Sleeve and Cuffs']) !!}

						{!! Form::select('buttons', $buttonsList, null, ['class' => 'form-control' , 'class' => 'form-resized', 'placeholder' => 'Button']) !!}

						{!! Form::select('pockets', $pocketsList, null, ['class' => 'form-control' , 'class' => 'form-resized', 'placeholder' => 'Pockets']) !!}	
					</fieldset>

					<fieldset>
						<legend class="form-legend">Measurement</legend>

						{!! Form::number('neck', null, ['class' => 'form-control', 'step'=>'any', 'class' => 'form-resized', 'placeholder' => 'Neck']) !!}

						{!! Form::number('arm_length', null, ['class' => 'form-control', 'step'=>'any', 'class' => 'form-resized', 'placeholder' => 'Arm Length']) !!}

						{!! Form::number('arm_round', null, ['class' => 'form-control', 'step'=>'any', 'class' => 'form-resized', 'placeholder' => 'Arm Round']) !!}

						{!! Form::number('chest_bust', null, ['class' => 'form-control', 'step'=>'any', 'class' => 'form-resized', 'placeholder' => 'Chest Bust']) !!}

						{!! Form::number('front_length', null, ['class' => 'form-control', 'step'=>'any', 'class' => 'form-resized', 'placeholder' => 'Front Length']) !!}

						{!! Form::number('back_length', null, ['class' => 'form-control', 'step'=>'any', 'class' => 'form-resized', 'placeholder' => 'Back Length']) !!}
					</fieldset>

					<fieldset>
						<legend class="form-legend">Details</legend>
						{!! Form::select('placket', $placketsList,null, ['class' => 'form-control', 'class' => 'form-resized', 'placeholder' => 'Placket']) !!}

						{!! Form::select('fit', $fittingsList, null, ['class' => 'form-control' , 'class' => 'form-resized', 'placeholder' => 'Fit']) !!}

						{!! Form::select('back', $backsList,null, ['class' => 'form-control' , 'class' => 'form-resized', 'placeholder' => 'Back']) !!}

						{!! Form::select('bottom', $bottomsList,null, ['class' => 'form-control' , 'class' => 'form-resized', 'placeholder' => 'Bottom']) !!}

						{!! Form::select('zip', $zipperTypesList, null, ['class' => 'form-control' , 'class' => 'form-resized', 'placeholder' => 'Zipper']) !!}

						{!! Form::select('thread_colour', $threadsList, null, ['class' => 'form-control' , 'class' => 'form-resized', 'placeholder' => 'Thread Color']) !!}

						{!! Form::select('pocket_hankerchief', $pocketHankerchiefsList, null, ['class' => 'form-control' , 'class' => 'form-resized', 'placeholder' => 'Pocket Hankerchief']) !!}


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

						<div>
							{{Form::submit('Submit Design', ['class'=>'btn btn-success', 'class' => 'form-resized'])}}
						</div>
					

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
							
							<div class="item design-shirt">
								<form class="shirtdesign-form">
									<fieldset>
										<div class="panel-group shirtdesign-accordion theme-accordion" id="shirtdesign-accordion">
											<div class="panel accordion-pannel">
												<div class="accordion-heading">
													<h4>
														<a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseOne">
															<em>Collar Type</em>
															<i class="indicator fa fa-angle-down pull-right"></i>
														</a>
													</h4>
												</div>
		<div id="collapseOne" class="panel-collapse collapse in">
			<div class="panel-body">
				<ul class="tab-nav" role="tablist">
@foreach ($collartypes as $collartype)
					<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half">
						<label>
							
								<img src="{{url('images/collartypes',$collartype->img_link)}}" height="100" width="100"/>
								<em>{{ $collartype->name }}</em>
						</label>
					</li>
@endforeach

				</ul>
			</div>
												</div>
											</div>
											<div class="panel accordion-pannel">
												<div class="accordion-heading">
													<h4>
														<a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseTwo">
															<em>Sleeve and Cuffs</em>
															<i class="indicator fa fa-angle-right pull-right"></i>
														</a>
													</h4>
												</div>
			<div id="collapseTwo" class="panel-collapse collapse">
							<div class="panel-body">
				<ul class="tab-nav" role="tablist">
@foreach ($sleeveAndCuffs as $sleeveAndCuff)
					<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half">
						<label>
							
								<img src="{{url('images/sleeveAndCuffs',$sleeveAndCuff->img_link)}}" height="100" width="100"/>
								<em>{{ $sleeveAndCuff->name }}</em>
						</label>
					</li>
@endforeach
					
				</ul>
			</div>
												</div>
											</div>
											<div class="panel accordion-pannel">
												<div class="accordion-heading">
													<h4>
														<a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseThree">
															<em>Pockets</em>
															<i class="indicator fa fa-angle-right pull-right"></i>
														</a>
													</h4>
												</div>
												<div id="collapseThree" class="panel-collapse collapse">
						<div class="panel-body">
				<ul class="tab-nav" role="tablist">

				@foreach ($pockets as $pocket)
					<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half">
						<label>
							
								<img src="{{url('images/pockets',$pocket->img_link)}}" height="100" width="100"/>
								<em>{{ $pocket->name }}</em>
						</label>
					</li>
@endforeach
				</ul>
			</div>
												</div>
											</div>
											<div class="panel accordion-pannel">
												<div class="accordion-heading">
													<h4>
														<a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseFour">
															<em>Placket</em>
															<i class="indicator fa fa-angle-right pull-right"></i>
														</a>
													</h4>
												</div>
												<div id="collapseFour" class="panel-collapse collapse">
						<div class="panel-body">
				<ul class="tab-nav" role="tablist">
									@foreach ($plackets as $placket)
					<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half">
						<label>
							
								<img src="{{url('images/plackets',$placket->img_link)}}" height="100" width="100"/>
								<em>{{ $placket->name }}</em>
						</label>
					</li>
@endforeach
				
				</ul>
			</div>
												</div>
											</div>


			<div class="panel accordion-pannel">
				<div class="accordion-heading">
					<h4>
						<a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseFive">
							<em>Fit</em>
							<i class="indicator fa fa-angle-right pull-right"></i>
						</a>
					</h4>
				</div>
			<div id="collapseFive" class="panel-collapse collapse">

				<div class="panel-body">
				<ul class="tab-nav" role="tablist">
	@foreach ($fittings as $fitting)
					<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half">
						<label>
							
								<img src="{{url('images/fittings',$fitting->img_link)}}" height="100" width="100"/>
								<em>{{ $fitting->name }}</em>
						</label>
					</li>
@endforeach

				</ul>
			</div>
		</div>
	</div>


				<div class="panel accordion-pannel">
				<div class="accordion-heading">
					<h4>
						<a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseSix">
							<em>Back</em>
							<i class="indicator fa fa-angle-right pull-right"></i>
						</a>
					</h4>
				</div>
			<div id="collapseSix" class="panel-collapse collapse">

				<div class="panel-body">
				<ul class="tab-nav" role="tablist">

	@foreach ($backs as $back)
					<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half">
						<label>
							
								<img src="{{url('images/backs',$back->img_link)}}" height="100" width="100"/>
								<em>{{ $back->name }}</em>
						</label>
					</li>
@endforeach

				</ul>
			</div>
		</div>
	</div>


				<div class="panel accordion-pannel">
				<div class="accordion-heading">
					<h4>
						<a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseSeven">
							<em>Bottom</em>
							<i class="indicator fa fa-angle-right pull-right"></i>
						</a>
					</h4>
				</div>
			<div id="collapseSeven" class="panel-collapse collapse">

				<div class="panel-body">
				<ul class="tab-nav" role="tablist">

					@foreach ($bottoms as $bottom)
					<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half">
						<label>
							
								<img src="{{url('images/bottoms',$bottom->img_link)}}" height="100" width="100"/>
								<em>{{ $bottom->name }}</em>
						</label>
					</li>
@endforeach

				</ul>
			</div>
		</div>
	</div>

					<div class="panel accordion-pannel">
				<div class="accordion-heading">
					<h4>
						<a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseEight">
							<em>Zipper Types</em>
							<i class="indicator fa fa-angle-right pull-right"></i>
						</a>
					</h4>
				</div>
			<div id="collapseEight" class="panel-collapse collapse">

				<div class="panel-body">
				<ul class="tab-nav" role="tablist">

	@foreach ($zipperTypes as $zipperType)
					<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half">
						<label>
							
								<img src="{{url('images/zipperTypes',$zipperType->img_link)}}" height="100" width="100"/>
								<em>{{ $zipperType->name }}</em>
						</label>
					</li>
@endforeach

				</ul>
			</div>
		</div>
	</div>

					<div class="panel accordion-pannel">
				<div class="accordion-heading">
					<h4>
						<a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseNine">
							<em>Pocket hankerchief</em>
							<i class="indicator fa fa-angle-right pull-right"></i>
						</a>
					</h4>
				</div>
			<div id="collapseNine" class="panel-collapse collapse">

				<div class="panel-body">
				<ul class="tab-nav" role="tablist">

	@foreach ($pocketHankerchiefs as $pocketHankerchief)
					<li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half">
						<label>
							
								<img src="{{url('images/pocketHankerchiefs',$pocketHankerchief->img_link)}}" height="100" width="100"/>
								<em>{{ $pocketHankerchief->name }}</em>
						</label>
					</li>
@endforeach

				</ul>
			</div>
		</div>
	</div>


	</div>
</fieldset>
</form>
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
