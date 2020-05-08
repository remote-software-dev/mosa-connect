<!DOCTYPE html>
<html lang="en" class="default-style">

<head>
    @include('auth.layouts.partials.head')
</head>

<body>
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <div class="authentication-wrapper authentication-3">
        <div class="authentication-inner">
            @include('auth.layouts.partials.aside')
            <div class="d-flex col-lg-4 align-items-center bg-white p-5">
                <div class="d-flex col-sm-7 col-md-5 col-lg-12 px-0 px-xl-4 mx-auto">
                    <div class="w-100">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="ui-w-140">
                                <div class="w-100 position-relative pb-3">
                                    <img class="w-100" src="{{asset('mosaconnect/auth/images/kamimosa.png')}}" width="480" height="60" />
                                </div>
                            </div>
                        </div>
                        @yield('content')

                        @include('auth.layouts.partials.social')
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>


</html>