@extends('layouts.app')

@section('content')
    <div class="container py-4 pb-4 px-4">
        <div class="row justify-content-center">

            @include('partials.progress')

            <div class="col-md-8 mb-3 mt-2">
                <div class="px-4 py-3 pb-5">
                    <div class="col-12 mb-3 text-center d-flex flex-column justify-content-center align-items-center">
                        <span style="font-size: 3em;"><i class="fa text-primary fa-list-check" aria-hidden="true"></i></span>
                    </div>
                    <div class="d-flex blury-card flex-column justify-content-center align-items-center  ">
                        <form method="POST" class="col-12" action="{{ route('save-choix') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-12">
                                    <label for="choix1" class="col-form-label ">{{ __('Premiere Choix') }}</label>
                                    <select class="form-select @error('choix1') is-invalid @enderror" name="choix1">
                                        @foreach ($licenses as $license)
                                            <option value="{{ $license->id }}"
                                               >
                                                {{ $license->nom_licence }}</option>
                                        @endforeach
                                    </select>
                                    @error('choix1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-12">
                                    <label for="choix2" class="col-form-label ">{{ __('Deuxieme Choix') }}</label>
                                    <select class="form-select @error('choix2') is-invalid @enderror" name="choix2">
                                        @foreach ($licenses as $license)
                                            <option value="{{ $license->id }}"
                                               >
                                                {{ $license->nom_licence }}</option>
                                        @endforeach
                                    </select>
                                    @error('choix2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-12">
                                    <label for="choix3" class="col-form-label ">{{ __('Troisieme Choix') }}</label>
                                    <select class="form-select @error('choix3') is-invalid @enderror" name="choix3">
                                        @foreach ($licenses as $license)
                                            <option value="{{ $license->id }}"
                                               >
                                                {{ $license->nom_licence }}</option>
                                        @endforeach
                                    </select>
                                    @error('choix3')
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
            @if (Session::has('success'))
                <div class="modal fade show" id="modelerror" style="display: block; background: #4a4a4a65" tabindex="-1"
                    role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered max-w-sm-100 w-px-400" role="document">
                        <div class="modal-content  text-center shadow-lg"
                            style="border-radius: 20px; border: 0px solid black">
                            <div class="mb-3 position-relative text-center" style="z-index: 10">
                                <button onclick="closeModal()" data-bs-dismiss="modal"
                                    class=" position-absolute  rounded-circle text-white "
                                    style="top: 10px; right: 10px"><span><i class="fa fa-x"
                                            aria-hidden="true"></i></span></button>
                            </div>
                            <div class="modal-body py-4">
                                <div class="mb-4">
                                    <h2 class="fw-500 text-success">{{__('Tous est enregistes')}}</h2>
                                    <h6 class="fw-500">{{__('Tous les informations sont enregistres avec successs')}}</h6>
                                </div>
                                <div class="row justify-content-around">
                                    <button onclick="closeModal()" data-bs-dismiss="modal"
                                        class="btn btn-success rounded-pill col-8 text-white "></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    @endsection
    @section('scripts')
        <script>
            function closeModal() {
                $('#modelerror').hide();
            }
        </script>
    @endsection
