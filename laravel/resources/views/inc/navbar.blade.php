<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{asset('FrontEnd')}}/images/logo.png" alt="CubeCMS" width="150" height="35">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link @if(Route::is('index')) active @endif" aria-current="page" href="{{ route('index') }}">Hem</a></li>
          <li class="nav-item"><a class="nav-link @if(Route::is('info')) active @endif" href="{{ route('info') }}">Information</a></li>
          <li class="nav-item"><a class="nav-link @if(Route::is('staff')) active @endif" href="{{ route('staff') }}">Staff</a></li>
          <li class="nav-item"><a class="nav-link @if(Route::is('contact')) active @endif" href="{{ route('contact')}}">Kontakt</a></li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <a href="apply.html"><button class="btn btn-green"><i class="bi bi-pencil-square"></i> Ansök nu!</button></a>
        </ul>
      </div>
    </div>
  </nav>