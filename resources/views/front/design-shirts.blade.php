@extends('main')

@section('title', '| Design Shirts')

@section('content')
	<!-- BreadCrumbs Start -->
		<div class="breadcrumbs haslayout">
			<div class="container">
				<span class="page-title"></span>
			</div>
		</div>



            <!-- Top Ten Products Start -->
            <section class="topten-products haslayout padding-section parallax-window" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="images/bg-topten.jpg">
                <div class="container">

                	<div class="section-heading-others">
                        <div class="heading">
                            <h2>Design Shirts</h2>
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-3">
                            <figure class="frame-img">
                                <div class="banner-topten">
                                    <img src="images/front/male-shirt.jpg" alt="image description">
                                    <div class="img-hover">
                                        <div class="box">
                                            <div class="frame">
                                                <div class="border-center"></div>
                                                <div class="border-center">
                                                    <h2><span>Male Shirts</h2>
                                                </div>
                                                <a class="small-theme-btn" href="{{route('maleshirt.index')}}">Let's Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>

             


                        <div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-3">
                            <figure class="frame-img">
                                <div class="banner-topten">
                                    <img src="images/front/female-shirt.jpg" alt="image description">
                                    <div class="img-hover">
                                        <div class="box">
                                            <div class="frame">
                                                <div class="border-center"></div>
                                                <div class="border-center">
                                                    <h2><span>Female Shirts</span> </h2>
                                                </div>
                                                <a class="small-theme-btn" href="/female-shirts">Let's Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- Top Ten Products Start -->





@endsection