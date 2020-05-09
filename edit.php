<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>SPOSITE</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">SPOSITE</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
 
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="tambah.php">Tambah Customer</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container" style="margin-top:20px">
		<h2>Edit Customer</h2>
		
		<hr>
		<?php
		//jika tombol simpan di tekan/klik
		$idcustomer = $_GET['idcustomer'];
		if(isset($_POST['submit'])){
			$idcustomer 	= $_POST['IdCustomer'];
			$Nama			= $_POST['Nama'];
			$Alamat	        = $_POST['Alamat'];
			$Nomor_Telepon	= $_POST['Nomor_Telepon'];
			$tsql = "UPDATE Customer SET  Nama='$Nama', Alamat='$Alamat', Nomor_Telepon='$Nomor_Telepon' WHERE IdCustomer = '$idcustomer'";
			$sql = mysqli_query($koneksi, $tsql) or die(mysqli_error($koneksi));
			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="edit.php?idcustomer=idcustomer";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		mysqli_close($koneksi);
		?>
		
		<form action="edit.php" method="post">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">IDCustomer</label>
				<div class="col-sm-10">
					<input type="text" name="IdCustomer" class="form-control" required="true" value=<?php echo $idcustomer ?> readonly> 
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NAMA</label>
				<div class="col-sm-10">
					<input type="text" name="Nama" class="form-control" >
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">ALAMAT</label>
				<div class="col-sm-10">
					<input type="text" name="Alamat" class="form-control" required="true">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NOMOR TELEPON</label>
				<div class="col-sm-10">
                    <input type="text" name="Nomor_Telepon" class="form-control" required="true">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
					<a href="index.php" class="btn btn-warning">KEMBALI</a>
				</div>
			</div>
		</form>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>
