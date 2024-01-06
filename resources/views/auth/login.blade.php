@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="">
                    <div class="col-12 text-center mt-3">
                        <h3 class="fw-meduim">License Pro 2023</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, enim!</p>
                    </div>
                    <hr>
                    <div class=" d-flex flex-column justify-content-center align-items-center  ">
                        <form method="POST" class="col-11 col-sm-6" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="col-form-label ">{{ __('Email Address') }}</label>

                                <div class="col-12">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="password" class=" col-form-label">{{ __('Password') }}</label>

                                <div class="col-12">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 mb-0 text-center">
                                <button type="submit" class="btn btn-primary col-12">
                                    {{ __('Envoyer') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-center" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
