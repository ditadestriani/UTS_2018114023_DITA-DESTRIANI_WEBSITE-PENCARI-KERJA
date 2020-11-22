@extends('layouts.app')

@section('title', 'lokers')

@section('content')
<a href="/lokers/create" class="card-link btn-primary">Tambah Pekerja</a>
@foreach ($lokers as $loker)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/lokers/{{$loker['id']}}" class="card-title">{{ $loker['Nama'] }}</a>
    <p class="card-text">{{ $loker['Email'] }}</p>
    <p class="card-text">{{ $loker['Pekerjaan'] }}</p>
    <p class="card-subtitle mb-2 text-muted">{{ $loker['no_tlp'] }}</p>
    <p class="card-text">{{ $loker['alamat'] }}</p>

    @csrf
    @method('DELETE')
    <button class="card-link btn-danger">Delete Pendaftar</a>
    </form>
  </div>
</div>
    
@endforeach
<div>
{{ $lokers->links() }} </div>
@endsection
