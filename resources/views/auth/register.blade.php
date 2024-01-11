@extends('layouts.app')

@section('content')
<div class="screen" >

    <div class="container py-4 pb-4 px-4">
        <div class="row justify-content-center">

            @include('partials.progress')

            <div class="col-md-8 mb-3 mt-2">
                <div class="px-4 py-3 pb-5">
                    <div class="col-12 mb-3 mt-3 text-center d-flex flex-column justify-content-center align-items-center">
                        <h1 class="fw-bold text-dark">Informations Generale</h1>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="d-flex blury-card flex-column justify-content-center align-items-center  ">
                        <form method="POST" class="col-12" action="{{ route('register') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="nom" class="col-form-label ">{{ __('Nom') }}</label>

                                    <div class="col-12">
                                        <input id="nom" type="text" value="{{ Auth::user()->nom ?? old('nom') }}"
                                            class="form-control @error('nom') is-invalid @enderror" name="nom"
                                          required placeholder="Entrer votre nom" autofocus>

                                        @error('nom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label for="prenom" class="col-form-label ">{{ __('Prenom') }}</label>

                                    <div class="col-12">
                                        <input id="prenom" type="text" value="{{ Auth::user()->prenom ?? old('prenom') }}"
                                            class="form-control @error('prenom') is-invalid @enderror" name="prenom"
                                             required placeholder="Entrer votre prenom"
                                            autofocus>

                                        @error('prenom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="date_naissance" class="col-form-label ">{{ __('Date Naissance') }}</label>

                                    <div class="col-12">
                                        <input id="date_naissance" type="date"
                                            value="{{ Auth::user()->date_naissance ?? old('date_naissance') }}"
                                            class="form-control @error('date_naissance') is-invalid @enderror"
                                            name="date_naissance"  required autofocus>

                                        @error('date_naissance')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label class="col-form-label">{{ __('Sexe') }}</label>
                                    <select class="form-select @error('sexe') is-invalid @enderror" name="sexe">
                                        <option class="text-muted">{{ __('Sexe') }}</option>
                                        <option value="H"
                                            {{ Auth::user() != null && Auth::user()->genre === 'H' ? 'selected' : '' }}>
                                            {{ __('Homme') }}</option>
                                        <option value="F"
                                            {{ Auth::user() != null && Auth::user()->genre === 'F' ? 'selected' : '' }}>
                                            {{ __('Femme') }}</option>
                                    </select>
                                    @error('sexe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-6">
                                    <label for="email" class="col-form-label ">{{ __('Email Address') }}</label>
                                    <div class="col-12">
                                        <input id="email" type="email" value="{{ Auth::user()->email ?? old('email') }}"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                             required autocomplete="email"
                                            placeholder="example@example.com" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label for="tel" class="col-form-label ">{{ __('Telephone') }}</label>
                                    <div class="col-12">
                                        <input id="tel" type="tel" value="{{ Auth::user()->tel ?? old('tel') }}"
                                            class="form-control @error('tel') is-invalid @enderror" name="tel"
                                             required autocomplete="tel"
                                            placeholder="+212666666666" autofocus>

                                        @error('tel')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            @guest
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <label for="password" class=" col-form-label">{{ __('Password') }}</label>

                                        <div class="col-12">
                                            <input id="password" value="{{ Auth::user()->password ?? '' }}" type="password"
                                                placeholder="Entrer votre mot de passe"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label for="password_confirmation"
                                            class=" col-form-label">{{ __('Confirm password') }}</label>
                                        <div class="col-12">
                                            <input id="password" type="password" placeholder="Confirmer votre mot de passe"
                                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                                name="password_confirmation">

                                            @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            @endguest

                            <div class="col-12 mt-4">
                                <button type="submit" class="btn rounded-pill py-3 btn-info col-12">
                                    {{ __('Envoyer') }}
                                </button>
                            </div>
                        </form>
                    </div>
                    @error('email')
                    <div class="modal fade show" id="modelerror" style="display: block; background: #4a4a4a65"
                        tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered max-w-sm-100 w-px-400" role="document">
                            <div class="modal-content  text-center shadow-lg" style="border-radius: 20px; border: 0px solid black">
                                <div class="mb-3 position-relative text-center" style="z-index: 10">
                                    <button onclick="closeModal()" data-bs-dismiss="modal"
                                        class=" position-absolute  rounded-circle text-white " style="top: 10px; right: 10px"><span><i class="fa fa-x" aria-hidden="true"></i></span></button>
                                </div>
                                <div class="modal-body py-4">
                                    <div class="mb-4">
                                        <h6 class="fw-500">it seems that you already create an account, try to continue inscription instead</h6>
                                    </div>
                                    <div class="row justify-content-around">
                                        <a href="{{ route('login') }}"
                                            class="btn btn-primary rounded-pill col-8 text-white ">Continue Inscription</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('scripts')
        <script>
            function closeModal() {
                $('#modelerror').hide();
            }
        </script>
    @endsection
