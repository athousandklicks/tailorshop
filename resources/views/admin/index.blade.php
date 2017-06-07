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



          <div class="col-lg-9 col-md-9 col-sm-12 pull-right">
            <div id="content" class="haslayout">

              <div class="admin_products haslayout">
                <div class="row">



                  <div class="col-sm-4 col-xs-6 product">
                    <div class="product-img">
                      <img src="/images/img26.jpg" alt="image description">
                      <div class="img-hover">
                        <div class="holder">
                          <a class="icon glyph-icon flaticon-plus79" href="#"></a>
                        </div>
                      </div>
                      <div class="price-tag">
                        <div class="price-holder">No of Registered Customers</div>
                      </div>
                    </div>

                  </div>



                  <div class="col-sm-4 col-xs-6 product">
                    <div class="product-img">
                      <img src="/images/img27.jpg" alt="image description">
                      <div class="img-hover">
                        <div class="holder">
                          <a class="icon glyph-icon flaticon-plus79" href="#"></a>
                        </div>
                      </div>
                      <div class="price-tag">
                        <div class="price-holder">Products in Store</div>
                      </div>
                    </div>
                    <div class="detail">
                     
                    </div>
                  </div>




                  <div class="col-sm-4 col-xs-6 product">
                    <div class="product-img">
                      <img src="/images/img28.jpg" alt="image description">
                      <div class="img-hover">
                        <div class="holder">
                          <a class="icon glyph-icon flaticon-plus79" href="#"></a>
                        </div>
                      </div>
                      <div class="price-tag">
                        <div class="price-holder">No Categories</div>
                      </div>
                    </div>
                    <div class="detail">
   
                    </div>
                  </div>




                  <div class="col-sm-4 col-xs-6 product">
                    <div class="product-img">
                      <img src="/images/img29.jpg" alt="image description">
                      <div class="img-hover">
                        <div class="holder">
                          <a class="icon glyph-icon flaticon-plus79" href="#"></a>
                        </div>
                      </div>
                      <div class="price-tag">
                        <div class="price-holder">This Week's Orders</div>
                      </div>
                    </div>
                    <div class="detail">
                   </div>   
                  </div>




                  <div class="col-sm-4 col-xs-6 product">
                    <div class="product-img">
                      <img src="/images/img30.jpg" alt="image description">
                      <div class="img-hover">
                        <div class="holder">
                          <a class="icon glyph-icon flaticon-plus79" href="#"></a>
                        </div>
                      </div>
                      <div class="price-tag">
                        <div class="price-holder">This Week's Sales</div>
                      </div>
                    </div>
                    <div class="detail">
                     
                    </div>
                  </div>




                  <div class="col-sm-4 col-xs-6 product">
                    <div class="product-img">
                      <img src="/images/img31.jpg" alt="image description">
                      <div class="img-hover">
                        <div class="holder">
                          <a class="icon glyph-icon flaticon-plus79" href="#"></a>
                        </div>
                      </div>
                      <div class="price-tag">
                        <div class="price-holder">$199</div>
                      </div>
                    </div>
                    <div class="detail">
                      
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>





          <aside id="sidebar" class="col-lg-3 col-md-3 col-sm-12 col-sx-12">
			@include('admin.layout.includes.sidenav')
          </aside>


        </div>
      </div>
    </div>
    <!-- Main End -->


@endsection