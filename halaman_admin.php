<?php 
    include 'koneksi.php';

    $sql="SELECT * FROM pengaduan WHERE status_pengaduan='Diproses'";
    $run=mysqli_query($koneksi,$sql);

    $row=mysqli_num_rows($run);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>

  <!-- NavBar -->
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">

      <a class="navbar-brand" href="#">SMK TELKOM JAKARTA</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
        </ul>
        <ul class="nav justify-content-end">
          <a href="view_pengaduan.php">
            <button type="button" class="btn btn-transparent">
              PENGADUAN <span class="badge text-bg-dark"><?= $row; ?></span>
            </button>
          </a>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">KELUAR</a>
          </li>
        </ul>
        <!-- <ul class="nav nav-tabs justify-content-end">
         <li class="nav-item">
           <a class="nav-link" href="#">SISWA</a>
         </li>
         <li class="nav-item">
         
           
         </li>       
         <li class="nav-item">
           <a class="nav-link" href="logout.php">KELUAR</a>
         </li>       
    </ul> -->
      </div>
    </div>
  </nav>
  <!-- NavBar -->

  <!-- Title -->

</body>

</html>