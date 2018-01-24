@extends('admin.layout.admin')

@section('title', '| Edit Miscellaneous Items')

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
              <h3>Edit Miscellaneous Items</h3>


              {!! Form::model($miscs, ['route' => ['misc.update', $miscs->id], 'files' => true, 'method' => 'PUT']) !!}

              {{ Form::text('name', null, ["class" => 'form-control category-edit']) }}

              {{ Form::text('price', null, ["class" => 'form-control category-edit']) }}

              <img src="{{url('images/miscs',$miscs->img_link)}}" height="200" width="200"/>


              {{Form::label('img_link', 'Upload Image')}}
              {{Form::file('img_link', ['class'=>'btn btn-small'])}}

              {{ Form::submit('Save Changes', ['class' => 'theme-btn btn-small']) }}

              {!! Form::close() !!}

            </div>
          </div>

        </div>


      </div>
      <div class="col-sm-3 col-xs-6 product-description">

        <div class="well">
          {!! Form::open(['route' => 'misc.store', 'files' => true, 'method' => 'POST']) !!}
          <h4>New Add Miscellaneous Item</h4>

          {{ Form::text('name', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter Collar Type Name']) }}

          {{ Form::text('price', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter Miscellaneous Item Price']) }}

          {{Form::label('img_link', 'Upload Image')}}
          {{Form::file('img_link', ['class'=>'btn btn-small'])}}

          {{ Form::submit('Create New Miscellaneous Item', ['class' => 'theme-btn btn-small']) }}
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