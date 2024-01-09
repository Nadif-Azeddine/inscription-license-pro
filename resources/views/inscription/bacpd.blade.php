@extends('layouts.app')

@section('content')
    <div class="container py-4 pb-4 px-4">
        <div class="row justify-content-center">

            @include('partials.progress')

            <div class="col-md-8 mb-3 mt-2">
                <div class="px-4 py-3 pb-5">
                    <div class="col-12 mb-3 text-center d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ URL('/images/bacpd.svg') }}" class="mt-2" width="70px" height="70px" alt="">
                    </div>
                    <div class="d-flex blury-card flex-column justify-content-center align-items-center  ">
                        <form method="POST" class="col-12" action="{{ route('save_bacpd') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="nom" class="col-form-label ">{{ __('Specialite') }}</label>
                                    <select class="form-select @error('specialite_id') is-invalid @enderror" name="specialite_id">
                                        <option class="text-muted">{{ __('specialite') }}</option>
                                        @foreach ($specialites as $specialite)
                                            <option value="{{ $specialite->id }}"
                                                {{ Auth::user()->candidat->bacpd && Auth::user()->candidat->bacpd->specialite_id === $specialite->id ? 'selected' : '' }}>
                                                {{ $specialite->libelle }}</option>
                                        @endforeach
                                    </select>
                                    @error('specialite_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="nom" class="col-form-label ">{{ __('Diplome') }}</label>
                                    <select class="form-select @error('diplome_id') is-invalid @enderror" name="diplome_id">
                                        <option class="text-muted">{{ __('diplome') }}</option>
                                        @foreach ($diplomes as $diplome)
                                            <option value="{{ $diplome->id }}"
                                                {{ Auth::user()->candidat->bacpd && Auth::user()->candidat->bacpd->diplome_id === $diplome->id ? 'selected' : '' }}>
                                                {{ $diplome->nom_diplome }}</option>
                                        @endforeach
                                    </select>
                                    @error('diplome_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- moyenne --}}
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="moy_pa"
                                        class="col-form-label ">{{ __('Moyenne general 1ere annee') }}</label>

                                    <div class="col-12">
                                        <input id="moy_pa" type="text" placeholder="00.00"
                                            value="{{ Auth::user()->candidat->bacpd ? Auth::user()->candidat->bacpd->moy_pa : old('moy_pa') }}"
                                            class="form-control @error('moy_pa') is-invalid @enderror" name="moy_pa"
                                            required autofocus>

                                        @error('moy_pa')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label for="moy_da"
                                        class="col-form-label ">{{ __('Moyenne general 2eme annee') }}</label>

                                    <div class="col-12">
                                        <input id="moy_da" type="text" placeholder="00.00"
                                            value="{{ Auth::user()->candidat->bacpd ? Auth::user()->candidat->bacpd->moy_da : old('moy_da') }}"
                                            class="form-control @error('moy_da') is-invalid @enderror" name="moy_da"
                                            required autofocus>

                                        @error('moy_da')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            {{-- classement --}}
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="classment_pa"
                                        class="col-form-label ">{{ __('Classement en 1ere annee') }}</label>
                                    <div class="col-12">
                                        <input id="classment_pa" type="text" placeholder="00"
                                            value="{{ Auth::user()->candidat->bacpd ? Auth::user()->candidat->bacpd->classment_pa : old('classment_pa') }}"
                                            class="form-control @error('classment_pa') is-invalid @enderror"
                                            name="classment_pa" required autofocus>

                                        @error('classment_pa')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="classment_da"
                                        class="col-form-label ">{{ __('Classement en 2eme annee') }}</label>

                                    <div class="col-12">
                                        <input id="classment_da" type="text" placeholder="00"
                                            value="{{ Auth::user()->candidat->bacpd ? Auth::user()->candidat->bacpd->classment_da : old('classment_da') }}"
                                            class="form-control @error('classment_da') is-invalid @enderror" name="classment_da"
                                            required autofocus>

                                        @error('classment_da')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            {{-- nb etudiant --}}
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="nb_etudiant_pa"
                                        class="col-form-label ">{{ __('Nombres des etudiants en 1ere annee') }}</label>
                                    <div class="col-12">
                                        <input id="nb_etudiant_pa" type="text" placeholder="00"
                                            value="{{ Auth::user()->candidat->bacpd ? Auth::user()->candidat->bacpd->nb_etudiant_pa : old('nb_etudiant_pa') }}"
                                            class="form-control @error('nb_etudiant_pa') is-invalid @enderror"
                                            name="nb_etudiant_pa" required autofocus>

                                        @error('nb_etudiant_pa')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6 ">
                                    <label for="nb_etudiant_da"
                                        class="col-form-label ">{{ __('Nombres des etudiants en 2eme annee') }}</label>

                                    <div class="col-12">
                                        <input id="nb_etudiant_da" type="text" placeholder="00"
                                            value="{{ Auth::user()->candidat->bacpd ? Auth::user()->candidat->bacpd->nb_etudiant_da : old('nb_etudiant_da') }}"
                                            class="form-control @error('nb_etudiant_da') is-invalid @enderror"
                                            name="nb_etudiant_da" required autofocus>

                                        @error('nb_etudiant_da')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            {{-- annees des reussite --}}

                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="date_reussite_pa"
                                        class="col-form-label ">{{ __('Date reussite 1ere annee') }}</label>
                                    <select class="form-select @error('date_reussite_pa') is-invalid @enderror"
                                        name="date_reussite_pa">
                                        <option value="2018"
                                            {{ Auth::user()->candidat->bacpd && Auth::user()->candidat->bacpd->date_reussite_pa === '2018' ? 'selected' : '' }}>
                                            2018</option>
                                        <option value="2019"
                                            {{ Auth::user()->candidat->bacpd && Auth::user()->candidat->bacpd->date_reussite_pa === '2019' ? 'selected' : '' }}>
                                            2019</option>
                                        <option value="2020"
                                            {{ Auth::user()->candidat->bacpd && Auth::user()->candidat->bacpd->date_reussite_pa === '2020' ? 'selected' : '' }}>
                                            2020</option>
                                        <option value="2021"
                                            {{ Auth::user()->candidat->bacpd && Auth::user()->candidat->bacpd->date_reussite_pa === '2021' ? 'selected' : '' }}>
                                            2021</option>
                                        <option value="2022"
                                            {{ Auth::user()->candidat->bacpd && Auth::user()->candidat->bacpd->date_reussite_pa === '2022' ? 'selected' : '' }}>
                                            2022</option>
                                        <option value="2023"
                                            {{ Auth::user()->candidat->bacpd && Auth::user()->candidat->bacpd->date_reussite_pa === '2023' ? 'selected' : '' }}>
                                            2023</option>
                                        <option value="2024"
                                            {{ Auth::user()->candidat->bacpd && Auth::user()->candidat->bacpd->date_reussite_pa === '2024' ? 'selected' : '' }}>
                                            2024</option>

                                    </select>
                                    @error('date_reussite_pa')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="date_reussite_da"
                                        class="col-form-label ">{{ __('Date reussite 2eme annee') }}</label>
                                    <select class="form-select @error('date_reussite_da') is-invalid @enderror"
                                        name="date_reussite_da">
                                        <option value="2018"
                                            {{ Auth::user()->candidat->bacpd && Auth::user()->candidat->bacpd->date_reussite_da === '2018' ? 'selected' : '' }}>
                                            2018</option>
                                        <option value="2019"
                                            {{ Auth::user()->candidat->bacpd && Auth::user()->candidat->bacpd->date_reussite_da === '2019' ? 'selected' : '' }}>
                                            2019</option>
                                        <option value="2020"
                                            {{ Auth::user()->candidat->bacpd && Auth::user()->candidat->bacpd->date_reussite_da === '2020' ? 'selected' : '' }}>
                                            2020</option>
                                        <option value="2021"
                                            {{ Auth::user()->candidat->bacpd && Auth::user()->candidat->bacpd->date_reussite_da === '2021' ? 'selected' : '' }}>
                                            2021</option>
                                        <option value="2022"
                                            {{ Auth::user()->candidat->bacpd && Auth::user()->candidat->bacpd->date_reussite_da === '2022' ? 'selected' : '' }}>
                                            2022</option>
                                        <option value="2023"
                                            {{ Auth::user()->candidat->bacpd && Auth::user()->candidat->bacpd->date_reussite_da === '2023' ? 'selected' : '' }}>
                                            2023</option>
                                        <option value="2024"
                                            {{ Auth::user()->candidat->bacpd && Auth::user()->candidat->bacpd->date_reussite_da === '2024' ? 'selected' : '' }}>
                                            2024</option>

                                    </select>
                                    @error('date_reussite_da')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
