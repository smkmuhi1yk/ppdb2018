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
            <td>Total</td>

             <h3 class="box-title">Siswa Table</h3> &nbsp &nbsp
             <a href="" data-toggle="modal" data-target="#tambah_user"><span class="label label-primary" aria-hidden="true"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Data</span></a>

             <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
               </button>
               <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
             </div>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th>No</th>
                 <th>NBM</th>
                 <th>Nama Guru</th>
                  <th>Action</th>
              
              
               </tr>
               </thead>
               <tbody>
              <?php  $no = 1;
                      foreach ($guru as $u) {?>
                <tr>
                  <td><?php echo $no++ ?></td>
               
                  <td><?php echo $u['nbm'];?></td>
                  <td><?php echo $u['nm_guru'];?></td>                 
                  <td>
                    
               
                 
                       <a onclick="javascript: return confirm('Are you sure you want to delete this data ?')" href="<?php echo base_urL('index.php/smas_controller/delguru/').$u['nbm'];?>"><span class="label label-danger" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete</span></a>
                    
                       
                    
                  </td>
                </tr>
              <?php   } ?>
               </tbody>
               <tfoot>
               <tr>
                 <th>No</th>
                 <th>Kode Kelas</th>
                 <th>Nama Kelas</th>
           
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

 <div class="modal fade" id="tambah_user" role="dialog">
        <div class="modal-dialog modal-md">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Data User</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_urL('index.php/smas_controller/addguru');?>" role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>NBM</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="nbm" class="form-control" placeholder="NBM" required>
                   </div>
                </div>
                <div class="form-group">
                  <label>Nama Guru</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="nm_guru" class="form-control" placeholder="Nama Guru" required>
                   </div>
                </div>
              
                 <div class="form-group">
                  <label>Level</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <select class="form-control" name="level" required readonly>
                         <option value="3">Guru </option>
                     </select>
                   </div>
                </div>
          

         
              <!-- /.box-body

  <div class="form-group">
                <label>Wali Kelas</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                    <select name="nbm_guru" class="js-example-placeholder-single js-states form-control" style="width: 100%;">
                         <option value=""></option>
                         <option value="Joko Supriyanto">Joko Supriyanto</option>
                         <option value="Aditia Nurjaman">Aditia Nurjaman</option>
                         <option value="Eko Purnomo">Eko Purnomo</option>
                         <option value="Gani">Ganis</option>
                    </select>
                </div>
                </div>

              -->

              <div class="box-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary pull-right">Add Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>

