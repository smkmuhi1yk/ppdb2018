

<style>
  @import url(https://fonts.googleapis.com/css?family=Raleway:400,100,200,300);
* {
  margin: 0;
  padding: 0; }

a {
  color: #666;
  text-decoration: none; }
  a:hover {
    color: #4FDA8C; }

.login-logo{
	margin-top: 50px;
	text-align: center;
	font-size: 4em;
}

input {
  font: 16px/26px "Raleway", sans-serif; }

body {
  color: #666;
  background-color: #f1f2f2;
  font: 16px/26px "Raleway", sans-serif; }

.form-wrap {
  background-color: #fff;
  width: 320px;
  margin: 3em auto;
  box-shadow: 0px 1px 8px #BEBEBE;
  -webkit-box-shadow: 0px 1px 8px #BEBEBE;
  -moz-box-shadow: 0px 1px 8px #BEBEBE; }
  .form-wrap .tabs {
    overflow: hidden; }
    .form-wrap .tabs h3 {
      float: left;
      width: 50%; }
      .form-wrap .tabs h3 a {
        padding: 0.5em 0;
        text-align: center;
        font-weight: 400;
        background-color: #e6e7e8;
        display: block;
        color: #666; }
        .form-wrap .tabs h3 a.active {
          background-color: #fff; }
  .form-wrap .tabs-content {
    padding: 1.5em; }
    .form-wrap .tabs-content div[id$="tab-content"] {
      display: none; }
    .form-wrap .tabs-content .active {
      display: block !important; }
  .form-wrap form .input {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    color: inherit;
    font-family: inherit;
    padding: .8em 0 10px .8em;
    border: 1px solid #CFCFCF;
    outline: 0;
    display: inline-block;
    margin: 0 0 .8em 0;
    padding-right: 2em;
    width: 100%; }
  .form-wrap form .button {
    width: 100%;
    padding: .8em 0 10px .8em;
    background-color: #28A55F;
    border: none;
    color: #fff;
    cursor: pointer;
    text-transform: uppercase; }
    .form-wrap form .button:hover {
      background-color: #4FDA8C; }
  .form-wrap form .checkbox {
    visibility: hidden;
    padding: 20px;
    margin: .5em 0 1.5em; }
    .form-wrap form .checkbox:checked + label:after {
      -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
      filter: alpha(opacity=100);
      opacity: 1; }
  .form-wrap form label[for] {
    position: relative;
    padding-left: 20px;
    cursor: pointer; }
    .form-wrap form label[for]:before {
      content: '';
      position: absolute;
      border: 1px solid #CFCFCF;
      width: 17px;
      height: 17px;
      top: 0px;
      left: -14px; }
    .form-wrap form label[for]:after {
      -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
      filter: alpha(opacity=0);
      opacity: 0;
      content: '';
      position: absolute;
      width: 9px;
      height: 5px;
      background-color: transparent;
      top: 4px;
      left: -10px;
      border: 3px solid #28A55F;
      border-top: none;
      border-right: none;
      -webkit-transform: rotate(-45deg);
      -moz-transform: rotate(-45deg);
      -o-transform: rotate(-45deg);
      -ms-transform: rotate(-45deg);
      transform: rotate(-45deg); }
  .form-wrap .help-text {
    margin-top: .6em; }
    .form-wrap .help-text p {
      text-align: center;
      font-size: 14px; }

</style>
<div class="login-box">
  <div class="login-logo">
    <a href="#">SIMBK 2018</a>
  </div>
<div class="form-wrap">
		<div class="tabs">
			<h3 class="signup-tab"><a class="active" href="#signup-tab-content">Login Siswa</a></h3>
			<h3 class="login-tab"><a href="#login-tab-content">Login Guru</a></h3>
		</div><!--.tabs-->

		<div class="tabs-content">
			<div id="signup-tab-content" class="active">
				<form class="signup-form" action="<?php echo base_url('index.php/smas_controller/loginsiswa');?>" method="post">
					<input name="nis_siswa" type="text" class="input" id="user_login" autocomplete="off" placeholder="Masukan NISN">
					<input name="password" type="password" class="input" id="user_pass" autocomplete="off" placeholder="Password">
					<select class="input" name="id_tahun">
          			<?php foreach ($tahun as $t) { ?>
           			<option value="<?php echo $t['id_tahun'];?>"><?php echo $t['nama_tahun'];?></option>
          			<?php } ?>
        			</select>
					<input type="submit" class="button" value="Login">
				</form><!--.login-form-->
				<div class="help-text">
					 <div class="social-auth-links text-center">
					 	<?php  if($this->session->flashdata('alert')) : ?>
        <?php echo '<div class="social-auth-links text-center"> <div class="alert alert-danger"> <b>'.$this->session->flashdata('alert').'</b> </div> </div>' ?>
      <?php endif;?>
      <p>- Sistem Manajemen BK -</p>
      SMK Muhammadiyah 1 Yogyakarta
    </div>
				</div><!--.help-text-->
			</div><!--.signup-tab-content-->

			<div id="login-tab-content">
				<form class="login-form" action="<?php echo base_url('index.php/smas_controller/login');?>" method="post">
					<input name="nip" type="text" class="input" id="user_login" autocomplete="off" placeholder="Masukan NBM">
					<input name="password" type="password" class="input" id="user_pass" autocomplete="off" placeholder="Password">
					 <div class="form-group has-feedback" >
        			<select class="input" name="id_tahun">
          			<?php foreach ($tahun as $t) { ?>
           			<option value="<?php echo $t['id_tahun'];?>"><?php echo $t['nama_tahun'];?></option>
          			<?php } ?>
        			</select>
					<input type="submit" class="button" value="Login">
				</form><!--.login-form-->
				<div class="help-text">
					 <div class="social-auth-links text-center">
					 	<?php  if($this->session->flashdata('alert')) : ?>
        <?php echo '<div class="social-auth-links text-center"> <div class="alert alert-danger"> <b>'.$this->session->flashdata('alert').'</b> </div> </div>' ?>
      <?php endif;?>
      					<p>- Sistem Manajemen BK -</p>
     					   SMK Muhammadiyah 1 Yogyakarta
    				</div>
				</div><!--.help-text-->
			</div><!--.login-tab-content-->
		</div><!--.tabs-content-->
	</div><!--.form-wrap-->

<script src="<?php echo base_urL('assets/plugins/jQuery/jquery-2.2.3.min.js');?>"></script>

	<script>
jQuery(document).ready(function($) {
	tab = $('.tabs h3 a');

	tab.on('click', function(event) {
		event.preventDefault();
		tab.removeClass('active');
		$(this).addClass('active');

		tab_content = $(this).attr('href');
		$('div[id$="tab-content"]').removeClass('active');
		$(tab_content).addClass('active');
	});
});
	</script>