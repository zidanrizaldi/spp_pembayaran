<?php

$id_petugas = $_POST['id_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_petugas = $_POST['nama_petugas'];
$level = $_POST['level'];


$mysqli->query("INSERT INTO petugas()VALUES('$id_petugas','$username','$password','$nama_petugas','$level')");
echo"<script>alert('Berhasil Disimpan!')</script>";
echo"<script language='javascript'>window.location.href='?petugas=read'</script>;"
?>