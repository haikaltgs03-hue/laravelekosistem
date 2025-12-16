
@extends('layouts.app')
@section('content')
<form method="POST" action="/ekosistem">
@csrf
<div class="mb-3">
<label>Nama Ekosistem</label>
<input name="nama" class="form-control">
</div>
<div class="mb-3">
<label>Deskripsi</label>
<textarea name="deskripsi" class="form-control"></textarea>
</div>
<button class="btn btn-success">Simpan</button>
</form>
@endsection
