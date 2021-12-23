<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data SPP | <a href="?spp=add">Tambah Data</a></h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 200px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>No</th>
                  <th>ID SPP</th>
                  <th>Tahun</th>
                  <th>Nominal</th>
                  <th>Action</th>
                </tr>
<?php
$spp=$mysqli->query("SELECT * FROM spp ORDER BY id_spp");
$no=0;
while($data=mysqli_fetch_array($spp)){
    $no++;
?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $data['id_spp'];?></td>
                  <td><?php echo $data['tahun'];?></td>
                  <td><?php echo $data['nominal'];?></td>
                  <td><a href="?spp=edit&id_spp=<?php echo $data
                  ['id_spp'];?>">Edit</a> | <a href="?spp=delete&id_spp=<?php echo $data
                  ['id_spp'];?>">Hapus</a></td>
                </tr>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

