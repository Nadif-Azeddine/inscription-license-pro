@extends('layouts.app')

@section('content')
    <div class="px-2 main-sec py-4 px-sm-4">
        <div class="row text-center">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <span class="fs-5 text-muted fw-bold">2023/2024</span>
                <h1 class="large-text fw-bold col-12 col-md-8 mb-2" style="line-height: 1.1">
                    @lang("welcome.LP")</h1>
                <p class="col-11 col-lg-8">@lang('welcome.parag')</p>
                <div class="row col-12 col-sm-7  flex-wrap">
                    <div class="col-sm-6 col-12 my-2">
                        <a class="btn col-12 btn-primary rounded-pill"
                            href="{{ route('register') }}">@lang('welcome.inscrire')</a>
                    </div>
                    <div class="col-sm-6 col-12 my-2">
                        <a class="btn col-12 btn-success rounded-pill"
                            href="{{ route('login') }}">@lang('welcome.continue')</a>
                    </div>
                </div>
            </div>
        </div>

        {{--  --}}
        <div class="d-flex justify-content-center align-items-center flex-wrap mt-5">
            <div class="card gradient-card col-12 col-sm-9 shadow-lg py-4 pb-5 px-3 px-sm-5 position-relative"
                style=" overflow: hidden">
                <div class="d-flex justify-content-between ">
                    <h4 class="fw-500">@lang('welcome.ANNONCEMENT')<span style="font-size: .8em"><i class="fa  fa-info-circle"
                                aria-hidden="true"></i></span></h4>
                    <span class="text-muted ">{{ __('23, Juillet 2023') }}</span>
                </div>

                <p class="mt-2 ">@lang('welcome.annonce_p')
                </p>
                <h4 class="fw-500">@lang('welcome.condition')</h4>
                <p class="col-10 ">
                    @lang('welcome.condition_p')</p>

                <h4 class="fw-500"> @lang('welcome.CANDIDATURE')</h4>
                <p>
                    @lang('welcome.candidature_p')
                </p>

                <h5 class="text-danger fw-500">@lang('welcome.Important')</h5>
                <p>
                    @lang('welcome.Important_p')
                </p>

            </div>
        </div>

    </div>
@endsection
