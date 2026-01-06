@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header bg-warning">
            <h5 class="mb-0">Edit Data Ekosistem</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('ekosistem.update', $ekosistem->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Ekosistem</label>
                    <input type="text" name="nama" class="form-control"
                           value="{{ $ekosistem->nama }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="4" required>{{ $ekosistem->deskripsi }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Lokasi</label>
                    <input type="text" name="lokasi" class="form-control"
                           value="{{ $ekosistem->lokasi }}" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('ekosistem.index') }}" class="btn btn-secondary">
                        Batal
                    </a>
                    <button type="submit" class="btn btn-warning">
                        Update Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
