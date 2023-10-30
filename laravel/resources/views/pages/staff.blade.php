@extends('layouts.main')

@section('content')
<div class="col-lg-9 staff">
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <img src="https://mc-heads.net/head/KWallgren" width="75">
                        </div>
                        <div class="col-auto my-auto">
                            <h4 class="m-0">KWallgren</h4>
                            <span class="badge bg-orange">Ägare</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <img src="https://mc-heads.net/head/KaptenHjort" width="75">
                        </div>
                        <div class="col-auto my-auto">
                            <h4 class="m-0">KaptenHjort</h4>
                            <span class="badge bg-red">Admin</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection