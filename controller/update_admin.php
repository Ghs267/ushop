<?php
        include '../include/config.php';
        // menyimpan data kedalam variabe
        $id             = $_POST['id'];
        $fnama           = $_POST['fn'];
        $lnama           = $_POST['ln'];
        $role           = $_POST['role'];
        $alamat         = $_POST['alamat'];
        $pass           = md5($_POST['pass']);
        // query SQL untuk insert data
        $query= "UPDATE user SET 
        user_id ='$id', 
        password='$pass', 
        first_name ='$fnama', 
        last_name ='$lnama', 
        role_id ='$role', 
        address = '$alamat'
        
        where user_id ='$id'";
       
        mysqli_query($db, $query);
        // mengalihkan ke halaman index.php
        header("location:../view/Admin.php");
?>
