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
<div id="main" class="haslayout padding-section products-listing">
  <div class="container">
    <div class="row">


      <aside id="sidebar" class="col-lg-3 col-md-3 col-sm-12 col-sx-12">
        @include('admin.layout.includes.sidenav')
      </aside>

      <div class="col-lg-9 col-md-9 col-sm-12 pull-right">
        <div id="content" class="haslayout">

          <div class="admin_products haslayout">
            <div class="row">

              <table class="table cart-table">
                <thead>
                  <tr>
                    <th>Name/Description</th>
                    <th>Unit Price</th>
                    <th>Stock Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                 @forelse($products as $product)
                 @php 
                      $stock_status = $product->small + $product->large + $product->medium + $product->xlarge + $product->xxlarge;
                 @endphp

                 <tr>
                  <td data-title="Product Name">
                    <img src="images/products/{{preg_replace('/\s+/', '_', $product->reference_no)}}/{{$product->front_image}}" width="90" height="90" alt="image description">
                    <em>{{$product->name}}</em>
                  </td>
                  <td data-title="Unit Price">$ {{$product->price}}</td>
                  <td data-title="Stock Status">{{$stock_status
                   >= 1 ? "In Stock": "Out of Stock"}} ({{$stock_status}})</td>

                  <td data-title="Remove Item">
                  {!!Form::open(['route' => ['product.destroy', $product->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])
                    !!}

                    {!! Form::button('<i class="fa fa-trash-o"></i>', ['type' => 'submit', 'class' => 'btn-delete-item' ]) !!}
                      {!!Form::close()!!}

                  <i class="btn-delete-item"><a href="{{route('product.edit', $product->id)}}" class="fa fa-edit"></a></i>
                  <i class="btn-delete-item"><a href="{{route('product.show', $product->id)}}" class="fa fa-eye"></a></i>

                  </td>
                </tr>
                @empty
                <tr>
                  <td data-title="Unit Price"><h3>No products</h3></td>

                </tr>
                @endforelse

              </tbody>
            </table>

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