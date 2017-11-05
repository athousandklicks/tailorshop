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
              <h3>Edit Pocket Hankerchiefs</h3>


                  {!! Form::model($pocketHankerchiefs, ['route' => ['pocketHankerchief.update', $pocketHankerchiefs->id], 'files' => true, 'method' => 'PUT']) !!}

                  {{ Form::text('name', null, ["class" => 'form-control category-edit']) }}

                  <img src="{{url('images/pocketHankerchiefs',$pocketHankerchiefs->img_link)}}" height="100" width="100"/>


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
          {!! Form::open(['route' => 'pocketHankerchief.store', 'files' => true, 'method' => 'POST']) !!}
          <h4>New Pocket Hankerchief</h4>
          {{ Form::text('name', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter Pocket Hankerchief Name']) }}
          {{Form::label('img_link', 'Upload Image')}}
              {{Form::file('img_link', ['class'=>'btn btn-small'])}}
          {{ Form::submit('Create New Pocket Hankerchief', ['class' => 'theme-btn btn-small']) }}
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