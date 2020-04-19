<?php 
session_start();
include '../include/config.php';
?>

<!DOCTYPE html>
<html>
<head>
		<title>Home Pembeli</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
		   $('#example').DataTable();
		} );
	</script>

    <style>
        #logout{
            transition-duration: 1s;
        }
        #logout:hover{
            background-color: orange;
            color: white;
        }
    </style>
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
                            echo "Hello, " .$_SESSION['first_name']; 
                        ?>
					</a>
                    <a href="../controller/logout.php" style="margin-left:1em;" id="logout">LOG OUT</a>
                    </li>
				</ul>
			</div>
		</nav>
	</header>
    <div class="container" style="width: 1000px">
	<?php //search ?>
	<form action=" " method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
	</form>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<tr>
				<th> Nama Barang</th>
                <th> Harga Barang </th>
                <th>Status</th>
				<th> Action </th>
			</tr>
		</thead>
		<tbody>
        <?php
							
		$query = "SELECT  *  from item";
		//search
		if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$result = mysqli_query($db,"select * from item where item_name like '%".$cari."%'");				
				}else{
		$result = mysqli_query($db,$query);		
		}

				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>" . $row['item_name']. "</td>";
                    echo "<td>" . $row['item_price'] . "</td>";
                    if($row['item_stock']>=15){
                        echo "<td> Tersedia </td>";
                    }else if($row['item_stock']>=5){
                        echo "<td> Terbatas </td>";
                    }elseif($row['item_stock']<= 4){
                        echo "<td> Hampir Habis </td>";
                    }
					echo '<td>
					<div style="display:flex; justify-content:space-evenly;">
					<form action="../view/show_beli.php" method="post">
						<input style="display:none;" type="text" name="Update" value="'.$row['item_id'].'"></input>
						<button class="btn btn-info">Show More</button>
					</form>
					<br>
					</div>
					</td>';
					echo "</tr>";
				}
				
			 ?>
		</tbody>
		<tfoot>
			<tr>
                <th> Nama Barang</th>
                <th> Harga Barang </th>
                <th>Status</th>
				<th> Action </th>
			</tr>
		</tfoot>
	</table>
    </div>

    </body>
    </html>