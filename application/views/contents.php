<?php  if($this->session->flashdata('alert')) : ?>
  <?php echo ' <div class="row"> <div class="col-ls-4"> <div class="social-auth-links text-center"> <div class="alert alert-info"> <b> <i>'.$this->session->flashdata('alert').'</i> </b> </div> </div> </div> </div>' ?>
<?php endif;?>
<section class="content-header">
  <h1>
    Dashboard
    <small>Awal</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('index.php/smas_controller/home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>
<section class="content">
  <!-- Info boxes -->
  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa glyphicon glyphicon-user"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Siswa Baru</span>
          <span class="info-box-number"><?php echo COUNT($countsiswa);?>
        </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fab fa-android"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">RPL</span>
          <span class="info-box-number"><?php echo COUNT($countrpl);?>
        </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fas fa-laptop"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">TKJ</span>
          <span class="info-box-number"><?php echo COUNT($counttkj);?>
        </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-blue"><i class="fa fas fa-camera"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">MM</span>
          <span class="info-box-number"><?php echo COUNT($countmm);?>
        </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="fa fas fa-calculator"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">AK</span>
          <span class="info-box-number"><?php echo COUNT($countak);?>
        </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fas fa-balance-scale"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">KMS</span>
          <span class="info-box-number"><?php echo COUNT($countkms);?>
        </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fas fa-balance-scale"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">PIP</span>
          <span class="info-box-number"><?php echo COUNT($countpip);?>
        </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fas fa-balance-scale"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">KIP</span>
          <span class="info-box-number"><?php echo COUNT($countkip);?>
        </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>


<div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fas fa-balance-scale"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">KPS</span>
          <span class="info-box-number"><?php echo COUNT($countkps);?>
        </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>


    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-orange"><i class="fa fas fa-chevron-up"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">NEM Tertinggi</span>
          <span class="info-box-number"><?php 
                                               foreach ($maxnem as $nem) {
                                                echo $nem['nem'];
                                                echo "<br>";
                                                 echo $nem['nm_siswa'];
                                               }   

                                             ?>
        </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-orange"><i class="fa fas fa-chevron-down"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">NEM Terendah</span>
          <span class="info-box-number"><?php 
                                               foreach ($minnem as $min_nem) {
                                                echo $min_nem['nem'];
                                                echo "<br>";
                                                echo $min_nem['nm_siswa'];
                                                 
                                               }   

                                             ?>
        </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    
    <!-- /.col -->

    <!-- fix for small devices only -->
    
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">User</span>
          <span class="info-box-number"><?php echo COUNT($user);?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><b>Visi Misi Sekolah</b></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
              <div class="col-md-4">
                <img src="<?php echo base_urL('assets/dist/img/user2-160x160.jpg');?>" class="img-rounded" width="70%" style="padding:1%;margin:20%;">
              </div>
              <div class="col-md-8">
                <p style="background-color:#3c8dbc;padding:2%;color:white;">VISI SEKOLAH</p>
                <p style="padding:2%;">Menjadi sekolah unggul berwawasan global, berorientasi pada perkembangan IPTEK berlandaskan IMTAQ</p>
                <p style="background-color:#3c8dbc;padding:2%;margin-top:3%;color:white;">MISI SEKOLAH</p>
                <p style="padding:1%;padding-left:2%;"> 1.	Menghasilkan tamatan yang beriman dan bertaqwa serta berakhlak mulia.</p>
                <p style="padding:1%;padding-left:2%;"> 2.	Menghasilkan tamatan yang professional dalam menghadapi tantangan global.</p>
                <p style="padding:1%;padding-left:2%;"> 3.	Menghasilkan tamatan yang berjiwa wirausaha, kreatif, inovatif sehingga mampu menciptakan lapangan kerja.</p>
                <p style="padding:1%;padding-left:2%;"> 4.	Menghasilkan tamatan yang berkompeten sehingga dapat terserap di Dunia Usaha / Dunia Industri.</p>
                <p style="padding:1%;padding-left:2%;"> 5.	Menghasilkan tamatan yang berwawasan dan peduli terhadap lingkungan.</p>
              </div>
            </div>
        </div>
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <!-- Main row -->
  <!-- /.row -->
</section>
