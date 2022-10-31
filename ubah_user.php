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
<?php 
    include "koneksi.php";
    $qry_get_user=mysqli_query($conn,"select * from user where id_user = ".$_GET['id_user']."");
    $dt_user=mysqli_fetch_array($qry_get_user);
    ?>
    <h3>Ubah Data User</h3>
    <form action="proses_ubah_user.php" method="post">
    <input type="hidden" name="id_user" value= "<?=$dt_user['id_user']?>">
        Nama  :
        <input type="text" name="nama" value="<?=$dt_user['nama']?>" class="form-control">
        Username: 
        <input type="text" name="username" value="<?=$dt_user['username']?>" class="form-control">   
        Password : 
        <input type="password" name="password" value="<?=$dt_user['password']?>" class="form-control">   
        </select>
        User : 
        <select name="role" class="form-control">
        <option></option>
            <option value="admin" <?php if($dt_user['role']=='admin'){echo "selected";} ?>>Admin</option>
            <option value="kasir"<?php if($dt_user['role']=='kasir'){echo "selected";} ?>>Kasir</option>
            <option value="owner"<?php if($dt_user['role']=='owner'){echo "selected";} ?>>Owner</option>
         </select>
      
        <input type="submit" name="Simpan" value="Ubah member" class="btn-primary">
       
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include "footer.php";
?>