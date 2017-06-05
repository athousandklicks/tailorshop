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


      <div class="col-lg-9 col-md-9 col-sm-12">
        <div id="content" class="haslayout">
          <div class="product-detail haslayout">


            <div class="row">
              <div class="col-sm-5 col-xs-6 slider-product">
                <div class="product-slider">
                  <div id="sync1">
                    <div class="item">
                      <a class="prettyPhoto" data-rel="prettyPhoto[product]" href="/images/products/{{preg_replace('/\s+/', '_', $products->name)}}/{{$products->front_image}}">
                        <img src="/images/products/{{preg_replace('/\s+/', '_', $products->name)}}/{{$products->front_image}}" alt="The Tailor Shop">
                      </a>
                    </div>
                    <div class="item">
                      <a class="prettyPhoto" data-rel="prettyPhoto[product]" href="/images/products/{{preg_replace('/\s+/', '_', $products->name)}}/{{$products->back_image}}">
                        <img src="/images/products/{{preg_replace('/\s+/', '_', $products->name)}}/{{$products->back_image}}" alt="The Tailor Shop">
                      </a>
                    </div>
                    <div class="item">
                      <a class="prettyPhoto" data-rel="prettyPhoto[product]" href="/images/products/{{preg_replace('/\s+/', '_', $products->name)}}/{{$products->left_image}}">
                        <img src="/images/products/{{preg_replace('/\s+/', '_', $products->name)}}/{{$products->left_image}}" alt="The Tailor Shop">
                      </a>
                    </div>
                    <div class="item">
                      <a class="prettyPhoto" data-rel="prettyPhoto[product]" href="/images/products/{{preg_replace('/\s+/', '_', $products->name)}}/{{$products->right_image}}">
                        <img src="/images/products/{{preg_replace('/\s+/', '_', $products->name)}}/{{$products->right_image}}" alt="The Tailor Shop">
                      </a>
                    </div>

                  </div>
                  <div id="sync2">
                    <div class="item"><img src="/images/products/{{preg_replace('/\s+/', '_', $products->name)}}/{{$products->front_image}}" alt="The Tailor Shop"></div>
                    <div class="item"><img src="/images/products/{{preg_replace('/\s+/', '_', $products->name)}}/{{$products->back_image}}" alt="The Tailor Shop"></div>
                    <div class="item"><img src="/images/products/{{preg_replace('/\s+/', '_', $products->name)}}/{{$products->left_image}}" alt="The Tailor Shop"></div>
                    <div class="item"><img src="/images/products/{{preg_replace('/\s+/', '_', $products->name)}}/{{$products->right_image}}" alt="The Tailor Shop"></div>


                  </div>
                </div>
              </div>
              <div class="col-sm-7 col-xs-6 product-description">
                <div class="border-left">
                  <h3>{{$products->name}}</h3>
                </div>
                <div class="description">

                  <p>{{$products->description}}</p>

                </div>
                <div class="product-size">
                  <strong class="label">size:</strong>
                  <ul>
                    <li {{$products->small >= 1 ? "class=xl" : "class=s"}}><a>s</a></li><li class ="xxl"><a>{{$products->small}}</a></li></br>

                    <li {{$products->medium >= 1 ? "class=xl" : "class=s"}}><a>m</a></li><li class ="xxl"><a>{{$products->medium}}</a></li></br>
                    <li {{$products->large >= 1 ? "class=xl" : "class=s"}}><a>l</a></li><li class ="xxl"><a>{{$products->large}}</a></li></br>
                    <li {{$products->xlarge >= 1 ? "class=xl" : "class=s"}}><a>xl</a></li><li class ="xxl"><a>{{$products->xlarge}}</a></li></br>
                    <li {{$products->xxlarge >= 1 ? "class=xl" : "class=s"}}><a>2xl</a></li><li class ="xxl"><a>{{$products->xxlarge}}</a></li></br>
                  </ul>

                </div>
                <div class="product-color">
                  <strong class="label">color:</strong>
                  <ul>
                    @foreach ($products->colours as $colour)
                    <li style="background:{{ $colour->hexvalue }};"><a></a></li>
                    @endforeach
                  </ul>
                </div>

                <div class="product-color">
                  <strong class="label">Price: </strong>
                  <ul>
                    <h3>{{$products->price}}</h3>           
                  </div>

                  <div class="product-color">
                    <strong class="label">Category: </strong>
                    <ul>
                      <h3>{{$products->category->name}}</h3>           
                    </div>

                    <div class="product-color">
                      <strong class="label">Created On: </strong>
                      <ul>
                        <h3>{{$products->created_at->toFormattedDateString()}}</h3>       
                      </div>

                      <div class="product-color">
                        <strong class="label">Last Updated: </strong>
                        <ul>
                          <h3>{{$products->updated_at->toFormattedDateString()}}</h3>       
                        </div>

                        <div class="products-btns">
                          <a href="{{route('product.index')}}" class="theme-btn btn-buynow">View all Products</a>
                        </div>
                      </div>
                    </div>


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