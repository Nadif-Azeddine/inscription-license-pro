@extends('layouts.app')

@section('content')
<div class="screen" >
    <div class="container py-4 pb-4 px-4">
        <div class="row justify-content-center">

            @include('partials.progress')

            <div class="col-md-8 mb-3 mt-2">
                <div class="px-4 py-3 pb-5">
                    <div class="col-12 mb-3 mt-3 text-center d-flex flex-column justify-content-center align-items-center">
                        <h1 class="fw-bold text-dark">Informations BAC</h1>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="d-flex blury-card flex-column justify-content-center align-items-center  ">
                        <form method="POST" class="col-12" action="{{ route('save_bac') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="nom" class="col-form-label ">{{ __('Bac option') }}</label>
                                    <select class="form-select @error('option') is-invalid @enderror" name="option">
                                        <option class="text-muted">{{ __('option') }}</option>
                                        @foreach ($options as $option)
                                            <option value="{{ $option->id }}"
                                                {{ Auth::user()->candidat->bac && Auth::user()->candidat->bac->option_id === $option->id ? 'selected' : '' }}>
                                                {{ $option->option }}</option>
                                        @endforeach
                                    </select>
                                    @error('option')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="prenom" class="col-form-label ">{{ __('Date obtination') }}</label>
                                    <select class="form-select @error('date_obt') is-invalid @enderror" name="date_obt">
                                        <option value="2018"
                                            {{ Auth::user()->candidat->bac && Auth::user()->candidat->bac->date_obt === '2018' ? 'selected' : '' }}>
                                            2018</option>
                                        <option value="2019"
                                            {{ Auth::user()->candidat->bac && Auth::user()->candidat->bac->date_obt === '2019' ? 'selected' : '' }}>
                                            2019</option>
                                        <option value="2020"
                                            {{ Auth::user()->candidat->bac && Auth::user()->candidat->bac->date_obt === '2020' ? 'selected' : '' }}>
                                            2020</option>
                                        <option value="2021"
                                            {{ Auth::user()->candidat->bac && Auth::user()->candidat->bac->date_obt === '2021' ? 'selected' : '' }}>
                                            2021</option>
                                        <option value="2022"
                                            {{ Auth::user()->candidat->bac && Auth::user()->candidat->bac->date_obt === '2022' ? 'selected' : '' }}>
                                            2022</option>
                                        <option value="2023"
                                            {{ Auth::user()->candidat->bac && Auth::user()->candidat->bac->date_obt === '2023' ? 'selected' : '' }}>
                                            2023</option>
                                        <option value="2024"
                                            {{ Auth::user()->candidat->bac && Auth::user()->candidat->bac->date_obt === '2024' ? 'selected' : '' }}>
                                            2024</option>

                                    </select>
                                    @error('option')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="moy_gen" class="col-form-label ">{{ __('Moyenne general') }}</label>

                                    <div class="col-12">
                                        <input id="moy_gen" type="text" placeholder="00.00"
                                            value="{{ Auth::user()->candidat->bac->moy_general ?? old('moy_gen') }}" 
                                            class="form-control @error('moy_gen') is-invalid @enderror" name="moy_gen"
                                            required autofocus>

                                        @error('moy_gen')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label class="col-form-label">{{ __('Mention') }}</label>
                                    <div class="col-12">
                                        <select id="mention" type="text"
                                            value="{{ Auth::user()->candidat->bac->mention ?? old('mention') }}"
                                            class="form-select @error('mention') is-invalid @enderror" name="mention">
                                            <option value="Passable"
                                                {{ Auth::user()->candidat->bac && Auth::user()->candidat->bac->mention === 'Passable' ? 'selected' : '' }}>
                                                {{ __('Passable') }}</option>
                                                <option value="Assez Bien"
                                                {{ Auth::user()->candidat->bac && Auth::user()->candidat->bac->mention === 'Assez Bien' ? 'selected' : '' }}>
                                                {{ __('Assez Bien') }}</option>
                                            <option value="Bien"
                                                {{ Auth::user()->candidat->bac && Auth::user()->candidat->bac->mention === 'Bien' ? 'selected' : '' }}>
                                                {{ __('Bien') }}</option>
                                            <option value="Tres Bien"
                                                {{ Auth::user()->candidat->bac && Auth::user()->candidat->bac->mention === 'Tres Bien' ? 'selected' : '' }}>
                                                {{ __('Tres Bien') }}</option>
                                        </select>

                                        @error('mention')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
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
    @section('scripts')
    @endsection
