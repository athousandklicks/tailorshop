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
                 <tr>
                  <td data-title="Product Name">
                    <img src="images/shop/img6.jpg" width="90" height="90" alt="image description">
                    <em>{{$product->name}}</em>
                  </td>
                  <td data-title="Unit Price">$ {{$product->price}}</td>
                  <td data-title="Stock Status">{{$product->stock_status >= 1 ? "In Stock": "Out of Stock"}} ({{$product->stock_status}})</td>
                  <td data-title="Remove Item">
                  <i class="btn-delete-item"><a href="#" class="fa fa-remove"></a></i>
                  <i class="btn-delete-item"><a href="#" class="fa fa-edit"></a></i>
                  <i class="btn-delete-item"><a href="#" class="fa fa-eye"></a></i>

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





  </div>
</div>
</div>

<!-- Main End -->


@endsection