<?php 
    include "header.php";
    if ($_SESSION['role']!='admin'){ 
        echo "<script>alert('Tidak boleh akses'); location.href='home.php';</script>";
    }
?>


<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Data Outlet Cuci'in</h3>
  
    <table class="table table-hover table-striped">
        <thead>
            <tr>
    <th>NO</th>
    <th>NAMA</th>
    <th>ALAMAT</th>
    <th>NO TELEPON</th>
    <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
$qry_outlet=mysqli_query($conn,"select * from outlet");

            $no=0;
            while($data_outlet=mysqli_fetch_array($qry_outlet)){
            $no++;?>
<tr>              <td><?=$no?></td>
                    <td><?=$data_outlet['nama']?></td>
                    <td><?=$data_outlet['alamat']?></td>
                    <td><?=$data_outlet['telp']?></td>
                    <td><a href="ubah_outlet.php?id_outlet=<?=$data_outlet['id_outlet']?>" class="btn btn-success">Ubah</a> | <a href="hapus_outlet.php?id_outlet=<?=$data_outlet['id_outlet']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
 
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <table>
        <th> <a href="tambah_outlet.php" class="btn btn-primary">Tambahkan Outlet</a></th>
        
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include "footer.php";
?>
