@extends('layouts.app')

@section('title', 'educations')

@section('content')
<a href="/educations/create" class="card-link btn-primary">Tambah Jenjang</a>
@foreach ($educations as $education)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/educations/{{$education['id']}}" class="card-title">{{ $education['name'] }}</a>
    <p class="card-text">{{ $education['description'] }}</p>
    <hr>
      <a href="" class="card-link btn-primary">Tambah Pekerja</a>
        @foreach ($education->lokers as $loker)
          <li> {{$loker->Nama}} </li>
        @endforeach
    <hr>
    <a href="/educations/{{$education['id']}}/edit" class="card-link btn-warning">Edit kualifikasi</a>
    <form action="/educations/{{ $education['id'] }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="card-link btn-danger">Delete Kualifikasi</a>
    </form>
  </div>
</div>
    
@endforeach
<div>
{{ $educations->links() }} </div>
@endsection

