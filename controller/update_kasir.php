<?php
        include '../include/config.php';
        // menyimpan data kedalam variabe
        $stok           = $_POST['stok'];
        $harga           = $_POST['harga'];
        // query SQL untuk insert data
        $query= "UPDATE item SET item_stock='$stok', item_price ='$harga'
        where  item_stock='$stok'or item_price ='$harga'";
       
        mysqli_query($db, $query);
        // mengalihkan ke halaman index.php
        header("location:../view/Kasir.php");
?>
