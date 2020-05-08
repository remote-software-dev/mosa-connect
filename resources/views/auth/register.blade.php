@extends('auth.layouts.app')
@section('content')
<form class="my-5" method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group">
        <input id="name" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" 
        name="username" value="{{ old('username') }}" placeholder="Username" required autofocus>

        @if ($errors->has('username'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('username') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group">
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Alamat Email" required>

        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group">
        
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

            @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
       
    </div>

    <div class="form-group">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" required>
    </div>
    <div class="d-flex justify-content-between align-items-center m-0">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
    </div>
</form>
<h6 class="text-center text-lighter mt-5 mb-0"><a href="{{route('login')}}"> 
                            LOG IN</a><br/> atau terkoneksi dengan </h6>
@endsection