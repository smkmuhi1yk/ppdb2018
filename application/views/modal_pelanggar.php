  <div class="modal fade" id="tambah_pelanggar" role="dialog">
        <div class="modal-dialog modal-md">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Data User</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_urL('index.php/smas_controller/addsiswa');?>" role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Pilihlah Jabatan</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <select class="form-control" name="nis_pelanggaran_siswa" required>
                       <?php foreach ($siswa as $j) { ?>
                         <option value="<?php echo $j['nis_siswa'];?>"><?php echo $j['nis_siswa'];?> : <?php echo $j['nama_siswa'];?></option>
                       <?php } ?>
                     </select>
                   </div>
                </div>
                <div class="form-group">
                  <label>Waktu Pelanggaran</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="waktu_melanggar" class="form-control" placeholder="Enter fullname" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Tempat Melanggar</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="tempat_pelanggar" class="form-control" placeholder="Enter fullname" required>
                   </div>
                </div>
                
                <div class="form-group">
                  <label>Keterangan Pelanggar</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <textarea name="keterangan_pelanggar" class="form-control" rows="3" placeholder="Enter your address...." required></textarea>
                   </div>
                </div>
                <div class="form-group">
                  <label>Poin</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="number" name="poin" class="form-control" placeholder="Poin" required>
                   </div>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary pull-right">Add Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>