<?php
include "config.php";
//variabel yang berisi inputan dari member
$Nomor_Penyewaan = $_POST['nomor_penyewaan'];
$rek_kirim = $_POST['rekening_kirim'];
$rek_penerima = $_POST['rekening_penerima'];
$status = "Menunggu Konfirmasi admin";
$foto = $_FILES['foto_bukti']['name'];
$lokasi= $_FILES['foto_bukti']['tmp_name'];
//simpan foto ke folder
copy ($lokasi,"sewa/bukti_trf/".$foto);
//simpan ke database
$simpan = "insert into pembayaran_transfer values('$Nomor_Penyewaan','$rek_kirim','$rek_penerima','$status','$foto')";
//update data di database
$s = mysqli_query($koneksi, "update detail_penyewaan set status = '$status' where nomor_penyewaan = '$Nomor_Penyewaan'"); 
$pro = mysqli_query($koneksi, $simpan);
	
	if($pro && $s){ //jika berhasil menyimpan dan update
		echo "<script> alert(\"Silahkan tunggu email konfirmasi\"); window.location = \"index.php\"; </script>";	
		} else { //jika tidak
		echo "<script> alert(\"Maaf, Terjadi Kesalahan...\"); window.location = \"index.php\"; </script>";		
			}

?>
