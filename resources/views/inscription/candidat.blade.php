@extends('layouts.app')

@section('content')
<div class="screen" >

    <div class="container py-4 pb-4 px-4">
        <div class="row justify-content-center">
           
            @include('partials.progress')

            <div class="col-md-8 mb-3 mt-2">
                <div class=" px-4 py-3 pb-5">
                    <div class="col-12 mb-3 mt-3 text-center d-flex flex-column justify-content-center align-items-center">
                        <h1 class="fw-bold text-dark">Informations Scolaire</h1>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    {{-- <hr> --}}
                    <div class="d-flex  flex-column justify-content-center align-items-center  ">
                        <form method="POST" class="col-12" action="{{ route('save_candidat') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="cin" class="col-form-label ">{{ __('CIN') }}</label>

                                    <div class="col-12">
                                        <input id="cin" type="text"
                                            class="form-control @error('cin') is-invalid @enderror" name="cin"
                                            value="{{ Auth::user()->candidat ? Auth::user()->candidat->CIN : old('cin') }}" required placeholder="HH121212" autofocus>

                                        @error('cin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label for="cne" class="col-form-label ">{{ __('CNE') }}</label>

                                    <div class="col-12">
                                        <input id="cne" type="text"
                                            class="form-control @error('cne') is-invalid @enderror" name="cne"
                                            value="{{ Auth::user()->candidat ? Auth::user()->candidat->CNE : old('cne') }}" required placeholder="K123456789" autofocus>

                                        @error('cne')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="address" class="col-form-label ">{{ __('Addresse') }}</label>

                                    <div class="col-12">
                                        <input id="address" type="text" placeholder="votre addresse"
                                            class="form-control @error('address') is-invalid @enderror" name="address"
                                            value="{{ Auth::user()->candidat ? Auth::user()->candidat->adresse : old('address') }}" required autofocus>

                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label class="col-form-label">{{ __('Ville') }}</label>
                                    <select class="form-select" required name="ville">
                                        @foreach ($villes as $ville)
                                            <option value="{{ $ville->id }}" {{ Auth::user()->candidat && Auth::user()->candidat->ville_id === $ville->id ? 'selected' : '' }}>{{ __($ville->nom_ville) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-6">
                                    <label for="etablissement"
                                        class="col-form-label ">{{ __('Nom etablissement') }}</label>
                                    <select class="form-select" required name="etablissement">
                                        @foreach ($etablissements as $etablissement)
                                            <option value="{{ $etablissement->id }}"  {{ Auth::user()->candidat && Auth::user()->candidat->etablissement->id === $etablissement->id ? 'selected' : '' }}>
                                                {{ __($etablissement->nom_etablissement) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="num_apoge" class="col-form-label ">{{ __('Apoge') }}</label>
                                    <input type="text" class="form-control @error('num_apoge') is-invalid @enderror"
                                         name="num_apoge" value="{{ Auth::user()->candidat ? Auth::user()->candidat->num_apoge : old('num_apoge') }}" placeholder="123456">
                                    @error('num_apoge')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn rounded-pill py-3 btn-info col-12">
                                    {{ __('Envoyer') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
