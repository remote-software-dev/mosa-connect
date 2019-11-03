<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.partials.head')
</head>

<body>
    <div class="wrapper">
        @include('layouts.partials.header')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

<script type="text/javascript" src="{{asset('mosaconnect/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('mosaconnect/js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('mosaconnect/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('mosaconnect/js/jquery.mCustomScrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('mosaconnect/lib/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('mosaconnect/js/scrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('mosaconnect/js/script.js')}}"></script>

</html>