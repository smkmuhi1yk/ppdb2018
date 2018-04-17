<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Pencarian dengan CodeIgniter 3 &raquo; Jaranguda.com</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<h3>Pencarian</h3>
			<hr>
			<form action="<?php echo base_url('smas_controller/hasil')?>" action="GET">
		
					
					   <div class="form-group">
            		  <label>Nama Kelas</label>
              <div class="input-group">
              <span class="input-group-addon">+</span>
               <select id="cari" class="js-example-placeholder-single js-states form-control" style="width: 100%;" name="cari" >
                 <?php foreach ($kelas as $p) { ?>
                    <option value="<?php echo $p['kode_kelas'];?>"><?php echo $p['nm_kelas'];?></option>
                 <?php } ?>
               </select>
             </div>
      
				</div>
				<input class="btn btn-primary" type="submit" value="cari">
			</form>
		</div>
	</body>
</html>

<script src="<?php echo base_urL('assets/plugins/jQuery/jquery-2.2.3.min.js');?>"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
$(".js-example-placeholder-single").select2({
   
    allowClear: true
});
 </script>