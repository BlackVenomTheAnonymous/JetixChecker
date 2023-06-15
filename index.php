<?php
session_start();
if(isset($_POST['login'])){

  $password = $_POST['password'];
   if($password === 'Jetix'){
     $_SESSION['login'] = true; header('LOCATION:/dashboard.php'); die();
   } {
     echo "
<div class='alert alert-danger center-alert'>Your Password is Wrong</div>";
   }

 }
?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>♕︎𝙅𝙚𝙩𝙞𝙭♕︎</title>
  <link rel="shortcut icon" href="https://images.emojiterra.com/twitter/v14.0/512px/1f4b3.png" type="image/x-icon" />
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" href="https://images.emojiterra.com/twitter/v14.0/512px/1f4b3.png" />
  <link rel="stylesheet" href="assets/css/style.css">
 </head>
 <style>
  .center-alert {
   position: absolute;
   top: 70%;
   left: 50%;
   transform: translate(-50%, -50%);
  }
 </style>
 <body>
  <center>
   <div class="wrapper">
    <div class="authentication-lock-screen d-flex align-items-center justify-content-center">
     <div class="card shadow-none bg-transparent">
      <div class="card-body p-md-5 text-center">
       <h3 class="text-white">
        <a style="color:white;" href="https://t.me/jetixbin">JETIX</a>
       </h3>
       <div class="">
        <a href="https://t.me/jetixbin" target="_blank">
         <img src="assets/images/logo.gif" class="mt-5" width="150" alt="" />
        </a>
       </div>
       </br>
       <p class="mt-2 text-white">GET LOGIN PASSWORD From <a style="color:white;" href="https://t.me/jetixbin">@JetixBin</a>
       </p>
       <br>
       <form method="POST" id="signup-form" class="signup-form">
        <div class="form-group">
         <input type="text" class="btn btn-light" name="password" id="password" placeholder="Password" />
         <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
        </div>
        </br>
        <div class="form-group">
         <input type="submit" name="login" id="login" class="btn btn-light" value="Get-Access" />
        </div>
       </form>
      </div>
     </div>
    </div>
   </div>
   </div>
   </div>
   </div>
  </center>
 </body>
</html>