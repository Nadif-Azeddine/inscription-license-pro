@extends('layouts.app')

@section('content')
    <div class="container py-4 pb-4 px-4">
        <div class="row justify-content-center">

            @include('partials.progress')

            <div class="col-md-8 mb-3 mt-2">
                <div class="px-4 py-3 pb-5">
                    <div class="col-12 mb-3 text-center d-flex flex-column justify-content-center align-items-center">
                        <span style="font-size: 3em;"><i class="fa text-primary fa-user" aria-hidden="true"></i></span>
                    </div>
                    <div class="d-flex blury-card flex-column justify-content-center align-items-center  ">
                        <form method="POST" class="col-12" action="{{ route('save_bac') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="nom" class="col-form-label ">{{ __('Specialite') }}</label>
                                    <select class="form-select @error('specialite') is-invalid @enderror" name="specialite">
                                        <option class="text-muted">{{ __('specialite') }}</option>
                                        @foreach ($specialites as $specialite)
                                            <option value="{{ $specialite->id }}"
                                                {{ Auth::user()->candidat->bacpd && Auth::user()->candidat->bacpd->specialite_id === $specialite->id ? 'selected' : '' }}>
                                                {{ $specialite->libelle }}</option>
                                        @endforeach
                                    </select>
                                    @error('specialite')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="nom" class="col-form-label ">{{ __('Diplome') }}</label>
                                    <select class="form-select @error('diplome') is-invalid @enderror" name="diplome">
                                        <option class="text-muted">{{ __('diplome') }}</option>
                                        @foreach ($diplomes as $diplome)
                                            <option value="{{ $diplome->id }}"
                                                {{ Auth::user()->candidat->bacpd && Auth::user()->candidat->bacpd->diplome_id === $diplome->id ? 'selected' : '' }}>
                                                {{ $diplome->nom_diplome }}</option>
                                        @endforeach
                                    </select>
                                    @error('diplome')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- <div class="col-6">
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
                                </div> --}}
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="moy_gen" class="col-form-label ">{{ __('Moyenne general') }}</label>

                                    <div class="col-12">
                                        <input id="moy_gen" type="number" placeholder="00.00"
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
                                <button type="submit" class="btn rounded-pill py-3 btn-primary col-12">
                                    {{ __('Envoyer') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('scripts')
    @endsection
