<form method="POST" action="{{ route('mahasiswa.store') }}">
    @csrf
    Nama: <input name="nama"><br>
    NIM: <input name="nim"><br>
    Alamat: <textarea name="alamat"></textarea><br>
    <button type="submit">Simpan</button>
</form>