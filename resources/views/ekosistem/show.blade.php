@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">Detail Ekosistem</h5>
        </div>

        <div class="card-body">
            <table class="table table-borderless">
                <tr>
                    <th width="30%">Nama Ekosistem</th>
                    <td>{{ $ekosistem->nama }}</td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <td>{{ $ekosistem->deskripsi }}</td>
                </tr>
                <tr>
                    <th>Lokasi</th>
                    <td>{{ $ekosistem->lokasi }}</td>
                </tr>
            </table>

            <a href="{{ route('ekosistem.index') }}" class="btn btn-secondary">
                ← Kembali
            </a>
            <a href="{{ route('ekosistem.edit', $ekosistem->id) }}" class="btn btn-warning">
                Edit Data
            </a>
        </div>
    </div>
</div>
@endsection
