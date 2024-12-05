<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Detail Mahasiswa</h2>
        <a href="{{ route('mahasiswas.index') }}" class="btn btn-secondary mb-3">Kembali ke Daftar Mahasiswa</a>
        
        <table class="table table-bordered">
            <tr>
                <th>NIM</th>
                <td>{{ $mahasiswa->nim }}</td>
            </tr>
            <tr>
                <th>Nama Mahasiswa</th>
                <td>{{ $mahasiswa->nama_mahasiswa }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $mahasiswa->email }}</td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td>{{ $mahasiswa->jurusan }}</td>
            </tr>
            <tr>
                <th>Dosen Wali</th>
                <td>{{ $mahasiswa->dosen ? $mahasiswa->dosen->nama_dosen : 'Tidak ada dosen wali' }}</td> <!-- Display Dosen Wali -->
            </tr>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
