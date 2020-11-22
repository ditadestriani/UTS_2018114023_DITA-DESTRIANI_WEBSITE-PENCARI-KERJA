@extends('layouts.app')

@section('title', 'tarifs')

@section('content')

<form action="/tarifs" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Jangka Waktu</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="jangka_waktu" aria-describedby="emailHelp" value="{{ old('jangka_waktu') }}">
    @error('jangka_waktu')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tarif Harga</label>
    <input type="text" class="form-control" name="tarif_harga" id="exampleInputPassword1"  value="{{ old('tarif_harga') }}">
    @error('tarif_harga')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jenis Iklan</label>
    <input type="text" class="form-control" name="jenis_iklan" id="exampleInputPassword1"  value="{{ old('jenis_iklan') }}">
    @error('jenis_iklan')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>
    

@endsection
