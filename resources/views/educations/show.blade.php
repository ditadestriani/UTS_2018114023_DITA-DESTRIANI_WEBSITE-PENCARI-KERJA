@extends('layouts.app')

@section('title', 'education')

@section('content')
<div class="card">
    <div class="card-body">
    <h3>Nama : {{ $education['Nama'] }}</h3>
    <h3>Email : {{ $education['Email'] }}</h3>
    <h3>Pekerjaan : {{ $education['Pekerjaan'] }}</h3>
    <h3>No Telepon : {{ $education['no_tlp'] }}</h3>
    <h3>Alamat : {{ $education['alamat'] }}</h3>
    </div>
</div>
@endsection
