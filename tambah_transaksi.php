<?php
    include "header.php";
    include "koneksi.php";
   
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah Transaksi</h3>
    <form action="proses_tambah_transaksi.php" method="post">
        Tanggal Transaksi :
        <input type="date" name="tgl" value="" class="form-control">
        Tanggal Selesai : 
        <input type="date" name="batas_waktu" value="" class="form-control">
        Member  : 
        <select name="id_member" id="" class="form-control">
            <option value="">--Pilih Member--</option>
             <?php
                        $qry_member= mysqli_query($conn, "select * from member");
                        while ($data_member= mysqli_fetch_assoc($qry_member)){
                            ?>
                            <option value="<?php echo $data_member['id_member'];?>">
                            <?php echo $data_member['nama']; ?>
                        </option>
                        <?php
                        }
                        ?>
                      </select>
        Berat : 
        <input type="text" name="berat" value="" class="form-control">
        Jenis Laundry :
        <select name="paket" id="paket" class="form-control">
            <option value="">--Pilih Paket--</option>
             <?php
                        $qry_paket= mysqli_query($conn, "select * from paket");
                        while ($data_paket= mysqli_fetch_assoc($qry_paket)){
                            ?>
                            <option value="<?php echo $data_member['id_paket'];?>">
                            <?php echo $data_paket['jenis']; ?>
                        </option>
                        <?php
                        }
                        ?>
                      </select>
        
        
        Status: 
        <select name="status" class="form-control">
            <option>--Pilih Status--</option>
            <option value="belum bayar">Belum Bayar</option>
            <option value="dibayar">Lunas</option>
        </select>
       
        <input type="submit" name="Simpan" value="Tambah transaksi" class="btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include "footer.php";
?>