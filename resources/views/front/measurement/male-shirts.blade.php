@extends('main')

@section('title', '| Design Male Shirt')

@section('content')
<!-- BreadCrumbs Start -->
<div class="breadcrumbs haslayout">
	<div class="container">
		<span class="page-title"></span>
	</div>
</div>
<section class="products padding-section haslayout">
	<div class="container">
		<div class="section-heading">
			<div class="heading">
				<h2>DESIGN A MALE SHIRT</h2>
				<h3>SELECT FABRIC</h3>

			</div>
		</div>


		<div id="product-slider" class="product-slider haslayout">
			<div class="item product">
				<div class="product-img">
					<img src="images/fabrics/blank.jpg" height="20" width="20"/>
				</div>
				<div class="select-fabric">
					{!! Form::open(['route' => 'maleshirt.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}
					{{csrf_field()}}
					
					{!! Form::hidden('fabric', 'Customer Fabric', ['class' => 'form-control']) !!}

					{!! Form::hidden('gender', 'male', ['class' => 'form-control']) !!}

					{!! Form::hidden('fabric_status', '0', ['class' => 'form-control']) !!}

					<div class="row">
						<div class="form-group col-sm-6 col-xs-6 full-widthsx">
						{{Form::submit('I will Bring my Own Fabric', ['class'=>'btn btn-primary'])}}
						</div>
					</div>
					{!! Form::close() !!}
				</div>
			</div>


			@foreach ($fabrics as $fabric) 
			<div class="item product">
				<div class="product-img">
					<img src="{{url('images/fabrics',$fabric->image)}}" height="20" width="20"/>
				</div>
				<div class="detail">
					<span class="title">Name: {{$fabric->name}}</span>
					<span class="price">Price: AUD ${{$fabric->price}}</span>
					<span class="price">No.: {{$fabric->fabric_id}}</span>
					<span class="price">Material: {{$fabric->material}}</span>
					<span class="price">Season: {{$fabric->season}}</span>
					<span class="price">Ply: {{$fabric->ply}}</span>
					<span class="price">Thread Count: {{$fabric->thread_count}}</span>
					<span class="price">Weight: {{$fabric->weight}}</span>
				</div>
				

				<div class="select-fabric">
					{!! Form::open(['route' => 'maleshirt.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}


					{!! Form::hidden('fabric', $fabric->name, ['class' => 'form-control']) !!}

					{!! Form::hidden('gender', 'male', ['class' => 'form-control']) !!}

					{!! Form::hidden('fabric_status', '1', ['class' => 'form-control']) !!}

					<div class="row">
						<div class="form-group col-sm-6 col-xs-6 full-widthsx">
							{{Form::submit('Choose this Fabric', ['class'=>'btn btn-default'])}}
						</div>
					</div>
					{!! Form::close() !!}
				</div>
			</div>
			@endforeach

		</div>


	</div>
</section>

@endsection
