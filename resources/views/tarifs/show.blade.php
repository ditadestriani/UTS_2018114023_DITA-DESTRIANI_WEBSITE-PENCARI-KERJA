@extends('layouts.app')

@section('title', 'tarifs')

@section('content')
<div class="card">
    <div class="card-body">
    <h3>Jangka waktu : {{ $tarif['jangka_waktu'] }}</h3>
    <h3>Tarif harga : {{ $tarif['tarif_harga'] }}</h3>
    <h3>Jenis Iklan : {{ $tarif['jenis_iklan'] }}</h3>

    </div>
</div>
@endsection
