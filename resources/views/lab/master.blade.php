<html>
    <head>
        <title>@yield('title')</title>
        @include('lab.css')
    </head>
    <body>
    <h1>Laravel Master</h1>
	    @yield('content')
    </body>
    @include('lab.scripts')
</html>
