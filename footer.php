<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, contact, form, icons" />

	<title>SPOSITE FOOTER</title>

	<link rel="stylesheet" href="assets/css/demo.css">
	<link rel="stylesheet" href="assets/css/footer-distributed-with-contact-form.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>
		<footer class="container footer-distributed">

			<div class="footer-left">

				<h3><img src="gambar/sporty.png" width="50px" height="50px" />&nbsp;<span>SPOSITE</span></h3>
				
				<div class="footer-icons">
					<p style="color:#FFF;">Follow Us</p>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>

				</div>
                <br />
                <br />
                <p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Bantuan</a>
					·
					<a href="#">About</a>
					·
					<a href="#">Panduan</a>
					·
					<a href="#">Contact</a>
				</p>
				<p class="footer-company-name">SPOSITE-TEAM&copy; 2020</p>
			</div>

			<div class="footer-right">

				

				<form action="" method="post">
					<p>Kritik & Saran</p><br /><br />
					<input type="text" name="email" placeholder="Email Atau Nama Anda" />
					<textarea name="message" placeholder="Kritik Dan Saran"></textarea>
					<button type="submit" name="kirim">Send</button>

				</form>
                <?php 
                include ("sendEmail.php"); // menyisipkan file sendEmail agar kritik dan saran yang diisi dapat terkirim melalui email
				if(isset($_POST['kirim'])){ //ketika tombol kirim ditekan maka akan menjalankan code bagian ini
					$nama = $_POST['email']; // variabel berisi email pengirim
					$message = $_POST['message'];  //berisi pesan kritik saran
					$email = "sposite@gmail.com"; //email penerima
					$to = $email;  //email penerima
					$subject = "Kritik Dan Saran dari $nama"; //subject pesan pada email
					 
					//sender
					$sender = "sposite@gmail.com"; //email pengirim
					$password = "sposite123"; //password email pengirim
		
					$sentmail = (email_localhost($to,$subject,$message,$sender,$password)); //fungsi untuk mengirim email
		
					if($sentmail) //jika berhasil
					{ 
						//akan menjalankan alert ini
						echo "<script> alert(\"Terima Kasih Telah Megirim Kritik Dan Saran..!!\");</script>";
					}
					else
					{
						//jika gagal menjalankan alert ini
						echo "<script> alert(\"Maaf!! Terjadi Kesalahan\");</script>";
					}
					}
                ?>

			
            </div>
            
		
		</footer>
