<?php
include("koneksi.php");

if(isset($_POST['kirim'])){
    $nik = $_POST['nik'];
    $kode = $_POST['id'];
    $nama = $_POST['nama'];
    $ecommerce = $_POST['ecommerce'];

    $sql = "UPDATE tb_ecommerce SET nik='$nik', nama='$nama', ecommerce='$ecommerce' WHERE id=$kode";
    $query = mysqli_query($db, $sql);

    if($query){
        header("Location:tampil.php");
    }else{
        die ("gagal mengedit");
    }
 }else{
    die("sukses");
 }
?>