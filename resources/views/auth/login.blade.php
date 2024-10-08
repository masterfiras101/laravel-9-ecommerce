@extends('layouts.app')

@section('content')
<div class="body-login">
<div class="container-log-reg">
    <div class="login-container">

        <div class="form-container">
          <!-- <img
            src="./assets/illustration.png"
            alt="illustration"
            class="illustration"
          /> -->

          <h1 class="login-title">Login</h1>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            {{-- <label for="email" id="label-em-pas" class="col-md-5 col-form-label">{{ __('Email or Passord') }}</label> --}}

            <input class="email-usr-inp" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" />

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        {{-- <label for="password"  id="label-em-pass" class="col-md-4 col-form-label">{{ __('كلمة المرور') }}</label> --}}
            <input type="password" name="password" required autocomplete="current-password" placeholder="Password" />

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
            <button type="submit" class="btn-sub">SUBMIT</button>
          </form>
          <div class="register-forget  opacity">
            <a href="{{ route('register') }}">Signup</a>
            <a href="{{ route('password.request') }}">Forgot Password</a>
          </div>
        </div>

      </div>


</div>
</div>
@endsection

 {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div  class="card-header">{{ __('املأ البيانات بالاسفل') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" id="label-em-pass" class="col-md-4 col-form-label ">{{ __('الايميل') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password"  id="label-em-pass" class="col-md-4 col-form-label">{{ __('كلمة المرور') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">

                                        <input onclick="return confirm('هل تريد حفظ كلمة المرور ؟')" class="form-check-input fa fa-heart" type="checkbox"name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('تذكر كلمة المرور') }}
                                        </label>

                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('دخول') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('نسيت كلمة المرور') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div> --}}
