<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    session_start();
	?>
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

		function validasi() {
		var email = document.getElementById("username").value;
		var pass = document.getElementById("password").value;		
		if (email != "" && pass!="") {
			// event.preventDefault();
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
	</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TOKOSEDIA</title>
	<link rel="stylesheet" type="text/css" href="view/style.css">
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
					<a href="view/aboutme.html" style="margin-left:1em;" id="logout">About Me</a>
                    </li>
				</ul>
			</div>
		</nav>
	</header>
    <meta charset="UTF-8">
	<div class="kotak_login">
		<p class="tulisan_login">Login System</p>
 
		<form action="controller/login.php" method="post" onSubmit="return validasi()" >
			<label>Username</label>
			<input type="text" name="username" class="form_login" id="username" placeholder="Username ..">
            <br>
			<label>Password</label>
			<input type="password" name="password" class="form_login" id="password" placeholder="Password ..">
            <br>
			<input type="submit" class="tombol_login" value="LOGIN">
			<br/>
			<br/>
		</form>
		<?php 
	            if(isset($_GET['pesan'])){
		        if($_GET['pesan']=="gagal"){
                echo "<div class='alert'>
                    Username dan Password tidak sesuai !
                    </div>";
		}
	}
	?>
	</div>
	
</body>
</html>