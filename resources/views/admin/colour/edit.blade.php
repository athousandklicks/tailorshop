@extends('admin.layout.admin')

@section('title', '| Edit Colours')

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
              <h3>Edit Colours</h3>


                  {!! Form::model($colours, ['route' => ['colour.update', $colours->id], 'method' => 'PUT']) !!}

                  {{ Form::text('name', null, ["class" => 'form-control category-edit']) }}
                  {{ Form::text('hexvalue', null, ["class" => 'form-control category-edit']) }}

                  {{ Form::submit('Save Changes', ['class' => 'theme-btn btn-small']) }}

                  {!! Form::close() !!}

            </div>
          </div>

        </div>


      </div>
      <div class="col-sm-3 col-xs-6 product-description">

        <div class="well">
          {!! Form::open(['route' => 'colour.store', 'method' => 'POST']) !!}
          <h4>New Colour</h4>
          {{ Form::text('name', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter Colour Name']) }}
          {{ Form::text('hexvalue', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter Hexadecimal Value']) }}
          {{ Form::submit('Create New Colour', ['class' => 'theme-btn btn-small']) }}
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