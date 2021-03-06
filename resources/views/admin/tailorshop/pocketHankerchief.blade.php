@extends('admin.layout.admin')

@section('title', '| Add Pocket Hankerchief')

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
              <h3>Pocket Hankerchiefs</h3>
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
                 @foreach ($pocketHankerchiefs as $pocketHankerchief)               
                 <tr>
                  <td>{{ $pocketHankerchief->id }}</td>
                  <td><img src="{{url('images/pocketHankerchiefs',$pocketHankerchief->img_link)}}" height="50" width="50"/></td>
                  <td>{{ $pocketHankerchief->name }}</td>
                  <td>
                    <i class="btn-action"><a href="{{route('pocketHankerchief.edit', $pocketHankerchief->id)}}" class="fa fa-edit"></a></i>
                  </td>
                  <td>{!!Form::open(['route' => ['pocketHankerchief.destroy', $pocketHankerchief->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])
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
        {!! Form::open(['route' => 'pocketHankerchief.store', 'files' => true, 'method' => 'POST']) !!}
        <h4>New Pocket Hankerchief</h4>
        {{ Form::text('name', null, ['class' => 'form-control coupon', 'placeholder'=>'Enter PocketHankerchief Name']) }}
        {{Form::label('img_link', 'Upload Image')}}
        {{Form::file('img_link', ['class'=>'btn btn-small'])}}
        {{ Form::submit('Create New PocketHankerchief', ['class' => 'theme-btn btn-small']) }}
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