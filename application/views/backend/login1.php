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
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/form.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/input.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/message.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/icon.css">

  <script src="assets/js/jquery-1.11.0.min.js"></script>
  <script src="https://semantic-ui.com/dist/components/form.js"></script>
  <script src="https://semantic-ui.com/dist/components/transition.js"></script>
  <script type="text/javascript">var baseurl = '<?php echo base_url();?>';</script>
  <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            user: {
              identifier  : 'user',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your username'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<script type="text/javascript">var baseurl = '<?php echo base_url();?>';</script>
<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <img src="assets/images/login.png" class="image">
      <div class="content">
        Login to your account
      </div>
    </h2>
    <!-- <form class="ui large form"> -->
              <?php echo form_open(base_url() . 'index.php?login/logins' , array('class' => 'ui large form', 'enctype' => 'multipart/form-data'));?>
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
              <input type="text" name="user" id="user" placeholder="<?php echo get_phrase('Username'); ?>" autocomplete="off" />
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
              <input type="password" name="password" id="password" placeholder="<?php echo get_phrase('Password'); ?>" autocomplete="off"/>
          </div>
        </div>
      <button class="ui fluid large teal submit button"><?php echo get_phrase('Login'); ?></button>
    </div>
      <?php echo form_close(); ?>
  <!-- </form> -->
  </div>
</div>
  <!-- <div class="cta"><a href="http://andytran.me">Forgot your password?</a></div> -->
</body>
</html>