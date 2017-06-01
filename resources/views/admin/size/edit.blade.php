@extends('admin.layout.admin')

@section('title', '| Dashboard - Edit Sizes')

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
              <h3>Edit Sizes</h3>


                  {!! Form::model($sizes, ['route' => ['size.update', $sizes->id], 'method' => 'PUT']) !!}

                  {{ Form::text('sizes', null, ["class" => 'form-control category-edit']) }}

                  {{ Form::submit('Save Changes', ['class' => 'theme-btn btn-small']) }}

                  {!! Form::close() !!}

            </div>
          </div>

        </div>


      </div>
      <div class="col-sm-3 col-xs-6 product-description">

        <div class="well">
          {!! Form::open(['route' => 'colour.store', 'method' => 'POST']) !!}
          <h4>New Size</h4>
          {{ Form::text('sizes', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter Size']) }}

          {{ Form::submit('Create New Size', ['class' => 'theme-btn btn-small']) }}
          {!! Form::close() !!}</br>
        <h6>Please Enter (S) => Small</h6>
        <h6>Please Enter (M) => Medium</h6>
        <h6>Please Enter (L) => Large</h6>
        <h6>Please Enter (XL) => XLarge</h6>
        <h6>Please Enter (XXL) => 2XLarge</h6>
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