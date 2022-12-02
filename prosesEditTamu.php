<?php
ob_start();
include ("koneksi.php");

    if(isset($_POST['simpan'])){
        $id_tamu = $_POST['id_tamu'];
        $nama_pemilik = $_POST['nama_pemilik'];
        $nama_merek = $_POST['nama_merek'];
        $jenis_produk = $_POST['jenis_produk'];
        $telepon = $_POST['telepon'];
        $tanggal=$_POST['tanggal'];
        $keperluan = $_POST['keperluan'];

       mysqli_query($db, "UPDATE data_kunjungan SET nama_pemilik='$nama_pemilik', nama_merek='$nama_merek', jenis_produk='$jenis_produk', telepon='$telepon', tanggal='$tanggal', keperluan='$keperluan' where id_tamu='$id_tamu'");

        header("location:dataTamu.php?pesan=berhasil");
    }
?>