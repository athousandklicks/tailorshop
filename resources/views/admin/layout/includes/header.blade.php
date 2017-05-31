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

                        <strong class="logo">
                        <a href="{{route('admin.index')}}">
                                <img src="/images/logo.png" alt="image description">
                            </a>
                        </strong>
                    </div>
                </div>

                </header>