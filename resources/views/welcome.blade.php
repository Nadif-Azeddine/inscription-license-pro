@extends('layouts.app')

@section('content')

<div class="px-2 px-sm-4">
    <div class="row text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <span class="fs-3">2023/2024</span>
            <h1 class="large-text fw-bold" style="line-height: 1">Inscription License Professione</h1>
            <p class="col-11 col-sm-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam nihil commodi praesentium voluptate facilis molestiae qui sed architecto in doloremque.</p>
            <a class="px-5 py-3 col-8 col-sm-6 btn-primary rounded-pill" href="{{route('register')}}">Inscrire</a>
        </div>
    </div>

    {{--  --}}
    <div class="d-flex .justify-content-center align-items-center flex-wrap my-3">
         
    </div>
</div>
@endsection