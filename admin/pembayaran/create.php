<?php

$id_pembayaran = $_POST['id_pembayaran'];
$id_petugas = $_POST['id_petugas'];
$nisn = $_POST['nisn'];
$tgl_bayar = $_POST['tgl_bayar'];
$bulan_dibayar = $_POST['bulan_dibayar'];
$tahun_dibayar = $_POST['tahun_dibayar'];
$is_spp = $_POST['is_spp'];
$jumlah_dibayar = $_POST['jumlah_dibayar'];


$mysqli->query("INSERT INTO pembayaran()VALUES('$id_pembayaran','$id_petugas','$nisn','$tgl_bayar','$bulan_dibayar',
'$tahun_dibayar','$id_spp','$jumlah_dibayar')");
echo"<script>alert('Berhasil Disimpan!')</script>";
echo"<script language='javascript'>window.location.href='?pembayaran=read'</script>;"
?>