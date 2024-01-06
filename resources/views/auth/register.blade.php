@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 position-relative rounded-pill" style="height: 7px; background: var(--muted)">
                <div class="postion-absolute start-0 col-12 top-0 d-flex  justify-content-between align-items-center"
                    style="height: 7px">
                    <div class="circle shadow" style="scale: 1.3">1</div>
                    <div class="circle">2</div>
                    <div class="circle">3</div>
                    <div class="circle">4</div>
                </div>
            </div>

            <div class="col-md-10 mt-4">
                <div class="">
                    <div class="col-12 text-center mt-3">
                        <h3 class="fw-meduim">{{ __('Inscription a LP 2024') }}</h3>
                        <span class="muted">{{ 'Etape 1: Informations generale' }}</span>
                    </div>
                    <hr>
                    <div class=" d-flex flex-column justify-content-center align-items-center  ">
                        <form method="POST" class="col-11 col-sm-8" action="{{ route('register') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="nom" class="col-form-label ">{{ __('Nom') }}</label>

                                    <div class="col-12">
                                        <input id="nom" type="text"
                                            class="form-control @error('nom') is-invalid @enderror" name="nom"
                                            value="{{ old('nom') }}" required placeholder="Entrer votre nom" autofocus>

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
                                        <input id="prenom" type="text"
                                            class="form-control @error('prenom') is-invalid @enderror" name="prenom"
                                            value="{{ old('prenom') }}" required placeholder="Entrer votre prenom"
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
                                <div class="col-7">
                                    <label for="date_naissance" class="col-form-label ">{{ __('Date Naissance') }}</label>

                                    <div class="col-12">
                                        <input id="date_naissance" type="date"
                                            class="form-control @error('date_naissance') is-invalid @enderror" name="date_naissance"
                                            value="{{ old('date_naissance') }}" required autofocus>

                                        @error('date_naissance')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-4">
                                    <label class="col-form-label ">{{ __('Sexe') }}</label>

                                    <div class="d-flex gap-3">
                                        <div class="mt-2">
                                            <input class="form-check-input" type="radio" name="sexe" value="H"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                {{ __('Homme') }}
                                            </label>
                                        </div>
                                        <div class="mt-2">
                                            <input class="form-check-input" type="radio" name="sexe" value="F"
                                                id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="">
                                                {{ __('Femme') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="mb-3">
                                <label for="email" class="col-form-label ">{{ __('Email Address') }}</label>

                                <div class="col-12">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" placeholder="example@example.com" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">

                                <div class="col-6">
                                    <label for="password" class=" col-form-label">{{ __('Password') }}</label>

                                    <div class="col-12">
                                        <input id="password" type="password" placeholder="Entrer votre mot de passe"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

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
                                            name="password_confirmation" required>

                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-primary col-12">
                                    {{ __('Envoyer') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
