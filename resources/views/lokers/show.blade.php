@extends('layouts.app')

@section('title', 'loker')

@section('content')
<div class="card">
    <div class="card-body">
    <h3>Nama : {{ $loker['Nama'] }}</h3>
    <h3>Email : {{ $loker['Email'] }}</h3>
    <h3>Pekerjaan : {{ $loker['Pekerjaan'] }}</h3>
    <h3>No Telepon : {{ $loker['no_tlp'] }}</h3>
    <h3>Alamat : {{ $loker['alamat'] }}</h3>
    </div>
</div>
@endsection
