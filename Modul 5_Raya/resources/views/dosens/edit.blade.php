<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Dosen</h2>
        <form action="{{ route('dosens.update', $dosen->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="kode_dosen" class="form-label">Kode Dosen</label>
                <input type="text" class="form-control" id="kode_dosen" name="kode_dosen" value="{{ $dosen->kode_dosen }}" required>
            </div>
            <div class="mb-3">
                <label for="nama_dosen" class="form-label">Nama Dosen</label>
                <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" value="{{ $dosen->nama_dosen }}" required>
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip" value="{{ $dosen->nip }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $dosen->email }}" required>
            </div>
            <div class="mb-3">
                <label for="no_telepon" class="form-label">No Telepon</label>
                <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="{{ $dosen->no_telepon }}">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('dosens.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
