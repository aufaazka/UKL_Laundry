<?php
if($_POST){
    $id_outlet=$_POST['id_outlet'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
   
    if(empty($nama)){
        echo "<script>alert('nama outlet tidak boleh kosong');location.href='tambah_outlet.php';</script>";
 
    } elseif(empty($alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_outlet.php';</script>";
    } else {
        include "koneksi.php";
       
            $update=mysqli_query($conn,"update outlet set nama='".$nama."',alamat='".$alamat."', telp='".$telp."' where id_outlet = '".$id_outlet."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update data outlet');location.href='tampil_outlet.php';</script>";
            } else {
                echo "<script>alert('Gagal update data outlet');location.href='ubah_outlet.php?id_outlet=".$id_outlet."';</script>";
            }
        
           
        
        
    } 
}
