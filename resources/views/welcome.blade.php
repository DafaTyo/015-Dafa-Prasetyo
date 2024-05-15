@extends('layout.app')
@section('title', 'dashboard')
@section('content')
  <main class="container-fluid" id="content">

    <div class="row">



      @for ($i = 0; $i < 15; $i++)
      <div class="col-6 col-sm-4 col-md-3 custom-col-lg-20p col-xxl-2">
        <div class="card">
          <div class="card-img">
            <button class="btn">
              <strong>
                 Lihat
              </strong>
            </button>
            <img src="
            @if ($i % 2 == 0)
                https://i.pinimg.com/originals/49/35/7c/49357c39ef5e5ca66481a1a57c0a634d.jpg
            @else 
                https://i.pinimg.com/736x/21/bb/76/21bb7620e7643af6aa6eec6409dddc57.jpg
            @endif
            "
              class="card-img-top">
          </div>
          <div class="card-body">
            <p class="card-text text-truncate">Some quick example text</p>
          </div>
        </div>
      </div>
      
  @endfor

    </div>
  </main>
  @endsection