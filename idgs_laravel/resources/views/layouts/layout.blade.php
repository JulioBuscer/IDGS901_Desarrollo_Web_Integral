<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Dimension by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <noscript>
        <link rel="stylesheet" href="{{asset('css/noscript.css')}}" />
    </noscript>
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="logo">
                <span class="icon fa-gem"></span>
            </div>
            <div class="content">
                <div class="inner">
                    <h1>
                        <h1>Bienvenido 
                        @if(Auth::user())
                        {{Auth::user()->name}}
                        @endif
                        al sistema de IDGS </h1>
                    </h1>
                    <p>
                        @yield('titulo')
                        @yield('content')</p>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href=" {{route('home')}} ">Home</a></li>
                    <li><a href=" {{URL::to('/mision')}} ">mision</a></li>
                    <li><a href=" {{URL::to('/vision')}} ">vision</a></li>
                    <li><a href=" {{route('users.index')}} ">Usuarios</a></li>
                    @if(Auth::user())
                    <li><a href=" {{route('logout')}} ">Logout</a></li>
                    @else
                    <li><a href=" {{URL::to('/register')}} ">Registrarse</a></li>
                    @endif
                    <!--<li><a href="#elements">Elements</a></li>-->
                </ul>
            </nav>
        </header>
        <!-- Footer -->
        <footer id="footer">
            <p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
        </footer>

    </div>

    <!-- BG -->
    <div id="bg"></div>

    <!-- Scripts -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/browser.min.js')}}"></script>
    <script src="{{asset('js/breakpoints.min.js')}}"></script>
    <script src="{{asset('js/util.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="undefined" crossorigin="anonymous"></script>

</body>

</html>