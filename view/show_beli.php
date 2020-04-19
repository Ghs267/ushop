<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lihat Barang</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript">
		 	$(document).ready(function() {
			    $('#example').DataTable();
			} );
	</script>
</head>
<body>
<header>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<h4 style="color:grey"> TOKOSEDIA </h4>
				</div>
                <ul class="navbar-nav nav navbar-right">
					<li class="navbar-right active" style="color:black;display:flex; justify-content:space-between;">
                    <a href="#">
                        <?php 
                            echo "Hello, " . $_SESSION['role_name']; 
                        ?>
                    </a>
                    </li>
				</ul>
			</div>
		</nav>
	</header>
	<div class="container" style="width:25%; margin-top:2em;">
	<h3>DATA BARANG</h3>
 
	<?php
	include '../include/config.php';
	$id = $_POST['Update'];
	$data = mysqli_query($db,"SELECT  *  from item where item_id='$id'");
	while($d = mysqli_fetch_assoc($data)){
		?>

		<form action="../controller/update_kasir.php" method="post" name="form1">
        <div class="form-group">
            <label for="email">ID Barang</label>
            <input type="text" class="form-control" name="id" disabled value="<?php echo $d['item_id']; ?>"> 
        </div>
        <div class="form-group">
            <label for="pwd">Nama Barang </label>
            <input type="text" class="form-control" name="nama" disabled value="<?php echo $d['item_name']; ?>">
        </div>
        <div class="form-group">
            <label for="pwd">Stock Barang</label>
            <input  type="text" class="form-control" name="stok" disabled value="<?php echo $d['item_stock']; ?>">
        </div>
        <div class="form-group">
            <label for="pwd">Harga Barang</label>
            <input  type="text" class="form-control " name="harga" disabled value="<?php echo $d['item_price']; ?>">
        </div>
		<div class="form-group">
            <label for="pwd"> Deskripsi Barang</label>
            <input  type="text" class="form-control " name="harga" disabled value="<?php echo $d['item_desc']; ?>">
        </div>
		<a href="Pembeli.php"><input type="button" value="Back"  class="btn btn-danger" style="margin-top:2em;"></button></a>
		</form>
	<?php 
	}
	?>
</div>
</body>
</html>