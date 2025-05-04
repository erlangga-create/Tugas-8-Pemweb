<form method="POST" action="{{ route('mahasiswa.update', $mhs->id) }}">
    @csrf
    @method('PUT')
    Nama: <input name="nama" value="{{ $mhs->nama }}"><br>
    NIM: <input name="nim" value="{{ $mhs->nim }}"><br>
    Alamat: <textarea name="alamat">{{ $mhs->alamat }}</textarea><br>
    <button type="submit">Update</button>
</form>