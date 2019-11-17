@extends('auth.layouts.app')
@section('content')
<form class="my-5" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <div class="text-danger validation-summary-valid" data-valmsg-summary="true">
        <ul>
            <li style="display:none">

            </li>
        </ul>
    </div>
    <div class="form-group">
        <input id="email" type="text" class="form-control" placeholder="Email Anda" name="email" value="{{ old('email') }}" autofocus>
    </div>
    <div class="form-group">
        <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>
    </div>
    <div class="d-flex justify-content-between align-items-center m-0">
        <button type="submit" class="btn btn-primary">Masuk</button>
    </div>
    <input name="" type="hidden" value="">
</form>
<h6 class="text-center text-lighter mt-5 mb-0"><a href="{{route('register')}}"> 
                            REGISTER</a><br/> atau terkoneksi dengan </h6>
@endsection