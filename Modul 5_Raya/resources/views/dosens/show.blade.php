<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Detail Dosen</h2>
        <a href="{{ route('dosens.index') }}" class="btn btn-secondary mb-3">Kembali ke Daftar Dosen</a>
        
        <table class="table table-bordered">
            <tr>
                <th>Kode Dosen</th>
                <td>{{ $dosen->kode_dosen }}</td>
            </tr>
            <tr>
                <th>Nama Dosen</th>
                <td>{{ $dosen->nama_dosen }}</td>
            </tr>
            <tr>
                <th>NIP</th>
                <td>{{ $dosen->nip }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $dosen->email }}</td>
            </tr>
            <tr>
                <th>Telepon</th>
                <td>{{ $dosen->no_telepon }}</td>
            </tr>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
