@extends('layouts.app')

@section('title', 'jobs')

@section('content')
<a href="/jobs/create" class="card-link btn-primary">Tambah Jobs</a>
@foreach ($jobs as $job)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/jobs/{{$job['id']}}" class="card-title">{{ $job['nama_perusahaan'] }}</a>
    <p class="card-text">{{ $job['alamat_perusahaan'] }}</p>
    <p class="card-text">{{ $job['Pekerjaan'] }}</p>
    <a href="/jobs/{{$job['id']}}/edit" class="card-link btn-warning">Edit Jobs</a>
    <form action="/jobs/{{ $job['id'] }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="card-link btn-danger">Delete Jobs</a>
    </form>
  </div>
</div>
    
@endforeach
<div>
{{ $jobs->links() }} </div>
@endsection
