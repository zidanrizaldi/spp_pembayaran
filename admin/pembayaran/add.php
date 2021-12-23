<?php
$edit=$mysqli->query("select * from siswa,spp where siswa.id_spp=spp.id_spp and
siswa.nisn='$_GET[nisn]'");
$e=mysqli_fetch_array($edit);
?>
<div class="col-md-9">
<!-- Horizontal Form -->
<div class="box box-info">
<div class="box-header with-border">
<h3 class="box-title">Form Data Pembayaran</h3>
</div>
<!-- /.box-header -->
<!-- form start -->
<form class="form-horizontal" method="post" action="?pembayaran=create">
<div class="box-body">
<div class="form-group">
<label for="inputEmail3" class="col-sm-2 control-label">Id Pembayaran</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="id_pembayaran" placeholder="Masukkan
ID Pembayaran" name="id_pembayaran">
</div>
</div>
<div class="form-group">
<label for="inputEmail3" class="col-sm-2 control-label">Id Petugas</label>
<div class="col-sm-10">
<select class="form-control" name="id_petugas">
<option>Pilih Petugas</option>
<?php
$petugas=$mysqli->query("SELECT * FROM petugas ORDER BY id_petugas");
$no=0;
while($data=mysqli_fetch_array($petugas)){
$no++;
?>
<option value="<?php echo $data['id_petugas'];?>"><?php echo
$data['nama_petugas'];?> </option>
<?php } ?>
</select>
</div>
</div>
<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">NISN</label>
<div class="col-sm-10">
<input type="hidden" class="form-control" id="NISN" placeholder="Masukkan
NISN" name="nisn" value="<?php echo $e['nisn'];?>">
<input type="text" class="form-control" id="NISN" placeholder="Masukkan NISN"
name="nisnn" value="<?php echo $e['nisn'];?>" disabled>
</div>
</div>

<div class="form-group">
<label for="inputEmail3" class="col-sm-2 control-label">Tanggal Bayar</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="tgl_bayar" placeholder="Masukkan
Tanggal" name="tgl_bayar">
</div>
</div>
<div class="form-group">
<label for="inputEmail3" class="col-sm-2 control-label">Bulan di Bayar</label>
<div class="col-sm-10">
<select class="form-control" name="bulan_dibayar">
<option value="Januari">Januari</option>
<option value="Februari">Februari</option>
<option value="Maret">Maret</option>
<option value="April">April</option>
</select>
</div>
</div>
<div class="form-group">
<label for="inputEmail3" class="col-sm-2 control-label">Tahun dibayar</label>
<div class="col-sm-10">
<input type="number" class="form-control" id="tahun_dibayar"
placeholder="Masukkan Tahun" name="tahun_dibayar">
</div>
</div>
<div class="form-group">
<label for="inputEmail3" class="col-sm-2 control-label">SPP</label>
<div class="col-sm-10">
<input type="hidden" class="form-control" id="id_spp" placeholder="Masukkan
NISN" name="id_spp" value="<?php echo $e['id_spp'];?>">

<input type="text" class="form-control" id="NISN" placeholder="Masukkan NISN"
name="nisnn" value="<?php echo $e['nominal'];?>" disabled>
</div>
</div>
<div class="form-group">
<label for="inputEmail3" class="col-sm-2 control-label">Jumlah Bayar</label>
<div class="col-sm-10">
<input type="number" class="form-control" id="jumlah_bayar"
placeholder="Masukkan Jumlah Bayar" name="jumlah_bayar">
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<div class="checkbox">
<label>
<input type="checkbox"> Remember me
</label>
</div>
</div>
</div>
</div>
<!-- /.box-body -->
<div class="box-footer">
<input type="reset" class="btn btn-default" value="Cancel">
<input type="submit" class="btn btn-info pull-right" value="Simpan">
</div>
<!-- /.box-footer -->
</form>
</div>