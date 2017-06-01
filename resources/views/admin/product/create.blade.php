@extends('admin.layout.admin')

@section('title', '| Dashboard - Create Product')

@section('stylesheet')
{!!Html::style('/css/select2.min.css')!!}
{!!Html::style('/css/parsley.css')!!}
@endsection

@section('content')


<!-- BreadCrumbs Start -->
<div class="breadcrumbs haslayout">
  <div class="container">
  </div>
</div>
<!-- BreadCrumbs End -->



<!-- Main Start -->
<div id="main" class="haslayout padding-section products-listing">
  <div class="container">
    <div class="row">


      <aside id="sidebar" class="col-lg-3 col-md-3 col-sm-12 col-sx-12">
        @include('admin.layout.includes.sidenav')
      </aside>

      <div class="col-lg-9 col-md-9 col-sm-12 pull-right">
        <div id="content" class="haslayout">

          {!! Form::open(['route' => 'product.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}
          <fieldset>
            <div class="border-left"><h2>Add Product</h2></div>



            <div class="row">
              <div class="form-group col-sm-9 col-xs-12">
                {{Form::label('name', 'Name *')}}
                {{Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Enter Product Name & a Short Description'])}}
              </div>
            </div>

            <div class="row">
              <div class="form-group col-sm-9 col-xs-12">
                {{Form::label('description', 'Description *')}}
                {{Form::textarea('description', null, ['class' => 'form-control', 'placeholder'=>'Enter Product\'s Full Description', 'rows' => 5])}}
              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-9 col-xs-12">
                {{Form::label('price', 'Unit Price *')}}
                {{Form::text('price', null, ['class' => 'form-control', 'placeholder'=>'Enter Product Unit Price'])}}
              </div>
            </div>

            <div class="row">
              <div class="form-group col-sm-9 col-xs-12">
                {{Form::label('category_id', 'Product Category *')}}
                {{Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder'=>'Select Product Category'])}}
              </div>
            </div>
<!--
{{--
            <div class="row">
              <div class="form-group col-sm-9 col-xs-12">
              {{ Form::label('sizes', 'Choose Sizes * (Select Multiple Sizes)') }}
                <select class="form-control sizes" name="sizes[]" multiple="multiple">
                  @foreach($sizes as $size)
                  <option value='{{ $size->id }}'>{{ $size->sizes }}</option>
                  @endforeach
                </select>
              </div>
            </div> 
      --}}
-->
            <div class="row">
              <div class="form-group col-sm-9 col-xs-12">
              {{ Form::label('colours', 'Choose Colours * (Select Multiple Colours)') }}
                <select class="form-control colours" name="colours[]" multiple="multiple">
                  @foreach($colours as $colour)
                  <option value='{{ $colour->id }}'>{{ $colour->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="col-sm-12 col-xs-12">
                <div class="border-left"><h4>Enter Quantity of Each Size</h4></div>
              </div>
            </div>


            <div class="row">
              <div class="form-group col-sm-9 col-xs-12">
                <div class="dateofbirth">

                  {{Form::text('small', null, ['class' => 'form-control', 'placeholder'=>'Small'])}}
                </div>
                <div class="dateofbirth">
                  {{Form::text('medium', null, ['class' => 'form-control', 'placeholder'=>'Medium'])}}
                </div>
                <div class="dateofbirth">
                  {{Form::text('large', null, ['class' => 'form-control', 'placeholder'=>'Large'])}}
                </div>
                <div class="dateofbirth">
                  {{Form::text('xlarge', null, ['class' => 'form-control', 'placeholder'=>'X Large'])}}
                </div>
                <div class="dateofbirth">
                  {{Form::text('xxlarge', null, ['class' => 'form-control', 'placeholder'=>'XX Large'])}}
                </div>
              </div>
            </div>

            <hr>
            <div class="row">
              <div class="col-sm-12 col-xs-12">
                <div class="border-left"><h4>Product Images</h4></div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-6 col-xs-12">
               {{Form::label('front_image', 'Upload Product\'s Front View Image *')}}
               {{Form::file('front_image', ['class'=>'btn btn-default'])}}
             </div>
           </div>
           <div class="row">
            <div class="form-group col-sm-6 col-xs-12">
             {{Form::label('back_image', 'Upload Product\'s Back View Image *')}}
             {{Form::file('back_image', ['class'=>'btn btn-default'])}}
           </div>
         </div>
         <div class="row">
          <div class="form-group col-sm-6 col-xs-12">
           {{Form::label('left_image', 'Upload Product\'s Left-side View Image *')}}
           {{Form::file('left_image', ['class'=>'btn btn-default'])}}
         </div>
       </div>
       <div class="row">
        <div class="form-group col-sm-6 col-xs-12">
         {{Form::label('right_image', 'Upload Product\'s Right-side View Image *')}}
         {{Form::file('right_image', ['class'=>'btn btn-default'])}}
       </div>
     </div>
     <div class="row">
      <div class="form-group col-sm-6 col-xs-12">
       {{Form::label('detailed_image', 'Upload Product Detailed Image *')}}
       {{Form::file('detailed_image', ['class'=>'btn btn-default'])}}
     </div>
   </div>

   <div class="row">
    <div class="form-group col-sm-6 col-xs-6 full-widthsx">
      {{Form::submit('Add Product', ['class'=>'btn btn-primary'])}}
    </div>
  </div>
</fieldset>
{!! Form::close() !!}

</div>
</div>





</div>
</div>
</div>

<!-- Main End -->


@endsection

@section('scripts')
{!! Html::script('/js/parsley.min.js')!!}
{!! Html::script('/js/select2.min.js')!!}

<script type="text/javascript">
  $('.colours').select2();
</script>

<script type="text/javascript">
  $('.sizes').select2();
</script>

@endsection