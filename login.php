<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>plateforme scence edicatif</title>
<meta charset="utf-8">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<style>
.row1, .row1 a {
    color: #FFFFFF;
    background-color: #0000ff;
}
.boxedicon a:hover{color:#FFFFFF; background-color:#0000ff;}
</style>
</head>

<body id="top">
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" >
     <center> <h1><a href="index.html">plateforme scence edicatif</a></h1></center>
     <!--<a href="#"><img style="height: 100px ; width: 100px; margin-top:-50px;" src="images/logo.jpg"></a>-->
   
    </div>
    <!-- ################################################################################################ -->

  </header>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper bgded" style="background-image:url('images/1.jpg');">
  <div id="announce" class="clear"> 

<div class="center btmspace-80">
      <h3 class="heading" style="color: #000; margin-top:-10px;"><strong><i>Bienvenue Sur l'espace membre</i></strong> </h3>
      <p class="nospace" style="color: #000"><i> plateforme scence edicatif <i class="fa fa-user"></i> </p>

    </div>
    <br> <br>

    <!-- ########################################################################################## -->
    
    <div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3>Login</h3>
        <div class="d-flex justify-content-end social_icon">
          <span><i class="fab fa-facebook-square"></i></span>
          <span><i class="fab fa-google-plus-square"></i></span>
          <span><i class="fab fa-twitter-square"></i></span>
        </div>
      </div>
      <div class="card-body">

<?php // ficher de connexion de la bd
include("connection.php");
// inseré les donneé
if(isset($_POST['submit'])) {
  $user = mysqli_real_escape_string($mysqli, $_POST['username']);
  $pass = mysqli_real_escape_string($mysqli, $_POST['password']);

  if($user == "" || $pass == "") {
    echo "login ou le mot de pass vide.";
    echo "<br/>";
    echo "<a href='login.php'>connexion</a>"; 
  } else {
    $result = mysqli_query($mysqli, "SELECT * FROM admin WHERE username='$user' AND password='$pass'")
          or die("Could not execute the select query.");
    
    $row = mysqli_fetch_assoc($result);
    
    if(is_array($row) && !empty($row)) {
      $validuser = $row['username'];
      $_SESSION['valid'] = $validuser;
      
      $_SESSION['admin'] = $row['password']; // w7da mnhoum 8alta 
    } else {
      echo "<font color='red'><h2>nom d'utilisateur ou le mote de passe.</h2>";
      echo "<br/>";
      echo "<a href='login.php'>connexion</a>";
    }

    if(isset($_SESSION['valid'])) { //sion yt3da
      header('Location: espace_admin.php');     
    }
  }
} else {
?>

        <form action="" method="post">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="username" class="form-control" placeholder="username" required />
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="password" class="form-control" placeholder="password" required />
          </div>
         
          <div class="form-group">
            <input type="submit" value="Login" name="submit" class="btn float-right login_btn">
          </div>
        </form>


      <?php
}
?>

      </div>
      
    </div>
  </div>
</div>

    <!-- ########################################################################################## --> 
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2019 - All Rights Reserved - plateforme scence edicatif
    <p class="fl_right"> <a href="#" ></a></p>
    <!-- ################################################################################################ --> 
  </div>
</div>
</body>
</html>