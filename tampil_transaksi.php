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
    <h3>Data Transaksi Cuci'in</h3>
  
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>Tgl. Transaksi</th>
                <th>Tgl. Selesai</th>
                <th>Member</th>
                <th>Berat</th>
                <th>Jenis</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
$qry_transaksi=mysqli_query($conn,"select * from transaksi");

            $no=0;
            while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
            $no++;?>
<tr>              <td><?=$no?></td>
                    <td><?=$data_transaksi['tgl']?></td>
                    <td><?=$data_transaksi['batas_waktu']?></td>
                    <td><?=$data_transaksi['id_member']?></td>
                    <td><?=$data_transaksi['berat']?></td>
                    <td><?=$data_transaksi['paket']?></td>
                    <td><?=$data_transaksi['status']?></td>
                    <td><a href="ubah_transaksi.php?id_transaksi=<?=$data_transaksi['id_transaksi']?>" class="btn btn-success">Ubah</a>
 
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <table>
      
        
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include "footer.php";
?>
