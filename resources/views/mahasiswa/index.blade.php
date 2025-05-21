<h1>Daftar Mahasiswa</h1>
<a href="{{ route('mahasiswa.create') }}">Tambah</a>
<ul>
    @foreach ($mahasiswa as $m)
        <li>{{ $m->nama }} - {{ $m->nim }} - {{ $m->jurusan }}
            <form method="POST" action="{{ route('mahasiswa.destroy', $m->id) }}">
                @csrf @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </li>
    @endforeach
</ul>
