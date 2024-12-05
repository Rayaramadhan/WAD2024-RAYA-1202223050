<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Daftar Dosen</h2>
        <!-- Tombol Kembali ke Dashboard -->
        <a href="{{ route('index') }}" class="btn btn-secondary mb-3">Kembali ke Dashboard</a>
        <a href="{{ route('dosens.create') }}" class="btn btn-primary mb-3">Tambah Dosen</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Kode Dosen</th>
                    <th>Nama Dosen</th>
                    <th>NIP</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dosens as $dosen)
                    <tr>
                        <td>{{ $dosen->kode_dosen }}</td>
                        <td>{{ $dosen->nama_dosen }}</td>
                        <td>{{ $dosen->nip }}</td>
                        <td>{{ $dosen->email }}</td>
                        <td>{{ $dosen->no_telepon }}</td>
                        <td>
                            <a href="{{ route('dosens.edit', $dosen->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{ route('dosens.show', $dosen->id) }}" class="btn btn-info btn-sm">Detail</a> <!-- Menu Detail -->
                            <form action="{{ route('dosens.destroy', $dosen->id) }}" method="POST" style="display:inline;">
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
