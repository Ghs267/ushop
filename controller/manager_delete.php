<?php
include '../include/config.php';
// menyimpan data id kedalam variabel
$id   = $_POST['Delete'];
// query SQL untuk insert data
$query="DELETE from item where item_id='$id'";
mysqli_query($db, $query);
// mengalihkan ke halaman index.php
header("location:../view/Manager.php");
?>