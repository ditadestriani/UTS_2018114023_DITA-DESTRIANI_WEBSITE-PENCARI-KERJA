@extends('layouts.app')

@section('title', 'lokers')

@section('content')

<form action="/lokers" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" value="{{ old('nama') }}">
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">email</label>
    <input type="text" class="form-control" name="email" id="exampleInputPassword1"  value="{{ old('email') }}">
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">pekerjaan</label>
    <input type="text" class="form-control" name="pekerjaan" id="exampleInputPassword1"  value="{{ old('pekerjaan') }}">
    @error('pekerjaan')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">No Telepon</label>
    <input type="text" class="form-control" name="no_tlp" id="exampleInputPassword1"  value="{{ old('no_tlp') }}">
    @error('no_tlp')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="exampleInputPassword1"  value="{{ old('alamat') }}">
    @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>

  <button type="submit" class="btn btn-primary">Tambah</button>
</form>
    

@endsection
