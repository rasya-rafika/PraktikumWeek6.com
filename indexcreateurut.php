<?php 
include_once ("koneksi.php");
$query= "SELECT * FROM tb_buku";
$hasil= mysqli_query ($conn, $query);

$nomor = 1; // Inisialisasi nomor mulai dari 1
?>
<!DOCTYPE html>
<html>
<head>
    <title>Koleksi Buku</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" 
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
          crossorigin="anonymous">
</head>
<body>
    <div class="alert alert-success text-center" role="alert">
        <h2>DATA KOLEKSI BUKU PERPUSTAKAAN</h2>
    </div>
    <a href="tambahbuku.php" class="btn btn-primary mb-1 mt-1">
        <i class="fas fa-user-plus mr-2"></i>Tambah Buku
    </a>
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Kategori</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($data = mysqli_fetch_array($hasil)) { ?>
                <tr>
                    <th scope="row"> <?php echo $nomor; ?> </th>
                    <td> <?php echo $data['judul_buku']; ?> </td>
                    <td> <?php echo $data['pengarang']; ?> </td>
                    <td> <?php echo $data['tahun_terbit']; ?> </td>
                    <td> <?php echo $data['kategori']; ?> </td>
                </tr>
            <?php $nomor++; } ?>
        </tbody>
    </table>
</body>
</html>
