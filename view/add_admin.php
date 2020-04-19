<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		
		<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
        <title>Tambah User</title>
    </head>
    <body>
    
    <div class="container" style="width:25%; margin-top:2em;">
    <h3>ADD NEW USER</h3>
        <form action="../controller/insert_admin.php" method="post" id="myform" onSubmit="return validasi()">

            <label>ID</label>
            <input type="text" class="form-control" placeholder="" name="id" required>
            <label>Nama Depan</label>
            <input type="text" class="form-control" placeholder="" name="nd"  required>
            <label>Nama belakang</label>
            <input type="text" class="form-control" placeholder="" name="nb" >
            <label>Role</label><br>
            <select name="role" id="role">
            <option value="2">Manager</option>
            <option value="3">Kasir</option>
            <option value="4">Pembeli</option>
            </select><br>
            <label>Address</label>
            <input type="text" class="form-control" placeholder="" name="add" id="add" required>
            <label>Password</label>
            <input type="password" class="form-control" placeholder="" name="psw" id="psw" required>
            <input type="submit" class="btn btn-primary" style="margin-top:2em;">
            <a href="Admin.php"><input type="button" value="Cancel" class="btn btn-danger" style="margin-top:2em;"></button></a>
        </form>
        
    </div>
    </body>
</html>