<?php
include_once("koneksi.php");

// Ambil data dari form
$id = $_POST['id_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun = $_POST['tahun_terbit'];
$kategori = $_POST['kategori'];

// Query update data
$query = "UPDATE tb_buku SET 
            judul_buku = '$judul',
            pengarang = '$pengarang',
            tahun_terbit = '$tahun',
            kategori = '$kategori' 
          WHERE id_buku = '$id'";

$hasil = mysqli_query($conn, $query);

if ($hasil) {
    echo "<script>
            alert('Data berhasil diupdate!');
            window.location.href='index.php';
          </script>";
} else {
    echo "<script>
            alert('Gagal update data!');
            window.location.href='index.php';
          </script>";
}
?>