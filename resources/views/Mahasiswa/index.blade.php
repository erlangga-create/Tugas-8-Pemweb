<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h2>{{ $editData ? 'Edit Mahasiswa' : 'Tambah Mahasiswa' }}</h2>

    <form method="POST" action="{{ $editData ? route('mahasiswa.update', $editData->id) : route('mahasiswa.store') }}">
        @csrf
        @if($editData)
        @endif
        <div class="mb-3">
            <label>Nama:</label>
            <input class="form-control" name="nama" value="{{ $editData->nama ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label>NIM:</label>
            <input class="form-control" name="nim" value="{{ $editData->nim ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label>Alamat:</label>
            <textarea class="form-control" name="alamat" required>{{ $editData->alamat ?? '' }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">{{ $editData ? 'Update' : 'Simpan' }}</button>
        @if($editData)
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
        @endif
    </form>

    <hr>

    <h3>Daftar Mahasiswa</h3>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $mhs)
                <tr>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->alamat }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('mahasiswa.destroy', $mhs->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
