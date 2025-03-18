<?php
include_once("koneksi.php");

// Ambil ID dari URL
$id = $_GET['id'];

// Query hapus data berdasarkan id_buku
$query = "DELETE FROM tb_buku WHERE id_buku = '$id'";
$hasil = mysqli_query($conn, $query);

// Cek hasil query
if ($hasil) {
    // Kalau berhasil, balik ke halaman utama
    echo "<script>
            alert('Data berhasil dihapus!');
            window.location.href='index.php';
          </script>";
} else {
    // Kalau gagal, kasih pesan error
    echo "<script>
            alert('Gagal menghapus data!');
            window.location.href='index.php';
          </script>";
}
?>