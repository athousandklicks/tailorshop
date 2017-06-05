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

          {!! Form::model($product, ['route' => ['product.update', $product->id], 'method' => 'PUT', 'files' => true, 'data-parsley-validate'=>'']) !!}

          <fieldset>
            <div class="border-left"><h2>Edit Product</h2></div>



            <div class="row">
              <div class="form-group col-sm-9 col-xs-12">
                {{Form::label('name', 'Name *')}}
                {{Form::text('name', null, ['class' => 'form-control'])}}
              </div>
            </div>

            <div class="row">
              <div class="form-group col-sm-9 col-xs-12">
                {{Form::label('description', 'Description *')}}
                {{Form::textarea('description', null, ['class' => 'form-control', 'rows' => 5])}}
              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-9 col-xs-12">
                {{Form::label('price', 'Unit Price *')}}
                {{Form::text('price', null, ['class' => 'form-control'])}}
              </div>
            </div>

            <div class="row">
              <div class="form-group col-sm-9 col-xs-12">
                {{Form::label('category_id', 'Product Category *')}}
                {{Form::select('category_id', $categories, null, ['class' => 'form-control'])}}
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

        {{ Form::select('colours[]', $colours, null, ['class' => 'form-control colours', 'multiple' => 'multiple']) }}
      </div>
    </div>

    <hr>

    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="border-left"><h4>Update Quantity of Each Size</h4></div>
      </div>
    </div>


    <div class="row">
      <div class="form-group col-sm-9 col-xs-12">
        <div class="dateofbirth">
          {{ Form::label('small', 'Small:') }}
          {{Form::text('small', null, ['class' => 'form-control'])}}
        </div>
        <div class="dateofbirth">
          {{ Form::label('medium', 'Medium:') }}
          {{Form::text('medium', null, ['class' => 'form-control'])}}
        </div>
        <div class="dateofbirth">
          {{ Form::label('large', 'Large:') }}
          {{Form::text('large', null, ['class' => 'form-control'])}}
        </div>
        <div class="dateofbirth">
          {{ Form::label('xlarge', 'Extra Large:', ['class' => 'form-spacing-top']) }}
          {{Form::text('xlarge', null, ['class' => 'form-control'])}}
        </div>
        <div class="dateofbirth">
          {{ Form::label('xxlarge', '2 Extra Large:', ['class' => 'form-spacing-top']) }}
          {{Form::text('xxlarge', null, ['class' => 'form-control'])}}
        </div>
      </div>
    </div>

    <hr>
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="border-left"><h4>Update Product Images</h4></div>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-sm-6 col-xs-12">
        <img src="/images/products/{{preg_replace('/\s+/', '_', $product->name)}}/{{$product->front_image}}" alt="The Tailor Shop" width="200" height="300">
        {{Form::label('front_image', 'UPDATE Front View Image *')}}
        {{Form::file('front_image', ['class'=>'btn btn-default'])}}
      </div>
        <div class="form-group col-sm-6 col-xs-12">
        <img src="/images/products/{{preg_replace('/\s+/', '_', $product->name)}}/{{$product->back_image}}" alt="The Tailor Shop" width="200" height="300">
       {{Form::label('back_image', 'UPDATE Back View Image *')}}
       {{Form::file('back_image', ['class'=>'btn btn-default'])}}
     </div>
    </div>

   <div class="row">
    <div class="form-group col-sm-6 col-xs-12">
    <img src="/images/products/{{preg_replace('/\s+/', '_', $product->name)}}/{{$product->left_image}}" alt="The Tailor Shop" width="200" height="300">
     {{Form::label('left_image', 'UPDATE Left-side View Image *')}}
     {{Form::file('left_image', ['class'=>'btn btn-default'])}}
   </div>
     <div class="form-group col-sm-6 col-xs-12">
  <img src="/images/products/{{preg_replace('/\s+/', '_', $product->name)}}/{{$product->right_image}}" alt="The Tailor Shop" width="200" height="300">
   {{Form::label('right_image', 'UPDATE Right-side View Image *')}}
   {{Form::file('right_image', ['class'=>'btn btn-default'])}}
 </div>
 </div>


<div class="row">
  <div class="form-group col-sm-6 col-xs-6 full-widthsx">
    {{Form::submit('Update Product', ['class'=>'btn btn-primary'])}}
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
{!! Html::script('/js/parsley.min.js')!!}allRelatedIds
{!! Html::script('/js/select2.min.js')!!}

<script type="text/javascript">
  $('.colours').select2();
  $('.colours').select2().val({!! json_encode($product->colours()->allRelatedIds()) !!}).trigger('change');
</script>

<script type="text/javascript">
  $('.sizes').select2();
</script>

@endsection