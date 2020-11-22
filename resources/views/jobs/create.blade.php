@extends('layouts.app')

@section('title', 'jobs')

@section('content')

<form action="/jobs" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Perusahaan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_perusahaan" aria-describedby="emailHelp" value="{{ old('nama_perusahaan') }}">
    @error('nama_perusahaan')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="text" class="form-control" name="alamat_perusahaan" id="exampleInputPassword1"  value="{{ old('alamat_perusahaan') }}">
    @error('alamat_perusahaan')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Pekerjaan</label>
    <input type="text" class="form-control" name="pekerjaan" id="exampleInputPassword1"  value="{{ old('Pekerjaan') }}">
    @error('Pekerjaan')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>
    

@endsection
