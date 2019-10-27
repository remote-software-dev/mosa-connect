<!DOCTYPE html>
<html lang="en" class="default-style">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">
    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{asset('mosaconnect/auth/css/login1.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('mosaconnect/auth/css/login2.css')}}" />

    <style>
        .btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            margin: 5px 0;
            opacity: 0.85;
            display: inline-block;
            font-size: 17px;
            line-height: 20px;
            text-decoration: none;
            /* remove underline from anchors */
        }

        .btn:hover {
            opacity: 1;
        }

        .fb {
            background-color: #3B5998;
            color: white;
        }

        .google {
            background-color: #dd4b39;
            color: white;
        }
    </style>
</head>

<body>
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <div class="authentication-wrapper authentication-3">
        <div class="authentication-inner">
            <div class="d-none d-lg-flex col-lg-8 align-items-center ui-bg-cover ui-bg-overlay-container p-5" style="background-image: url('/images/02.jpg');">
                <div class="ui-bg-overlay bg-dark opacity-50"></div>
                <!-- Text -->
                <div class="w-100 text-white px-5">
                    <h1 class="display-2 font-weight-bolder mb-4">
                        Mosa Connect
                    </h1>
                    <div class="text-large font-weight-light">
                        Database Alumni Modal Bangsa<br /> Project Implementation<br /> Management Information System (MIS)
                    </div>
                </div>
                <!-- /.Text -->
            </div>
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
                        <h4 style="" class="text-center text-lighter font-weight-normal mt-5 mb-0">bisa terkoneksi dengan </h4>

                        <a href="{{ route('login.provider', 'facebook') }}"  class="fb btn">
                            <i class="fa fa-facebook fa-fw"></i> {{ __('Facebook') }}
                        </a>
                        <a href="{{ route('login.provider', 'google') }}" class="google btn">
                            <i class="fa fa-google fa-fw"></i>  {{ __('Google') }}
                        </a>

                        


                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
        
</html>