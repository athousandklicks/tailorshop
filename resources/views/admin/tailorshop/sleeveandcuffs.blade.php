@extends('admin.layout.admin')

@section('title', '| Add Sleeve and Cuffs')

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
              <h3>Sleeve and Cuffs</h3>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>

                <tbody>
                 @foreach ($sleeveAndCuffs as $sleeveAndCuff)               
                 <tr>
                  <td>{{ $sleeveAndCuff->id }}</td>
                  <td>{{ $sleeveAndCuff->name }}</td>
                  <td>
                    <i class="btn-action"><a href="{{route('sleeveAndCuff.edit', $sleeveAndCuff->id)}}" class="fa fa-edit"></a></i>
                  </td>
                  <td>{!!Form::open(['route' => ['sleeveAndCuff.destroy', $sleeveAndCuff->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])
                    !!}
                    {{csrf_field()}}

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
        {!! Form::open(['route' => 'sleeveAndCuff.store', 'method' => 'POST']) !!}
        <h4>New Sleeve and Cuffs</h4>
        {{ Form::text('name', null, ['class' => 'form-control coupon', 'placeholder'=>'Select Sleeve and Cuffs']) }}
        {{ Form::submit('Create New Sleeve and Cuffs', ['class' => 'theme-btn btn-small']) }}
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