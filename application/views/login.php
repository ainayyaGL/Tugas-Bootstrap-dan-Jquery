<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Log'n Load</title>
  <script src="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript')?>"></script>


  <link rel="stylesheet" href="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css')?>">

  
      <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">

  
</head>

<body>
  <div class="login">
  <header class="header">
    <span class="text">LOGIN</span>
    <span class="loader"></span>
  </header>
  <form class="form" action="<?php echo base_url();?>index.php/c_blog">  
    <input class="input" type="text", placeholder="Username">
    <input class="input" type="password" placeholder="Password" id="form-password">
    <input type="checkbox" name="" value="" class="form-checkbox"> look password
    <button class="btn" type="submit"></button>
  </form>
</div>
<button class ="resetbtn" type= "reset">Click ME!
</button>
  <!-- <script src='<?php echo base_url('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js')?>'></script> -->

    <script  src="<?php echo base_url('assets/js/login.js')?>"></script>
    <script  src="<?php echo base_url('assets/js/jquery-3.2.1.min.js')?>"></script>

<script type="text/javascript">
  $(document).ready(function(){   
    $('.form-checkbox').click(function(){
      if($(this).is(':checked')){
        $('#form-password').attr('type','text');
      }else{
        $('#form-password').attr('type','password');
      }
    });
  });
</script>

</body>
</html>
