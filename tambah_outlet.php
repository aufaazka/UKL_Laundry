<?php
    include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah Outlet</h3>
    <form action="proses_tambah_outlet.php" method="post">
        Nama Outlet :
        <input type="text" name="nama" value="" class="form-control"> 
        Alamat : 
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        No Telepon : 
        <input type="text" name="telp" value="" class="form-control">
        
        <input type="submit" name="Simpan" value="Tambah member" class="btn-primary">
       
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include "footer.php";
?>