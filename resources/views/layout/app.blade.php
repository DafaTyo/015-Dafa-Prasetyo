<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <link rel="icon" href="" type="image/png"> --}}
  <title>GalleryKu | @yield('title')</title>
  <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/styles.css') }}">
</head>

<body>
    <nav class="navbar" id="navbar-pinterest">
        <button class="button">
          <a href="#">
          <img src="{{ asset('asset/icons/pinterest.svg') }}" width="30"></a>
        </button>
    
        <button type="button" class="btn btn-outline-dark"> <strong>Beranda</strong> </button>
    
        <button type="button" class="btn btn-outline-dark"><strong>Kategori</strong></button>
        <form class="align-middle">
          <img class="finder" src="./icons/search.svg" alt="">
          <input class="form-control me-2" type="search" placeholder="Cari Foto">
        </form>
        <button class="button" id="notifications">
          <img src="{{ asset('asset//icons/bell.svg') }}" width="25">
        </button>
    
        <button class="button" id="profile-img">
          <img src="{{ asset('asset/icons/user.svg') }}" width="30">
        </button>
      </nav>

    @yield('content')
    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>