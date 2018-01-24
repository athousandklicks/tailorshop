@extends('admin.layout.admin')

@section('title', '| Dashboard')

@section('content')


<!-- BreadCrumbs Start -->
<div class="breadcrumbs haslayout">
  <div class="container">
  </div>
</div>
<!-- BreadCrumbs End -->

<!-- Main Start -->
<div id="main" class="haslayout padding-section products-listing product-page">
  <div class="container">
    <div class="row">


      <aside id="sidebar" class="col-lg-3 col-md-3 col-sm-12 col-sx-12">
        @include('admin.layout.includes.sidenav')
      </aside>


      <div class="col-lg-6 col-md-6 col-sm-12">
        <div id="content" class="haslayout">
          <div class="product-detail haslayout">
            <div class="row">
              <h3>Edit Fabrics</h3>


              {!! Form::model($fabrics, ['route' => ['fabric.update', $fabrics->id], 'method' => 'PUT', 'files' => true, 'data-parsley-validate'=>'']) !!}

              {{ Form::text('name', $fabrics->name, ['class' => 'form-control coupon', 'placeholder'=>'Enter Fabric Name']) }}

              {{ Form::text('fabric_id', $fabrics->fabric_id, ['class' => 'form-control coupon', 'placeholder'=>'Enter Fabric ID']) }}

              {{ Form::text('material', $fabrics->material, ['class' => 'form-control coupon', 'placeholder'=>'Enter Material']) }}

              {{ Form::number('price', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter Price', 'step' => '0.1']) }}

              {{ Form::text('season', $fabrics->season, ['class' => 'form-control coupon', 'placeholder'=>'Enter Season']) }}

              {{ Form::text('ply', $fabrics->ply, ['class' => 'form-control coupon', 'placeholder'=>'Enter Ply']) }}

              {{ Form::text('thread_count', $fabrics->thread_count, ['class' => 'form-control coupon', 'placeholder'=>'Enter Thread Count']) }}

              {{ Form::text('weight', $fabrics->weight, ['class' => 'form-control coupon', 'placeholder'=>'Enter Weight']) }}

              <img src="{{url('images/fabrics',$fabrics->image)}}" height="50" width="50"/>
              {{Form::label('image', 'Update Fabric Image *')}}
              {{Form::file('image', ['class'=>'btn btn-small'])}}

              {{ Form::submit('Save Changes', ['class' => 'theme-btn btn-small']) }}

              {!! Form::close() !!}

            </div>
          </div>

        </div>


      </div>
      <div class="col-sm-3 col-xs-6 product-description">

        <div class="well">
          {!! Form::open(['route' => 'fabric.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}
          <h4>Add New Fabric</h4>

          {{ Form::text('name', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter Fabric Name']) }}

          {{ Form::text('fabric_id', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter Fabric ID']) }}

          {{ Form::text('material', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter Material']) }}

          {{ Form::text('season', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter Season']) }}

          {{ Form::text('ply', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter Ply']) }}

          {{ Form::text('thread_count', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter Thread Count']) }}

          {{ Form::text('weight', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter Weight']) }}

          {{Form::label('image', 'Upload Fabric *')}}
          {{Form::file('image', ['class'=>'btn btn-small'])}}
        </br>
        {{ Form::submit('Create New Fabric', ['class' => 'theme-btn btn-small']) }}
        {!! Form::close() !!}
      </div>
    </div>
  </div>




</div>
</div>
</div>





</div>
</div>
</div>

<!-- Main End -->


@endsection