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
<script>
    $(function() {
        $("#dob").datepicker({
            format: 'yyyy-mm-dd',
            // format: 'dd/mm/yyyy',
            todayHighlight: true,
            autoclose: true,
            uiLibrary: 'bootstrap4'
        });
    });
</script>
</html>