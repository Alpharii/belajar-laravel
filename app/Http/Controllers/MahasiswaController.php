<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return response()->json(Mahasiswa::all());
    }

    public function store(Request $request)
    {
        $mahasiswa = Mahasiswa::create($request->only(['nama', 'nim', 'jurusan']));
        return response()->json($mahasiswa, 201);
    }

    public function show($id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        return response()->json($mhs);
    }

    public function update(Request $request, $id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        $mhs->update($request->only(['nama', 'nim', 'jurusan']));
        return response()->json($mhs);
    }

    public function destroy($id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        $mhs->delete();
        return response()->json(['message' => 'Berhasil dihapus']);
    }
}
