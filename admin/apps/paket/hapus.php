<?php  
    $id_paket=$_GET['id'];
    $datapaket=$paket->detail($id_paket);
    $gambar=$datapaket['gambar'];
    $paket->hapus($id_paket);
    echo "<script>alert('Paket berhasil dihapus');</script>";
    echo "<script>location='index.php?halaman=paket';</script>";
?>