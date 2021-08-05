@extends('layouts.auth')

@section('content')


    <form method="POST" class="form-horizontal" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" name="remember" id="remember"
                {{ old('remember') ? 'checked' : '' }}>
            <label class="custom-control-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>

        <div class="mt-3">
            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">{{ __('Login') }}</button>
        </div>

        <div class="mt-4 text-center">
            @if (Route::has('password.request'))
                <br>
                <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock mr-1"></i>
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>

    </form>

@endsection
