<?php
require ("config.php");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SESSION['customer'])){
	$username = $_SESSION['customer'];
	$sql = "select * from customer where username_cust = '$username'";
	$query_sel = mysqli_query($koneksi,$sql);
	$sql_sel = mysqli_fetch_array($query_sel);
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <link rel="shortcut icon" href="assets/images/Goputsalgaji.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pembayaran</title>
    <!-- Custom Theme Style -->
    
    <link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    
	  <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="assets/css/w3.css">
    <link rel="stylesheet" href="assets/css/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
  	body { 
			padding-top: 60px;
			background-color:#CCC;
	}
	.container {
		background-color:#FFF;
		}
	
	</style>
    
    
  </head>
  <body>
  <?php
  include "navbar.php";
    include "user_login.php";
    include "admin_login.php";
     ?>
        <!-- page content -->
        <div class="container">
        <br>
        <div class="panel panel-default">
          <div class="panel-heading">Pemesanan Lapangan</div>
          <div class="panel-body">
          <h4>Konfirmasi Pembayaran </h4>
          <hr>
          <form class="form-horizontal form-label-left" action="upload_pembayaran.php" method="post" enctype="multipart/form-data">
			<?php 
			$kd=$_GET['nomor_penyewaan']; //mengambil kode booking dari form pemesanan
			?>
                          <div class="form-group">
                            <label class="control-label col-md-5 col-sm-5 col-xs-12" for="first-name">Kode Booking <span class="required"></span>
                            </label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                              <input type="text" id="first-name" name="id_book" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $kd; ?>" readonly>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-5 col-sm-5 col-xs-12" for="first-name">Rekening Pengirim <span class="required"></span>
                            </label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                              <input type="text" id="first-name" name="rekening_kirim" required="required" class="form-control col-md-7 col-xs-12" value="" placeholder="xxxx-xxx-xxxx-xx">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="control-label col-md-5 col-sm-5 col-xs-12" for="first-name">Rekening Penerima <span class="required"></span>
                            </label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                              <div class="radio">
                                  <label><input type="radio" name="rekening_penerima" value="bca"><img src="assets/images/bca.png" style="width:80px; height:30px;"> xxxx-xxx-xxxx-xx (an. xxxxx)</label>
                                </div>
                                <br>
                                <div class="radio">
                                  <label><input type="radio" name="rekening_penerima" value="bri"><img src="assets/images/bri.gif" style="width:80px; height:30px;"> xxxx-xxx-xxxx-xx (an. xxxxx)</label>
                                </div>
                                <br>
                                <div class="radio">
                                  <label><input type="radio" name="rekening_penerima" value="mandiri"><img src="assets/images/mandiri.png" style="width:80px; height:30px;"> xxxx-xxx-xxxx-xx (an. xxxxx)</label>
                                </div>
                            </div>
                          </div>
                          <br>
                          <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" for="first-name">Upload Bukti<span class="required"></span>
                                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                         <label class="btn btn-info btn-xs" for="my-file-selector2">
                                  <input id="my-file-selector2" name="foto_bukti" type="file" style="display:none;" onchange="$('#upload-file-foto').html($(this).val());">
                                  Upload
                              </label>
                  
                            </div>
                         </div>
                          <div class="form-group">
                            <label class="control-label col-md-5 col-sm-5 col-xs-12" for="first-name"><span class="required"></span>
                            </label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                              <div>
                             <span class='label label-danger col-sm-8' id="upload-file-foto"></span>
                            </div>
                            </div>
                          </div>
                          
                            <br><br>              
                          <div class="form-group">
                            <label class="control-label col-md-6 col-sm-6 col-xs-12" for="last-name"><span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <button type="submit" class="btn btn-primary">Konfirmasi</button>
                            </div>
                          </div>
                        </form>
                      </div>
          </div>
        </div>
        
        
        </div>

</body>
</html>
<?php 
}else {
    echo "<script> alert(\"Silakan Login Sebagai Member\"); window.location = \"index.php\" </script>";
  }
?>
   