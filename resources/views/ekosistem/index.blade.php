@extends('layouts.app')

@section('content')

<a href="{{ route('ekosistem.create') }}" class="btn btn-primary mb-3">
    Tambah Data
</a>

<table class="table table-bordered">
    <thead class="table-light">
        <tr>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Lokasi</th>
            <th style="width: 220px;">Aksi</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($ekosistems as $eko)
            <tr>
                <td>{{ $eko->nama }}</td>
                <td>{{ $eko->deskripsi }}</td>
                <td>{{ $eko->lokasi }}</td>
                <td class="text-nowrap">
                    <a href="{{ route('ekosistem.show', $eko->id) }}"
                       class="btn btn-info btn-sm me-1 mb-1">
                        Detail
                    </a>

                    <a href="{{ route('ekosistem.edit', $eko->id) }}"
                       class="btn btn-warning btn-sm me-1 mb-1">
                        Edit
                    </a>

                    <form action="{{ route('ekosistem.destroy', $eko->id) }}"
                          method="POST"
                          class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="btn btn-danger btn-sm mb-1"
                                onclick="return confirm('Yakin mau hapus data ini?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center">
                    Data kosong
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection
