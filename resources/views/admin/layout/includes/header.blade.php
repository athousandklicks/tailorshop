        <header id="header" class="haslayout">
            <div class="top-bar haslayout">
                <div class="container">
                    <div class="col-md-6 col-sm-3 col-xs-6 pull-left">
                        <div class="row">
                            <span class="phone">
                                <i class="glyphicon glyphicon-phone"></i>
                                <em>+440 875369208</em>
                            </span>
                            <span class="email">
                                <i class="glyphicon glyphicon-send"></i>
                                <em><a href="info@sitename.com">info@sitename.com</a></em>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-3 col-xs-6 pull-right">
                        <div class="row">

                            <div class="dropdown languages">
                                <ul class="dropdown-menu languages" aria-labelledby="languages">
                                    <li><a href="{{url('/')}}">Front End</a></li>
                                    <li> <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"> Logout</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    {{ csrf_field() }}
                                        </form></li>
                                    </ul>
                                    <button class="btn-dropdown btn-languages" type="button" id="languages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <em class="fa fa-user"></em>
                                        <span>{{Auth::user()->name}}</span>
                                        <em class="fa fa-caret-down"></em>
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="mid-bar haslayout">
                    <div class="container">
                        <form class="form-search pull-left">
                            <fieldset>
                                <input type="text" placeholder="Search">
                                <i class="fa fa-search"></i>
                            </fieldset>
                        </form>
                        <div class="cart pull-right btn-dropdown btn-cart">
                            <button class="btn-badge" type="button" id="cart" data-toggle="dropdown" aria-haspopup="true">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="badge">2</span>
                                <em>$337.00</em>
                            </button>
                            <div class="dropdown-menu cart-item" aria-labelledby="cart"> 
                                <strong class="title">Recently added item(s)</strong>
                                <ul class="cart-list">
                                    <li>
                                        <div class="product-img">
                                            <img src="images/img1.jpg" alt="image description">
                                        </div>
                                        <div class="detail">
                                            <span class="product-title">Pearl Izumi Men's E:Motion Tri N1 Neutral Race Shoe</span>
                                            <span class="quantity">1 x $124.99</span>
                                        </div>
                                        <i class="btn-delete-item"><a class="fa fa-remove" href="#"></a></i>
                                    </li>
                                    <li>
                                        <div class="product-img">
                                            <img src="images/img1.jpg" alt="image description">
                                        </div>
                                        <div class="detail">
                                            <span class="product-title">Pearl Izumi Men's E:Motion Tri N1 Neutral Race Shoe</span>
                                            <span class="quantity">1 x $124.99</span>
                                        </div>
                                        <i class="btn-delete-item">
                                            <a class="fa fa-remove" href="#"></a>
                                        </i>
                                    </li>
                                </ul>
                                <div class="btn-area">
                                    <a href="cart.html" class="theme-btn btn-viewall">View All</a>
                                    <a href="checkout.html" class="theme-btn btn-checkout">Checkout</a>
                                </div>
                            </div>
                        </div>
                        <strong class="logo">
                        <a href="{{route('admin.index')}}">
                                <img src="images/logo.png" alt="image description">
                            </a>
                        </strong>
                    </div>
                </div>
                <nav id="nav" class="haslayout navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul>


                                <li class="{{Request::is('/') ? "active" : ""}}"><a href="/">Home</a></li>

                                <li class="{{Request::is('about') ? "active" : ""}}"><a href="/about">About</a></li>

                                <li class="{{Request::is('women') ? "active" : ""}}"><a href="/women">Women</a></li>

                                <li class="{{Request::is('men') ? "active" : ""}}"><a href="/men">Men</a></li>

                                <li class="{{Request::is('accessories') ? "active" : ""}}"><a href="/accessories">Accessories</a></li>

                                <li class="{{Request::is('online_design') ? "active" : ""}}">
                                    <span class="nav-tag-holder"><span class="nav-tag">Signature Feature</span></span>
                                    <a href="/online_design">Online Design</a></li>

                                    <li class="{{Request::is('contact') ? "active" : ""}}"><a href="/contact">Contact</a></li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>