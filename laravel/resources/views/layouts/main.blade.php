@include('inc.head')

    @include('inc.navbar')
    
@include('inc.header')
    <div class="page-content">
      <div class="container">
      <div class="row">
        @yield('content')
        <div class="sidebar col-lg-3">
          <div class="card">
            <div class="card-header">Server information</div>
            <div class="card-body">
              <p>test</p>
            </div>
          </div>
          <div class="card">
            <div class="card-header">Rikaste topp 3</div>
            <div class="card-body">
              <p>test</p>
            </div>
          </div>
          <div class="card">
            <div class="card-header">Aktiva spelare</div>
            <div class="card-body">
              <p>test</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

@include('inc.footer')