@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <div class="card-header">{{ __('Silakan Verifikasi Alamat Email Anda') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            <!-- {{ __('A fresh verification link has been sent to your email address.') }} -->
                            {{ __('Link verifikasi baru telah dikirimkan ke email anda.') }}
                        </div>
                    @endif
                    {{ __('Sebelum ngelanjutin, tolong periksa dulu emailnya untuk verifikasi link.') }}
                    {{ __('Jika anda tidak menerima emailnya') }}, <a href="{{ route('verification.resend') }}">{{ __('Klik disini untuk request link yang baru') }}</a>.
                </div>
            
        </div>
    </div>
</div>
@endsection
