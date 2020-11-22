<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
    <a class="navbar-brand" href="lokers">Website Pencari Kerja</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-link active" href="/beranda">Beranda <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="/lokers">Pendaftar</a> 
        <a class="nav-link" href="/jobs">Job</a>
        <a class="nav-link" href="/educations">Pendidikan</a>
        <a class="nav-link" href="/tarifs">Tarif iklan</a>
    
        </div>
    </div>
    </nav>

    <p> Mencari kerja tidak lah susah, kami siap membantu anda mendapatkan pekerjaan  
        caranya mudah dengan menekan 
        tombol <b> Tambah Pekerja</b>, maka data diri anda akan kami promosikan 
        untuk mendapatkan pekerjaan sesuai dengan yang anda inginkan. </p>
        <p><b>Random Pendaftar Kerja</b></p>
     @yield('content')
