@extends('layouts.main')

@section('content')
<div class="col-lg-9 blog">
    <div class="blog-post card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{asset('FrontEnd')}}/images/post.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body h-100">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply...</p>
            <div class="blog-actions d-flex justify-content-between">
              <button class="btn btn-grey"><i class="bi bi-clock"></i> 2023-10-30</button>
              <button class="btn btn-blue"><i class="bi bi-eye"></i> Läs mer</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="blog-post card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{asset('FrontEnd')}}/images/post.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body h-100">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply...</p>
            <div class="blog-actions d-flex justify-content-between">
              <button class="btn btn-grey"><i class="bi bi-clock"></i> 2023-10-30</button>
              <button class="btn btn-blue"><i class="bi bi-eye"></i> Läs mer</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="blog-post card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{asset('FrontEnd')}}/images/post.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body h-100">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply...</p>
            <div class="blog-actions d-flex justify-content-between">
              <button class="btn btn-grey"><i class="bi bi-clock"></i> 2023-10-30</button>
              <button class="btn btn-blue"><i class="bi bi-eye"></i> Läs mer</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection