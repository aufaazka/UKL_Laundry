<?php
if($_POST){
    $id_member=$_POST['id_member'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $telp=$_POST['telp'];
   
    if(empty($nama)){
        echo "<script>alert('nama member tidak boleh kosong');location.href='tambah_member.php';</script>";
 
    } elseif(empty($alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_member.php';</script>";
    } else {
        include "koneksi.php";
       
            $update=mysqli_query($conn,"update member set nama='".$nama."',alamat='".$alamat."', jenis_kelamin='".$jenis_kelamin."', telp='".$telp."' where id_member = '".$id_member."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update data member');location.href='tampil_member.php';</script>";
            } else {
                echo "<script>alert('Gagal update data member');location.href='ubah_member.php?id_member=".$id_member."';</script>";
            }
            
    } 
}
