
@extends('layouts.app')
@section('content')
<a href="/ekosistem/create" class="btn btn-primary mb-3">Tambah Data</a>
<table class="table table-bordered">
<tr><th>Nama</th><th>Aksi</th></tr>
@foreach($data as $d)
<tr>
<td>{{ $d['nama'] }}</td>
<td>
<a href="/ekosistem/{{ $d['id'] }}" class="btn btn-info btn-sm">Detail</a>
<a href="/ekosistem/{{ $d['id'] }}/edit" class="btn btn-warning btn-sm">Edit</a>
<a href="/ekosistem/{{ $d['id'] }}/delete" class="btn btn-danger btn-sm">Hapus</a>
</td>
</tr>
@endforeach
</table>
@endsection
