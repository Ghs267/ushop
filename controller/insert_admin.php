<?php 
include "../include/config.php";

    $id = $_POST['id'];
    $fnama =$_POST['nd'];
    $lnama = $_POST['nb'];
    $role= $_POST['role'];
    $add =$_POST['add'];
    $pass =$_POST['psw'];

    $query = "INSERT INTO user VALUES('$id','".md5($pass)."','$fnama','$lnama','$role','$add' );";
    $result =mysqli_query($db, $query);

    
    header('location:../view/Admin.php');

?>