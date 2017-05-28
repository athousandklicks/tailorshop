@extends('main')

@section('title', '| Welcome to Tailorshop')

@section('slider')
    <div class="banner haslayout">
        @include('partials._slider')
    </div>
@endsection



@section('content')
<div id="main">
            <!-- About Us Start -->
            <section class="aboutus padding-section haslayout">
                <div class="container">
                    <div class="section-heading">
                        <div class="heading">
                            <h2>the alteration shop</h2>
                            <span class="subheading">Lorem ipsum dolor sit consectetuer</span>
                        </div>
                    </div>
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="row">
                            <div class="row">
                                <div class="col-sm-5">
                                    <figure class="frame-img">
                                        <img src="images/img1.jpg" alt="image description">
                                    </figure>
                                </div>
                                <div class="col-sm-7">
                                    <div class="border-left">
                                        <h3>about us</h3>
                                    </div>
                                    <div class="description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
                                        <p>exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.Ut enim ad minim veniam. Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam. Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Us End -->
            <!-- Products Start -->
            <section class="products padding-section haslayout">
                <div class="container">
                    <div class="section-heading">
                        <div class="heading">
                            <h2>Featured Products</h2>
                            <span class="subheading">Lorem ipsum dolor sit consectetuer</span>
                        </div>
                    </div>
                    <div id="product-slider" class="product-slider haslayout">
                       @forelse($shirts->chunk(4) as $chunk)
                            @foreach($chunk as $shirt)  
                        <div class="item product">
                            <div class="product-img">
                                <img src="images/img2.jpg" alt="image description">
                                <div class="cart-badge">
                                    <span class="corner"></span>
                                </div>
                                <div class="img-hover">
                                    <div class="holder">
                                        <a class="icon glyph-icon flaticon-plus79" href="#"></a>{{$shirt->description}}
                                    </div>
                                </div>
                            </div>
                            <div class="detail">
                                <span class="title">{{$shirt->name}}</span>
                                <span class="price">${{$shirt->price}}</span>
                            </div>
                        </div>

                            @endforeach
                            @empty
                                <h3>No shirts</h3>
                            @endforelse

                    </div>
                </div>
            </section>
            <!-- Products End -->
            <!-- Top Ten Products Start -->
            <section class="topten-products haslayout padding-section parallax-window" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="images/bg-topten.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
                            <figure class="frame-img">
                                <div class="banner-topten">
                                    <img src="images/img6.jpg" alt="image description">
                                    <div class="img-hover">
                                        <div class="box">
                                            <div class="frame">
                                                <div class="border-center"></div>
                                                <div class="border-center">
                                                    <h2><span>Design your</span>dress Online</h2>
                                                </div>
                                                <a class="small-theme-btn" href="#">DESIGN Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="col-md-8 col-md-offset-0 col-sm-10 col-sm-offset-1">
                            <div class="row">
                                <div class="col-sm-6 col-xs-6 full-widthsx">
                                    <div class="topten-product">
                                        <img alt="image description" src="images/img7.jpg">
                                        <div class="img-hover">
                                            <div class="holder">
                                                <h2>top 10 coat</h2>
                                                <div class="description">
                                                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem.</p>
                                                </div>
                                                <a href="#">View Now »</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-6 full-widthsx">
                                    <div class="topten-product">
                                        <img alt="image description" src="images/img7.jpg">
                                        <div class="img-hover">
                                            <div class="holder">
                                                <h2>top 10 kirts</h2>
                                                <div class="description">
                                                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem.</p>
                                                </div>
                                                <a href="#">View Now »</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-6 full-widthsx">
                                    <div class="topten-product">
                                        <img alt="image description" src="images/img7.jpg">
                                        <div class="img-hover">
                                            <div class="holder">
                                                <h2>top 10 Shirts</h2>
                                                <div class="description">
                                                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem.</p>
                                                </div>
                                                <a href="#">View Now »</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-6 full-widthsx">
                                    <div class="topten-product">
                                        <img alt="image description" src="images/img7.jpg">
                                        <div class="img-hover">
                                            <div class="holder">
                                                <h2>top 10 Pants</h2>
                                                <div class="description">
                                                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem.</p>
                                                </div>
                                                <a href="#">View Now »</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Top Ten Products Start -->
            <!-- Company Info Start -->
            <section class="company-info padding-section haslayout">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="col service">
                                <div class="border-left">
                                    <h3>Our Services</h3>
                                </div>
                                <figure>
                                    <img src="images/img8.jpg" alt="image description">
                                </figure>
                                <div class="description">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                                <a href="#">Read More »</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="col formation">
                                <div class="border-left">
                                    <h3>information</h3>
                                </div>
                                <div class="description">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                                <ul>
                                    <li>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</li>
                                    <li>Mirum est notare quam littera gothica, quam nunc putamus parum claram.</li>
                                    <li>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming.</li>
                                    <li>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="col info">
                                <div class="border-left">
                                    <h3>Compnay address</h3>
                                </div>
                                <div class="description">
                                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                </div>
                                <ul class="address-info">
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <address>795 South Park Avenue, Door 6 Wonderland, CA 94107, Australia</address>
                                    </li>
                                    <li>
                                        <i class="fa fa-mobile-phone"></i>
                                        <em>+440 875369208</em>
                                    </li>
                                    <li>
                                        <i class="fa fa-paper-plane"></i>
                                        <em><a href="support@sitename.com">support@sitename.com</a></em>
                                    </li>
                                </ul>
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </div>
            <!-- Company Info Start -->

@endsection