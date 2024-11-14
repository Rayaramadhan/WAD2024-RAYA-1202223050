<?php

include("dbconnection.php");

// buatkan function addStudent()
function addStudent()
{
    // variabel global
    global $conn;

    // Silakan buat variabel di bawah dengan data yang diambil dari form
    $id = $_POST["id"]
    $nama = $_POST["stuname"]
    $nim = $_POST["stuid"]
    $jurusan = $_POST["stuclass"]
    $angkata = $_POST["stuangkatan"]




    // Periksa apakah NIM sudah ada
    $ret = mysqli_query($conn, "SELECT* From tb_student WHERE id = $nim");

    if (mysqli_num_rows($ret) == 0) {
        // Masukkan data ke tabel tb_student
        $query = "INSERT INTO tb_student (stuid,stuname,stuid,stuclass,stuangkatan)
                  VALUES ('$id','$nama','$nim','$jurusan','$angkata')";
        $result = mysqli_query($conn, $query);

        /**
         * Buatlah logika untuk Memeriksa hasil dari operasi penambahan data mahasiswa.
         * 
         * Jika operasi berhasil, menampilkan pesan bahwa mahasiswa telah ditambahkan
         * dan mengarahkan pengguna ke halaman 'add-students.php'.
         * Jika operasi gagal, menampilkan pesan kesalahan.
         * Jika NIM sudah ada, menampilkan pesan bahwa NIM sudah ada.
         */
        
    }
}


function editStudent($id) {
    global $conn;


    $id = $_POST["id"]
    $nama = $_POST["stuname"]
    $nim = $_POST["stuid"]
    $jurusan = $_POST["stuclass"]
    $angkata = $_POST["stuangkatan"]

    
    // Isi query dibawah untuk update data mahasiswa berdasarkan ID
    $query = "UPDATE tb_student SET
             stuid= '$id'
             stuname = '$nama'
             stuid= '$nime'
             stuclass='$jurusan'
             stuangkatan = '$angkata'

     ";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo '<script>alert("Student data has been updated.")</script>';
        echo "<script>window.location.href ='manage-students.php'</script>";
    } else {
        echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }
}


?>