@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tambah Data Ekosistem</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('ekosistem.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Ekosistem</label>
                    <input type="text" name="nama" class="form-control" placeholder="Contoh: Hutan Mangrove" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="4" placeholder="Deskripsi ekosistem..." required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Lokasi</label>
                    <input type="text" name="lokasi" class="form-control" placeholder="Contoh: Kalimantan" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('ekosistem.index') }}" class="btn btn-secondary">
                        ← Kembali
                    </a>
                    <button type="submit" class="btn btn-success">
                        Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
