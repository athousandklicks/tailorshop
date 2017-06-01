@extends('admin.layout.admin')

@section('title', '| Add Product Sizes')

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
              <h3>Product Sizes</h3>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Size Names</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>

                <tbody>
                 @foreach ($sizes as $size)               
                 <tr>
                  <td>{{ $size->id }}</td>
                  <td>{{ $size->sizes }}</td>
                  <td>
                    <i class="btn-action"><a href="{{route('size.edit', $size->id)}}" class="fa fa-edit"></a></i>
                  </td>
                  <td>{!!Form::open(['route' => ['size.destroy', $size->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])
                    !!}

                    {!! Form::button('<i class="fa fa-trash-o"></i>', ['type' => 'submit', 'class' => 'btn-action', ]) 
                    !!}
                  </td>
                  {!!Form::close()!!}
                </tr>
                @endforeach
              </tbody>
            </table>

          </div>
        </div>

      </div>


    </div>
    <div class="col-sm-3 col-xs-6 product-description">

      <div class="well">
        {!! Form::open(['route' => 'size.store', 'method' => 'POST']) !!}
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


<script type="text/javascript">
  @include('admin.layout.includes.confirm_delete')
</script>


</div>
</div>
</div>

<!-- Main End -->


@endsection