@extends('layouts.main')

@section('content')
<div class="col-lg-9 contact">
    <div class="card">
        <div class="card-body">
            <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('FrontEnd') }}/images/island.png" class="d-block mx-auto" alt="">
            </div>
            <div class="col-lg-6 my-auto">
                <form>
                    <div class="mb-3">
                      <label for="contact-email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="contact-email" placeholder="Fyll i din Email address">
                    </div>
                    <div class="mb-3">
                        <label for="contact-username" class="form-label">Användarnamn</label>
                        <input type="email" class="form-control" id="contact-username" placeholder="Fyll i ditt Minecraft användarnamn">
                      </div>
                    <div class="mb-3">
                      <label for="contact-message" class="form-label">Meddelande</label>
                      <textarea type="password" class="form-control" id="contact-message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-blue w-100 py-3">Skicka</button>
                  </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection