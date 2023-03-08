<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
</head>
<body>
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <label for="email">{{ __('Email') }}</label>

        <div>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>
    </div>

    <div>
        <label for="password">{{ __('Password') }}</label>

        <div>
            <input id="password" type="password" name="password" required>
        </div>
    </div>

    <div>
        <div>
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember">{{ __('Remember Me') }}</label>
        </div>
    </div>

    <div>
        <button type="submit">
            {{ __('Login') }}
        </button>

        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </div>
</form>
</body>
</html>
