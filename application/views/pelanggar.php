<?php  if($this->session->flashdata('alert')) : ?>
  <?php echo ' <div class="row"> <div class="col-ls-4"> <div class="social-auth-links text-center"> <div class="alert alert-info"> <b> <i>'.$this->session->flashdata('alert').'</i> </b> </div> </div> </div> </div>' ?>
<?php endif;?>
<section class="content-header">
  <h1>
    Master
    <small>Data</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('index.php/smas_controller/home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li>Master Data</li>
    <li class="active">Data Siswa</li>
  </ol>
</section>
<section class="content">
     <div class="row">
       <div class="col-xs-12">

         <div class="box">
           <div class="box-header with-border">
             <h3 class="box-title">Daftar Pelanggar</h3> &nbsp &nbsp
             <a href="" data-toggle="modal" data-target="#tambah_pelanggar"><span class="label label-primary" aria-hidden="true"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Data</span></a>

             <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
               </button>
               <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
             </div>
           </div>
           <!-- /.box-header -->
           <!--
            <div class="widget-body"> 
            <div class="widget-main"> 
                <div class="row-fluid"> 
                    <label for="form-field-select-1">Pencarian Mahasiswa [Masukan NIM]</label> 
                    <select class="select-chosen" data-placeholder="Cari NIM ...." name="cari_nim" id="cari_nim" > 
                    <option value="">Cari NIM ....</option> 
                    <?php 
                    foreach($all_mhs as $dt){ 
                    ?> 
                    <option value="<?php echo $dt->nim;?>"><?php echo $dt->nim;?></option> 
                    <?php 
                    } 
                    ?> 
                    </select> 
                </div> 
            </div> 
            <div id="info_mhs"></div> 
        </div> 
      -->
           <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th>No</th>
                 <th>NISN</th>
                 <th>Nama</th>
                  <th>Kelas</th>
                 <th>Waktu Melanggar</th>
                 <th>Tempat Melanggar</th>
                 <th>Keterangan Pelanggar</th>
                 <th>Poin</th>
                 <th>Action</th>
               </tr>
               </thead>
               <tbody>
              <?php  $no = 1;
                      foreach ($pelanggar as $u) {?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $u['nis_pelanggaran_siswa'];?></td>
                  <td><?php echo $u['nama_siswa'];?></td>
                  <td><?php echo $u['kelas'];?></td>
                  <td><?php echo $u['waktu_melanggar'];?></td>
                  <td><?php echo $u['tempat_pelanggar'];?></td>
                  <td><?php echo $u['keterangan_pelanggar'];?></td>
                  <td><?php echo $u['poin'];?></td> 
                <td>
                  
                  <!--
                    <a href="<?php echo base_urL('index.php/smas_controller/editpelanggar/').$u['id_pelanggaran'];?>"><span class="label label-primary" aria-hidden="true"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</span></a>
                   
                       <a onclick="javascript: return confirm('Are you sure you want to delete this data ?')" href="<?php echo base_urL('index.php/smas_controller/delpelanggar/').$u['id_pelanggaran'];?>"><span class="label label-danger" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete</span></a>

                       <a onclick="javascript: return confirm('Are you sure you want to delete this data ?')" href="<?php echo base_urL('index.php/smas_controller/delpelanggar/').$u['id_pelanggaran'];?>"><span class="label label-danger" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> View</span></a>
-->
                 </td>
                </tr>
              <?php   } ?>
               </tbody>
               <tfoot>
               <tr>
                 <th>No</th>
                 <th>NISN</th>
                 <th>Nama</th>
                  <th>Kelas</th>
                 <th>Waktu Melanggar</th>
                 <th>Tempat Melanggar</th>
                 <th>Keterangan Pelanggar</th>
                 <th>Poin</th>
                 <th>Action</th>
               </tr>
               </tfoot>
             </table>
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->
   </section>

   <div class="modal fade" id="tambah_pelanggar" role="dialog">
        <div class="modal-dialog modal-md">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Data User</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_urL('index.php/smas_controller/addpelanggar');?>" role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Pilihlah Jabatan</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <select class="form-control" name="nis_pelanggaran_siswa" required>
                       <?php foreach ($siswa as $a) { ?>
                         <option value="<?php echo $a['nis_siswa'];?>"><?php echo $a['nis_siswa'];?> : <?php echo $a['nama_siswa'];?></option>
                       <?php } ?>
                     </select>
                   </div>
                </div>
                <div class="form-group">
                  <label>Waktu Pelanggaran</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="date" name="waktu_melanggar" class="form-control" placeholder="Enter fullname" required>
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



  
<script>
$(document).ready(function() {
    $('#example1').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        },

dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 5 ]
                }
            },
            'colvis'
        ],

        

    } );
} );
</script>
