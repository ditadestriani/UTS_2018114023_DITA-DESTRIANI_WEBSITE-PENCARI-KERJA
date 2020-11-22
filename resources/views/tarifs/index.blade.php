@extends('layouts.app')

@section('title', 'tarifs')

@section('content')
<a href="/tarifs/create" class="card-link btn-primary">Tambah Iklan</a>
@foreach ($tarifs as $tarif)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/tarifs/{{$tarif['id']}}" class="card-title">{{ $tarif['jangka_waktu'] }}</a>
    <p class="card-text">{{ $tarif['tarif_harga'] }}</p>
    <p class="card-text">{{ $tarif['jenis_iklan'] }}</p>

    @csrf
    @method('DELETE')
    <button class="card-link btn-danger">Delete Jobs</a>
    </form>
  </div>
</div>
    
@endforeach
<div>
{{ $tarifs->links() }} </div>
@endsection
