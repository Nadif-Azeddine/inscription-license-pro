<div class="col-12 position-relative rounded-pill" style="height: 7px; background: var(--muted)">
    <div class="postion-absolute start-0 col-12 top-0 d-flex  justify-content-between align-items-center"
        style="height: 7px">
        <div class="circle {{Auth::check() ? 'passed' : ''}} {{Route::currentRouteName() === "register" ? 'current shadow' : ''}} "><a class="fw-bold" href="{{ route('register') }}">1</a></div>
        <div class="circle {{Auth::check() && Auth::user()->candidat ? 'passed' : ''}} {{Route::currentRouteName() === "candidat" ? 'current shadow' : ''}} "><a class="fw-bold" href="{{Auth::check() ? route('candidat') : '#'}}">2</a></div>
        <div class="circle {{Auth::check() && Auth::user()->bac ? 'passed' : ''}} {{Route::currentRouteName() === "bac" ? 'current shadow' : ''}} "><a class="fw-bold" href="{{ Auth::check() ? route('bac') : '#' }}">3</a></div>
        <div class="circle"><a class="fw-bold" href="{{Auth::check() ? route('candidat') : '#' }}">4</a></div>
    </div>
</div>