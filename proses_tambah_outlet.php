<?php
if($_POST){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
    if(empty($nama)){
        echo "<script>alert('nama outlet tidak boleh kosong');location.href='tambah_outlet.php';</script>";
 
    } elseif(empty($alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_outlet.php';</script>";
    } elseif(empty($telp)){
        echo "<script>alert('Telp tidak boleh kosong');location.href='tambah_outlet.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into outlet (nama,alamat,telp) value ('".$nama."','".$alamat."','".$telp."')") or die(mysqli_error($conn));;
        if($insert){
            echo "<script>alert('Sukses menambahkan outlet');location.href='tampil_outlet.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan outlet');location.href='tambah_outlet.php';</script>";
        }
    }
}
?>
