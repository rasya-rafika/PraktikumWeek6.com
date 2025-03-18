<?php
include_once("koneksi.php");

$id = $_GET['id'];
$query = "SELECT * FROM tb_buku WHERE id_buku = '$id'";
$hasil = mysqli_query($conn, $query);
$data = mysqli_fetch_array($hasil);
?>

<!DOCTYPE html>
<html>
<head>
 <title>Edit Buku</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
 <div class="container mt-5">
   <div class="alert alert-success text-center" role="alert">
     <h2>EDIT DATA BUKU</h2>
   </div>

   <form method="post" action="prosesubahbuku.php">
     <!-- ID Buku (ReadOnly) -->
     <div class="form-group row">
       <label for="id_buku" class="col-sm-2 col-form-label">ID Buku</label>
       <div class="col-sm-4">
         <input type="text" name="id_buku" class="form-control" value="<?php echo $data['id_buku']; ?>" readonly>
       </div>
     </div>

     <div class="form-group row">
       <label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
       <div class="col-sm-4">
         <input type="text" name="judul" class="form-control" value="<?php echo $data['judul_buku']; ?>" required>
       </div>
     </div>

     <div class="form-group row">
       <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
       <div class="col-sm-4">
         <input type="text" name="pengarang" class="form-control" value="<?php echo $data['pengarang']; ?>" required>
       </div>
     </div>

     <div class="form-group row">
       <label for="tahun_terbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
       <div class="col-sm-4">
         <input type="number" name="tahun_terbit" class="form-control" value="<?php echo $data['tahun_terbit']; ?>" required>
       </div>
     </div>

     <div class="form-group row">
       <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
       <div class="col-sm-4">
         <input type="text" name="kategori" class="form-control" value="<?php echo $data['kategori']; ?>" required>
       </div>
     </div>

     <button type="submit" class="btn btn-success">Update</button>
     <a href="index.php" class="btn btn-secondary">Kembali</a>
   </form>
 </div>
</body>
</html>