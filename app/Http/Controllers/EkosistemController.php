<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EkosistemController extends Controller
{
    private $file = 'ekosistem.json';

    private function getData() {
         if (!Storage::exists($this->file)) {
        Storage::put($this->file, json_encode([]));
    }

    return json_decode(Storage::get($this->file), true) ?? [];
    }

    private function saveData($data) {
        Storage::put($this->file, json_encode($data, JSON_PRETTY_PRINT));
    }

    public function index() {
        $data = $this->getData();
        return view('ekosistem.index', compact('data'));
    }

    public function create() {
        return view('ekosistem.create');
    }

    public function store(Request $request) {
        $data = $this->getData();
        $data[] = [
            'id' => time(),
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
        ];
        $this->saveData($data);
        return redirect('/ekosistem');
    }

    public function show($id) {
        $data = $this->getData();
        $item = collect($data)->firstWhere('id', $id);
        return view('ekosistem.show', compact('item'));
    }

    public function edit($id) {
        $data = $this->getData();
        $item = collect($data)->firstWhere('id', $id);
        return view('ekosistem.edit', compact('item'));
    }

    public function update(Request $request, $id) {
        $data = $this->getData();
        foreach ($data as &$item) {
            if ($item['id'] == $id) {
                $item['nama'] = $request->nama;
                $item['deskripsi'] = $request->deskripsi;
            }
        }
        $this->saveData($data);
        return redirect('/ekosistem');
    }

    public function destroy($id) {
        $data = $this->getData();
        $data = array_filter($data, fn($i) => $i['id'] != $id);
        $this->saveData(array_values($data));
        return redirect('/ekosistem');
    }
}
