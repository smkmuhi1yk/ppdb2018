<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Flat UI Login Form 2</title>
  
  
  
     <style>
     /* Google Fonts */
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

/* sets background image and global font */
body {
  background-image: url(http://benague.ca/files/congruent_outline.png);
  font-family: 'Open Sans', 'sans-serif';
}

/* div surrounding login form */
#login {
  background-color: #eee;
  opacity: .9;
  height: 280px;
  width: 400px;
  border-radius: 10px;
  margin: 0 auto;
  margin-top: 50px;
  padding: 0;
  text-align: center;
}

/* form header */
h1 {
  font-size: 32px;
  padding: 10px;
  margin: 0;
  color: #fff;
  background-color: #55acee;
  margin-bottom: 15px;
}

/* text fields */
input:not([type="button"]) {
  width: 300px;
  height: 50px;
  border-radius: 6px;
  border: 1px solid #acacac;
  margin-bottom: 15px;
  text-align: center;
  -webkit-transition: all .5s;
  -moz-transition: all .5s;
  transition: all .5s;
  font-family: 'Open Sans', 'sans-serif';
}

input:not([type="button"]):focus {
  color: #55acee;
  width: 370px;
  border: 1px solid #55acee;
  outline: none;
}

/* submit button */
input[type="button"] {
  font-size: 32px;
  color: #fff;
  background-color: #55acee;
  box-shadow: 0 5px 0 0 #3C93D5;
  border: none;
  padding: 10px;
  width: 400px;
  display: inline-block;
  position: relative;
  outline: none;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
}

input[type="button"]:active {
  box-shadow: 0 1px 0 0 #3C93D5;
  -webkit-transform: translate(0,5px);
  -moz-transform: translate(0,5px);
  transform: translate(0,5px);
}
   </style>

  
</head>

<body>

  <div id="login">
  <h1 id="header">Login</h1>
  <form action="<?php echo base_url('index.php/smas_controller/loginsiswa');?>" method="post">
    <input type="text" placeholder="Username" id="username"></input><br />
    <input type="password" placeholder="Password"></input><br />
    <input type="button" value="Submit" id="button"></input>
  </form>
</div>
  
  <?php  if($this->session->flashdata('alert')) : ?>
        <?php echo '<div class="social-auth-links text-center"> <div class="alert alert-danger"> <b>'.$this->session->flashdata('alert').'</b> </div> </div>' ?>
      <?php endif;?>
</body>

</html>
