<?php

$id_spp = $_POST['id_spp'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];



$mysqli->query("update spp set tahun='$tahun',nominal='$nominal'
where id_spp='$id_spp'");
echo"<script>alert('Berhasil Diedit!')</script>";
echo"<script language='javascript'>window.location.href='?spp=read'</script>;"
?>