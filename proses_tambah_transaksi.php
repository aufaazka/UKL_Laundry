<?php
if($_POST){
    $tgl=$_POST['tgl'];
    $tgl_bayar=$_POST['tgl_bayar'];
    $berat=$_POST['berat'];
    $paket=$_POST['paket'];
    $member=$_POST['member'];
    $batas_waktu=$_POST['batas_waktu'];
    $berat=$_POST['berat'];



    if(empty($tgl)){
        echo "<script>alert('tanggal transaksi tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
 
    } elseif(empty($batas_waktu)){
        echo "<script>alert('Tanggal tidak boleh kosong tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } elseif(empty($berat)){
        echo "<script>alert('Berat tidak boleh kosong tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    }else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into transaksi (tgl,batas_waktu,berat) value ('".$tgl."','".$batas_waktu."','".$berat."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan transaksi');location.href='tampil_paket.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan transaksi);location.href='tambah_paket.php';</script>";
        }
    }
}
?>
