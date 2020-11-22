@extends('layouts.app')

@section('title', 'jobs')

@section('content')
<div class="card">
    <div class="card-body">
    <h3>Nama Perusahaan : {{ $job['nama_perusahaan'] }}</h3>
    <h3>Alamat Perusahaan : {{ $job['alamat_perusahaan'] }}</h3>
    <h3>Pekerjaan : {{ $job['Pekerjaan'] }}</h3>

    </div>
</div>
@endsection
