<?php
$edit=$mysqli->query("select * from petugas where id_petugas='$_GET[id_petugas]'");
$e=mysqli_fetch_array($edit);
?>
<div class="col-md-20">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Data Petugas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="?petugas=update">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Petugas</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_petugas" placeholder="Masukkan ID Petugas" name="id_petugas1"
                    value="<?php echo $e['id_petugas'];?>" disabled>
                    <input type="hidden" class="form-control" id="id_petugas" placeholder="Masukkan ID Petugas" name="id_petugas"
                    value="<?php echo $e['id_petugas'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username"
                    value="<?php echo $e['username'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password"
                    value="<?php echo $e['password'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Petugas</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_petugas" placeholder="Masukkan Nama Petugas" name="nama_petugas"
                    value="<?php echo $e['nama_petugas'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Level</label>
                  <div class="col-sm-10">
                  <select class="form-control" name="level">
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                  </select>
                </div>
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
                <input type="submit" class="btn btn-info pull-right" value="Edit">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>