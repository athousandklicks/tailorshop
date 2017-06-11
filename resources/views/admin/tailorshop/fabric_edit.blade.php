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

              {{ Form::text('name', null, ["class" => 'form-control category-edit']) }}

              <img src="/images/fabrics/{{preg_replace('/\s+/', '_', $fabrics->image)}}" alt="The Tailor Shop" width="200" height="300">
              {{Form::label('image', 'UPDATE Back Fabric Image *')}}
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
        <h4>New Fabric</h4>
        {{ Form::text('name', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter Fabric Name']) }}

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