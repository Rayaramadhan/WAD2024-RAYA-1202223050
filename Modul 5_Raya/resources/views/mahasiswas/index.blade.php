<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Daftar Mahasiswa</h2>
        <a href="{{ route('index') }}" class="btn btn-secondary mb-3">Kembali ke Dashboard</a>
        <a href="{{ route('mahasiswas.create') }}" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                    <th>Dosen Wali</th> <!-- Added Dosen Wali Column -->
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mahasiswa)
                    <tr>
                        <td>{{ $mahasiswa->nim }}</td>
                        <td>{{ $mahasiswa->nama_mahasiswa }}</td>
                        <td>{{ $mahasiswa->email }}</td>
                        <td>{{ $mahasiswa->jurusan }}</td>
                        <td>{{ $mahasiswa->dosen ? $mahasiswa->dosen->nama_dosen : 'Tidak ada dosen wali' }}</td> <!-- Show Dosen Wali -->
                        <td>
                            <a href="{{ route('mahasiswas.show', $mahasiswa->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('mahasiswas.edit', $mahasiswa->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('mahasiswas.destroy', $mahasiswa->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
