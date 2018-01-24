@extends('admin.layout.admin')

@section('title', '| Add Fabric')

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
              <h3>Fabrics</h3>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Thumbnail</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>

                <tbody>
                 @foreach ($fabrics as $fabric)               
                 <tr>

                  <td>{{ $fabric->id }}</td>
                  <td><img src="{{url('images/fabrics',$fabric->image)}}" height="50" width="50"/></td>
                  <td>{{ $fabric->name }}</td>
                  <td>
                    <i class="btn-action"><a href="{{route('fabric.edit', $fabric->id)}}" class="fa fa-edit"></a></i>
                  </td>
                  <td>{!!Form::open(['route' => ['fabric.destroy', $fabric->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])
                    !!}

                    {!! Form::button('<i class="fa fa-trash-o"></i>', ['type' => 'submit', 'class' => 'btn-action', ]) 
                    !!}
                    {!!Form::close()!!}
                  </td>

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
        {!! Form::open(['route' => 'fabric.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}
        <h4>Create New Fabric</h4>

        {{ Form::text('name', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter Fabric Name']) }}

        {{ Form::text('fabric_id', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter Fabric ID']) }}

        {{ Form::text('material', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter Material']) }}

        {{ Form::number('price', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter Price', 'step' => '0.1']) }}

        {{ Form::text('season', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter Season']) }}

        {{ Form::text('ply', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter Ply']) }}

        {{ Form::text('thread_count', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter Thread Count']) }}

        {{ Form::text('weight', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter Weight']) }}

        {{Form::label('image', 'Upload Fabric *')}}
        {{Form::file('image', ['class'=>'btn btn-small'])}}

        {{ Form::submit('Create New Fabric', ['class' => 'theme-btn btn-small']) }}
        {!! Form::close() !!}
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