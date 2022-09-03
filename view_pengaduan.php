<?php
include 'koneksi.php';

$sql = "SELECT * FROM pengaduan WHERE status_pengaduan='Diproses'";

$run = mysqli_query($koneksi, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>View pengaduan</title>
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
					<a href="history_pengaduan.php">
						<button type="button" class="btn btn-transparent">
							History
						</button>
					</a>
					<a href="halaman_admin.php">
						<button type="button" class="btn btn-transparent">
							Back
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

	<!-- Content -->
	<?php while ($row = mysqli_fetch_assoc($run)) : ?>
		<div class="mt-4" style="width: fit-content;">
			<table>
				<tr>
					<td>Nama pelapor:</td>
					<td><?= $row['username']; ?></td>
				</tr>
				<tr>
					<td>Pengaduan</td>
					<td><?= $row['pengaduan']; ?></td>
				</tr>
				<form action="" method="post">
					<tr>
						<td>Status pengaduan</td>
						<td>
							<select name="status" id="sel<?= $row['id_pengaduan'] ?>">
								<option <?php if ($row['status_pengaduan'] == "Diproses") {
											echo "selected";
										} ?> value="Diproses">Diproses</option>
								<option <?php if ($row['status_pengaduan'] == "Selesai") {
											echo "selected";
										} ?> value="Selesai">Selesai</option>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: center;">
							<input id="submit<?= $row['id_pengaduan'] ?>" type="submit" value="Save" name="button_<?=$row["id_pengaduan"]?>" style="width: 5rem; display:none;">
							<?php
							$id = $row['id_pengaduan'];
							$btn=$_POST['button_'.$id];
							if (isset($btn)) {
								$sts = (isset($_POST['status'])) ? $_POST['status'] : "";
								$ssql = "UPDATE `pengaduan` SET `status_pengaduan`='$sts' WHERE `id_pengaduan`='$id';";
								$ruun = mysqli_query($koneksi, $ssql);
								if ($ruun) {
									header('location:view_pengaduan.php');
								}
							}
							?>
						</td>
					</tr>
				</form>
			</table>
		</div>
		<script>
			var btn<?= $row['id_pengaduan'] ?> = document.getElementById('submit<?= $row['id_pengaduan'] ?>');
			document.getElementById('sel<?= $row['id_pengaduan'] ?>').addEventListener("change", function() {
				console.log(this.value);
				if (this.value == "Selesai") {
					btn<?= $row['id_pengaduan'] ?>.style.removeProperty("display");
					console.log("<?= $id ?>");
				} else {
					btn<?= $row['id_pengaduan'] ?>.style.display = "none";
				}
			})
		</script>
	<?php endwhile; ?>
	<!-- End of Content -->

</body>

</html>