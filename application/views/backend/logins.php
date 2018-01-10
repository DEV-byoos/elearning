<!DOCTYPE html>  
<html lang="en">
<head><?php
  $system_title = $this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="EduAppGT - School Management System" />
  <meta name="author" content="Web Studio Guatemala" />
  <title><?php echo get_phrase('Login'); ?> | <?php echo $system_title;?></title>
  
  <link rel="icon" type="ico" sizes="16x16" href="style/images/favicon.ico">
  <link rel="stylesheet" href="style/login/css/style.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="assets/js/jquery-1.11.0.min.js"></script>
</head>
<body>
<script type="text/javascript">var baseurl = '<?php echo base_url();?>';</script>
<div class="pen-title">
  <h1>Elearning Batang</h1>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
  </div>
  <div class="form">
    <h2>Login to your account</h2>
    <?php echo form_open(base_url() . 'index.php?login/logins' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
      <input type="text" name="user" id="user" placeholder="<?php echo get_phrase('Username'); ?>" autocomplete="off" />
      <input type="password" name="password" id="password" placeholder="<?php echo get_phrase('Password'); ?>" autocomplete="off"/>
      <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit"><?php echo get_phrase('Login'); ?></button>
    <?php echo form_close(); ?>
  </div>
  <div class="cta"><a href="http://andytran.me">Forgot your password?</a></div>
</div>
<script src="assets/js/gsap/main-gsap.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/neon-login.js"></script>
<!-- <script src="assets/js/jquery-1.11.3.min.js"></script> -->
<script src="style/bower_components/jquery/dist/jquery.min.js"></script>
<script src="style/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="style/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<script src="style/js/jquery.slimscroll.js"></script>
<script src="style/js/waves.js"></script>
<script src="style/js/custom.min.js"></script>
<script src="style/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>