@extends('layouts.app')

@section('content')

    <!-- jp login wrapper start -->
    <div class="login_section">
        <!-- login_form_wrapper -->
        <div class="login_form_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <!-- login_wrapper -->
                        <h1>{{ __('Login') }}</h1>
                        <div class="login_wrapper">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                            <div class="formsix-pos">
                                <div class="form-group i-email">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="formsix-e">
                                <div class="form-group i-password">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="login_remember_box">
                                <label class="control control--checkbox">{{ __('Remember Me') }}
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <span class="control__indicator"></span>
                                </label>

                            </div>
                            <div class="login_btn_wrapper">
                                <button type="submit" class="btn btn-primary login_btn">  {{ __('Login') }} </button>
                            </div>

                            </form>
                        </div>

                        <!-- /.login_wrapper-->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.login_form_wrapper-->
    </div>
    <!-- jp login wrapper end -->

@endsection
