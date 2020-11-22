@extends('layouts.app')

@section('title', 'jobs')

@section('content')

<form action="/jobs/{{ $job['id'] }}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Perusahaan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_perusahaan" aria-describedby="emailHelp" value="{{ old('nama_perusahaan') ? old('nama_perusahaan') : $job['nama_perusahaan'] }}">
    @error('nama_perusahaan')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat Perusahaan</label>
    <input type="text" class="form-control" name="alamat_perusahaan" id="exampleInputPassword1" value="{{ old('alamat_perusahaan') ? old('alamat_perusahaan') : $job['alamat_perusahaan'] }}" >
    @error('alamat_perusahaan')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Pekerjaan</label>
    <input type="text" class="form-control" name="Pekerjaan" id="exampleInputPassword1" value="{{ old('Pekerjaan') ? old('Pekerjaan') : $job['Pekerjaan'] }}" >
    @error('Pekerjaan')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    

@endsection
