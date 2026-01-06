<?php

namespace App\Http\Controllers;

use App\Models\Ekosistem;
use Illuminate\Http\Request;

class EkosistemController extends Controller
{
    public function index()
    {
        $ekosistems = Ekosistem::all();
        return view('ekosistem.index', compact('ekosistems'));
    }

    public function create()
    {
        return view('ekosistem.create');
    }

    public function store(Request $request)
    {
        Ekosistem::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
        ]);

        return redirect('/ekosistem');
    }

    public function show($id)
    {
        $ekosistem = Ekosistem::findOrFail($id);
        return view('ekosistem.show', compact('ekosistem'));
    }

    public function edit($id)
    {
        $ekosistem = Ekosistem::findOrFail($id);
        return view('ekosistem.edit', compact('ekosistem'));
    }

    public function update(Request $request, $id)
    {
        $ekosistem = Ekosistem::findOrFail($id);
        $ekosistem->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
        ]);

        return redirect('/ekosistem');
    }

    public function destroy($id)
    {
        Ekosistem::destroy($id);
        return redirect('/ekosistem');
    }
}
