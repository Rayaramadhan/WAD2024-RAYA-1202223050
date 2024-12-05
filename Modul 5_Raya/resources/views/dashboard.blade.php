<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Utama</title>
    <!-- Menambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Dashboard Utama Manajemen Data</h1>
        
        <div class="row justify-content-center">
            <!-- Manajemen Dosen -->
            <div class="col-md-5 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Manajemen Dosen</h5>
                        <p class="card-text">Kelola data dosen, termasuk menambah, mengubah, dan menghapus data dosen.</p>
                        <a href="{{ route('dosens.index') }}" class="btn btn-primary">Ke Daftar Dosen</a>
                    </div>
                </div>
            </div>

            <!-- Manajemen Mahasiswa -->
            <div class="col-md-5 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Manajemen Mahasiswa</h5>
                        <p class="card-text">Kelola data mahasiswa, termasuk menambah, mengubah, dan menghapus data mahasiswa.</p>
                        <a href="{{ route('mahasiswas.index') }}" class="btn btn-success">Ke Daftar Mahasiswa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Menambahkan JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
