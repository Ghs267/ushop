<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		
		<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
        <title>Tambah Barang</title>
        
    </head>
    <body>
    
    <div class="container" style="width:25%; margin-top:2em;">
    <h3>ADD NEW BARANG </h3>
        <form action="../controller/insert_manager.php" method="post" id="myform">

            <label>ID BARANG</label>
            <input type="text" class="form-control" placeholder="" name="id" id="id" required>
            <label>Nama Barang</label>
            <input type="text" class="form-control" placeholder="" name="n" id="nama" required>
            <label>Stok Barang</label>
            <input type="text" class="form-control" placeholder="" name="st" id="stock" required>
            <label>Harga Barang</label><br>
            <input type="text" class="form-control" placeholder="" name="h" id="harga" required>
            <label>Deskripsi</label>
            <textarea class="form-control" name="c" id="desc"required></textarea>
            <input type="submit" class="btn btn-primary" style="margin-top:2em;">
            <a href="Manager.php"><input type="button" value="Cancel" class="btn btn-danger" style="margin-top:2em;"></button></a>
        </form>
        
    </div>
    </body>
</html>