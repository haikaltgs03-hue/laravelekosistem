
@extends('layouts.app')
@section('content')
<form method="POST" action="/ekosistem/{{ $item['id'] }}/update">
@csrf
<div class="mb-3">
<label>Nama Ekosistem</label>
<input name="nama" value="{{ $item['nama'] }}" class="form-control">
</div>
<div class="mb-3">
<label>Deskripsi</label>
<textarea name="deskripsi" class="form-control">{{ $item['deskripsi'] }}</textarea>
</div>
<button class="btn btn-warning">Update</button>
</form>
@endsection
