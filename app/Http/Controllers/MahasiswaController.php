<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index() {
        $mahasiswa = DB::select("SELECT * FROM mahasiswas");
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create() {
        return view('mahasiswa.create');
    }

    public function store(Request $request) {
        DB::insert("INSERT INTO mahasiswas (nama, nim, jurusan, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())", [
            $request->nama, $request->nim, $request->jurusan
        ]);
        return redirect()->route('mahasiswa.index');
    }

    public function destroy($id) {
        DB::delete("DELETE FROM mahasiswas WHERE id = ?", [$id]);
        return redirect()->route('mahasiswa.index');
    }
}
