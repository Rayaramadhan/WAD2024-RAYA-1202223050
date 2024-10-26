<?php
//silahkan jawab disini (menangkap data dari form)
if ($_POST) {
    $lama = $_POST["exercise"];
}
//silahkan jawab disini (logika pola makan berdasarkan lama olahraga)
if ($lama >= 15) {
    $hasil = "anda boleh makan nasi sebanyak 5 sendok makaan.";
} elseif ($lama <= 15 && $lama > 0) {
    $hasil = "anda disarankan tidak boleh makan nasi";
} elseif ($lama == 0) {
    $hasil = "anda dianjukan untuk tidak makan dan olaharga selama 5 menit";
}else {
    $error = "tidak boleh mines";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pola Makan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <h3>Hasil Pola Makan Anda</h3>
            <p class="alert alert-info">
            </form>
                    <?php
                    if (isset($hasil)) {
                        echo "<div class='alert alert-success'>olahrga Anda berada di waktu: $hasil</div>";
                    }
                    ?>
                    <?php
                    if (isset($error)) {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                    ?>
            </p>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
