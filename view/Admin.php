<?php 
session_start();
include '../include/config.php';
?>

<!DOCTYPE html>
<html>
<head>
		<title>Home Admin</title>
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
                            echo "Hello, " . $_SESSION['role_name']; 
                        ?>
					</a>
                    <a href="../controller/logout.php" style="margin-left:1em;" id="logout">LOG OUT</a>
                    </li>
				</ul>
			</div>
		</nav>
	</header>
    <div class="container" style="width: 1000px">
    <a href="../view/add_admin.php"><button style="padding:5px; background:#3174C7; color:white; border:none; border-radius:2px; margin:10px;">Add User</button></a>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<tr>
				<th> ID </th>
				<th> Nama </th>
				<th> Role </th>
				<th> Action </th>
			</tr>
		</thead>
		<tbody>
        <?php
								
        $query = "SELECT  *  from user JOIN role on role.role_id = user.role_id where user_id > 1000";
        $result = mysqli_query($db,$query);

				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>" . $row['user_id'] . "</td>";
					echo "<td>" . $row['first_name'] . ' ' . $row['last_name'].  "</td>";
					echo "<td>" . $row['role_name'] . "</td>";
					echo '<td>
					<div style="display:flex; justify-content:space-evenly;">
					<form action="../view/edit_admin.php" method="post">
						<input style="display:none;" type="text" name="Update" value="'.$row['user_id'].'"></input>
						<button class="btn btn-info">View</button>
					</form>
					<form action="../controller/admin_delete.php" method="post">
						<input style="display:none;" type="text" name="Delete" value="'.$row['user_id'].'"></input>
						<button class="btn btn-danger" onclick="javascript:return confirm(\'Are you sure you want to delete this?\');">Delete</button>
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
				<th> ID </th>
				<th> Nama </th>
				<th> Role </th>
				<th> Action </th>
			</tr>
		</tfoot>
	</table>
    </div>
    </body>
    </html>