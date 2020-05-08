<?php
include "config.php";
$koneksi = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if( $koneksi === false ) {
    echo "Koneksi Gagal</br>";
    die( print_r( mysqli_error($koneksi), true));
}
$idcustomer = $_GET['idcustomer'];
$tsql = "DELETE from customer WHERE idcustomer = '$idcustomer'";
$stmt = mysqli_query($koneksi,$tsql);
if( $stmt === false ) {
    echo "Error in executing query.</br>";
    die( print_r( mysqli_error($koneksi), true));
}
header('location:index.php');
mysqli_free_result( $stmt);
mysqli_close($koneksi);

