<!DOCTYPE html>
<html lang="en">

    <head>
        @include('admin.layout.includes.head')
    </head>

    <body class="home">

    <!-- Wrapper Start -->
    <div id="wrapper">

        <header id="header" class="haslayout">
           @include('admin.layout.includes.header') 
        </header>

        <div class="banner haslayout">
            @yield('slider')
        </div>

        <div id="main">
            @yield('content')
        </div>

        <footer id="footer" class="footer haslayout">
            @include('admin.layout.includes.footer')
        </footer>

    </div>
    <!-- Wrapper End -->

        @include('admin.layout.includes.javascript')

        @yield('scripts')
        
    </body>
    
</html>