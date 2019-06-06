<!DOCTYPE html>
<html>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <head>
    <title>Cobranza</title>
   <link rel="stylesheet" href="<?php echo base_url(); ?>css/login.css">
  </head>
  <body>
        <div class="wrapper fadeInDown">
                <div id="formContent">
                  <!-- Tabs Titles -->
              
                  <!-- Icon -->
                  <div class="fadeIn first">
                    <img src="http://blog.duemint.com/wp-content/uploads/2018/08/etapas-de-la-cobranza.jpg" id="icon" alt="User Icon" />
                  </div>
              
                  <!-- Login Form -->
                  <!-- <form action="login/doLogin" method="POST"> -->
                  <form action="<?php echo base_url(); ?>Login/doLogin" method="post">
                    <input type="text" id="phone" class="fadeIn second" name="phone" placeholder="phone" required>
                    <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required>
                    <input type="submit" class="fadeIn fourth" value="Log In">
                  </form>
              
                </div>
              </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </body>
</html>