<div class="col-12 position-relative rounded-pill bg-muted" style="height: 7px;">

    <div class="position-absolute start-0 col-12 top-0 d-flex  justify-content-between align-items-center "
        style="height: 7px">
        <div style="z-index: 3"
            class="circle {{ Auth::check() ? 'passed' : '' }} {{ Route::currentRouteName() === 'register' ? 'current shadow' : '' }} ">
            <a class="fw-bold" href="{{ route('register') }}">1</a>
        </div>
        <div style="z-index: 3"
            class="circle {{ Auth::check() && Auth::user()->candidat ? 'passed' : '' }} {{ Route::currentRouteName() === 'candidat' ? 'current shadow' : '' }} ">
            <a class="fw-bold" href="{{ Auth::check() ? route('candidat') : '#' }}">2</a>
        </div>
        <div style="z-index: 3"
            class="circle {{ Auth::check() && Auth::user()->candidat && Auth::user()->candidat->bac ? 'passed' : '' }} {{ Route::currentRouteName() === 'bac' ? 'current shadow' : '' }} ">
            <a class="fw-bold" href="{{ Auth::check() ? route('bac') : '#' }}">3</a>
        </div>
        <div style="z-index: 3"
        class="circle {{ Auth::check() && Auth::user()->candidat && Auth::user()->candidat->bacpd ? 'passed' : '' }} {{ Route::currentRouteName() === 'bacpd' ? 'current shadow' : '' }} ">
        <a class="fw-bold" href="{{ Auth::check() ? route('bacpd') : '#' }}">4</a>
    </div>
        
    </div>
    @if (Auth::check() && Auth::user()->candidat && Auth::user()->candidat->bacpd)
    <div class="position-absolute top-0 start-0 bg-info"
        style="height: 7px; z-index: 0; width:100%"></div>       
    @endif
    @if (Auth::check() && Auth::user()->candidat && Auth::user()->candidat->bac)
    <div class="position-absolute top-0 start-0 bg-info"
    style="height: 7px; z-index: 0; width:66.6666%"></div> 
    @endif
    @if (Auth::check() && Auth::user()->candidat)
    <div class="position-absolute top-0 start-0 bg-info"
    style="height: 7px; z-index: 0; width:33.3333%"></div> 
    @endif
</div>
