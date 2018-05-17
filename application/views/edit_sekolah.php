<section class="content">
 <div class="modal fade" id="tambah_user" role="dialog">
    		<div class="modal-dialog modal-md">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Data</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_urL('index.php/smas_controller/addsmp');?>" role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Sekolah</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="nama_sekolah" class="form-control" placeholder="Masukan Nama Sekolah" required>
                   </div>
                </div>
              <!-- /.box-body -->
            </div>
              <div class="box-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary pull-right">Add Data</button>
              </div>
            </form>
          </div>
    		</div>
    	</div>
    </section>