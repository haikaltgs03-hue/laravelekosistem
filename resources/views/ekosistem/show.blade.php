
@extends('layouts.app')
@section('content')
<div class="card">
<div class="card-body">
<h3>{{ $item['nama'] }}</h3>
<p>{{ $item['deskripsi'] }}</p>
<a href="/ekosistem" class="btn btn-secondary">Kembali</a>
</div>
</div>
@endsection
