<?php 
include_once ("koneksi.php");
$query= "SELECT * FROM tb_buku";
$hasil= mysqli_query ($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
 <title>Koleksi Buku</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <!-- Font Awesome buat icon -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
 <div class="alert alert-success text-center" role="alert"> 
   <h2>DATA KOLEKSI BUKU PERPUSTAKAAN</h2>
 </div>

 <!-- Tombol Tambah Buku -->
 <a href="tambahbuku.php" class="btn btn-primary mb-1 mt-1">
   <i class="fas fa-plus-circle mr-2"></i>Tambah Buku
 </a>

 <table class="table table-bordered">
 <thead class="thead-light">
   <tr>
     <th scope="col">Id_Buku</th>
     <th scope="col">Judul Buku</th>
     <th scope="col">Pengarang</th>
     <th scope="col">Tahun Terbit</th>
     <th scope="col">Kategori</th>
     <th scope="col">Aksi</th> <!-- Kolom aksi CRUD -->
   </tr>
 </thead>
 <tbody>
 <?php while ($data=mysqli_fetch_array ($hasil)) { ?>
   <tr>
     <th scope="row"><?php echo $data['id_buku']; ?></th>
     <td><?php echo $data['judul_buku']; ?></td>
     <td><?php echo $data['pengarang']; ?></td>
     <td><?php echo $data['tahun_terbit']; ?></td>
     <td><?php echo $data['kategori']; ?></td>
     <td>
       <!-- Tombol Edit -->
       <a href="indexedit.php?id=<?php echo $data['id_buku']; ?>" class="btn btn-warning btn-sm">
         <i class="fas fa-edit"></i> Edit
       </a>
       <!-- Tombol Hapus dengan konfirmasi -->
       <a href="indexdelete.php?id=<?php echo $data['id_buku']; ?>" 
          class="btn btn-danger btn-sm" 
          onclick="return confirm('Yakin mau hapus buku ini?');">
         <i class="fas fa-trash"></i> Hapus
       </a>
     </td>
   </tr>
 <?php } ?>
 </tbody>
</table>

<!-- Bootstrap JS & jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>