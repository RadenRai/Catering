<?php  
    $id_ongkir=$_GET['id'];
    $id_ongkirket=$_GET['id_ongkirket'];
    $ongkir->hapus($id_ongkir);
    echo "<script>alert('Ongkos kirim berhasil dihapus');</script>";
    echo "<script>location='index.php?halaman=listongkir&id=".$id_ongkirket."';</script>";
?>