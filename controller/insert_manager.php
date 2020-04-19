<?php 
include "../include/config.php";

    $id = $_POST['id'];
    $nama =$_POST['n'];
    $stok= $_POST['st'];
    $harga =$_POST['h'];
    $desc =$_POST['c'];

    $query = "INSERT INTO item VALUES('$id','$nama','$stok','$harga','$desc' );";
    $result =mysqli_query($db, $query);

    
    header('location:../view/Manager.php');

?>