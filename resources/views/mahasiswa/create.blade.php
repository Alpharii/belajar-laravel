<h1>Tambah Mahasiswa</h1>
<form method="POST" action="{{ route('mahasiswa.store') }}">
    @csrf
    <input name="nama" placeholder="Nama"><br>
    <input name="nim" placeholder="NIM"><br>
    <input name="jurusan" placeholder="Jurusan"><br>
    <button type="submit">Simpan</button>
</form>
