
  <!DOCTYPE html>
  <style type="text/css">
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #fff;
    }
    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      font: 14px arial;
    }
    </style>
<div class="preloader">
      <div class="loading">
        <img src="<?php echo base_urL('assets/image/pacman.gif');?>" width="80">
        <p>Sabarrrrrr</p>
      </div>
    </div>
<script>
       setTimeout(function(){
           location.reload();
       },9000); // 5000 milliseconds atau 5 seconds.
    </script>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PPDB2018</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_urL('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css');?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_urL('assets/plugins/datatables/dataTables.bootstrap.css');?>">

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">

    <link rel="stylesheet" href="<?php echo base_urL('assets/dist/css/AdminLTE.min.css');?>">
    
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_urL('assets/dist/css/skins/_all-skins.min.css');?>">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- /.content-wrapper -->

<!--
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Full Version</b>
      </div>
      <strong>Copyright &copy; 2018 <a href="#">Anggi</a>.</strong> Sistem Informasi UAD
    </footer>
-->
    <!-- Control Sidebar -->




  <div class="container-fluid">
    <div class="row" style="margin:20px;">
        <div class="panel panel-danger">
        <div class="panel-heading">
              <h3 class="panel-title" style="text-align: center;">Progress PPDB</h3>
        </div>
        <div class="panel-body">
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
    



        </div>

        </div>

  </div>
</div>
  <!-- ./wrapper -->

  <!-- jQuery 2.2.3 -->


            <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/md5.js"> </script>
            <script type="text/javascript">
             function check() {
                if (document.getElementById('txtPassword').value ==
                  document.getElementById('txtConfirmPassword').value) {
                  document.getElementById('message').style.color = 'green';
                  document.getElementById('message').innerHTML = 'Password Matching';
                  document.getElementById('btnSubmit').style.display = 'block';
                } else {
                  document.getElementById('message').style.color = 'red';
                  document.getElementById('message').innerHTML = 'Password Not Matching';
                  document.getElementById('btnSubmit').style.display = 'none';
                }
              }
            </script>

  <script src="<?php echo base_urL('assets/plugins/sparkline/jquery.sparkline.min.js');?>"></script>
  <!-- jvectormap -->
  <script src="<?php echo base_urL('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>"></script>
  <script src="<?php echo base_urL('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
  <!-- SlimScroll 1.3.0 -->
  <script src="<?php echo base_urL('assets/plugins/slimScroll/jquery.slimscroll.min.js');?>"></script>
  <!-- ChartJS 1.0.1 -->
  <script src="<?php echo base_urL('assets/plugins/chartjs/Chart.min.js');?>"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_urL('assets/dist/js/pages/dashboard2.js');?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_urL('assets/dist/js/demo.js');?>"></script>
  <script src="<?php echo base_urL('assets/plugins/jQuery/jquery-2.2.3.min.js');?>"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_urL('assets/bootstrap/js/bootstrap.min.js');?>"></script>
  <!-- DataTables -->
  <script src="<?php echo base_urL('assets/plugins/datatables/jquery.dataTables.min.js');?>"></script>
  <script src="<?php echo base_urL('assets/plugins/datatables/dataTables.bootstrap.min.js');?>"></script>
  <!-- SlimScroll -->
  <script src="<?php echo base_urL('assets/plugins/slimScroll/jquery.slimscroll.min.js');?>"></script>
  <!-- FastClick -->
  <script src="<?php echo base_urL('assets/plugins/fastclick/fastclick.js');?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_urL('assets/dist/js/app.min.js');?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_urL('assets/dist/js/demo.js');?>"></script>

 <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

  <!-- page script -->
  <!--
  <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });    
  </script>
-->


<script>
$(document).ready(function() {
    $('#example1').DataTable( {
      
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
<script>
$(".js-example-placeholder-single").select2({
   
    allowClear: true
});
 </script>

<script>
  $(function () {
  $("#datepicker1").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());
});
</script>

<script>
  $(function () {
  $("#datepicker2").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());
});
</script>

<script>
  $(function () {
  $("#datepicker3").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  })
});
</script>

<script>
  $(function () {
  $("#datepicker4").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  })
});
</script>


<script>
    $(document).ready(function(){
      $(".preloader").fadeOut();
    })
    </script>

  </body>
  </html>



