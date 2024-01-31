<?php  
include '../../../config/class.php';
$data = $ongkir->apiubah($_POST['id_ongkir']);
echo json_encode($data);
?>