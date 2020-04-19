<!DOCTYPE html>
<html>
<head>
	<title>Data User</title>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		
		<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
</head>
<body>

	<div class="container" style="width:25%; margin-top:2em;">
	<h3>DATA USER</h3>
 
	<?php
	include '../include/config.php';
    $id = $_POST['Update'];
    $data = mysqli_query($db,"SELECT  *  from user where user_id='$id'");
	while($d = mysqli_fetch_assoc($data)){
		?>

		<form action="../controller/update_admin.php" method="post" name="form1">
        <div class="form-group">
            <label for="email">ID</label>
            <input type="number" class="form-control" name="id"  required value="<?php echo $d['user_id']; ?>"> 
        </div>
        <div class="form-group">
            <label for="pwd">Nama Depan </label>
            <input type="text" class="form-control" name="fn" required value="<?php echo $d['first_name']; ?>">
        </div>
        <div class="form-group">
            <label for="pwd">Nama belakang </label>
            <input type="text" class="form-control" name="ln"  value="<?php echo $d['last_name']; ?>">
        </div>
        <div class="form-group">
            <label for="pwd">Role</label>
            <input  type="text" class="form-control" name="role" required value="<?php echo $d['role_id']; ?>">
        </div>
        <div class="form-group">
            <label for="pwd">Alamat</label>
            <input  type="text" class="form-control " name="alamat" required value="<?php echo $d['address']; ?>">
        </div>
        <div class="form-group">
            <label for="pwd">Password</label><br>
            <input type="password" class="form-control"  required name="pass" >
        </div>
        <button name="Submit" type="submit" class="btn btn-primary" style="margin-top:2em;">Update</button>
		<a href="Admin.php"><input type="button" value="Back" class="btn btn-danger" style="margin-top:2em;"></button></a>
    </form>
	<?php 
	}
	?>
 </div>
</body>
</html>