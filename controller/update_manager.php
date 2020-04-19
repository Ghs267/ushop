<?php
        include '../include/config.php';
        // menyimpan data kedalam variabe
        $nama           = $_POST['nama'];
        $stok           = $_POST['stok'];
        $harga           = $_POST['harga'];
        $komen             =$_POST['desc'];
        // query SQL untuk insert data
        $query= "UPDATE item SET  item_name ='$nama', item_stock='$stok', item_price ='$harga', item_desc='$komen'
        where  item_name ='$nama'or item_stock='$stok'or item_price ='$harga'or item_desc='$komen'";
       
        mysqli_query($db, $query);
        // mengalihkan ke halaman index.php
        header("location:../view/Manager.php");
?>
