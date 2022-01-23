<?php session_start(); ?>
<?php
if(empty($_SESSION['admin'])) {
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>plateforme scence edicatif</title>
<meta charset="utf-8">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
.row1, .row1 a {
    color: #FFFFFF;
    background-color:#0000ff;
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
     <center> <h1><a href="index.html">Transit Autobus</a> </h1></center>

     <?php $page='espace_admin'; include("menu.php"); ?>

     <a href="#"><img style="height: 100px ; width: 100px; margin-top:-50px;" src="images/logo.jpg"></a>
   
    </div>
    <!-- ################################################################################################ -->


  </header>
</div>
<!-- ################################################################################################ --> 
<h1 style="text-align: center; margin-top: 50px;">plateforme scence edicatif</h1>
<h5 style="text-align: center;">Lorem ipsum dolor</h5>
<div style="margin-top: 100px; margin-bottom: 100px; margin-left: 25px; margin-right: 25px;">
   <div class="row">

      <div class="col-md-4">
         <div class="card mb-4 text-white bg-dark">
            <img class="card-img-top" src="images/bus.jpg" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">Acceuil</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="list_bus.php" class="btn btn-outline-light btn-sm">Voir Plus</a>
            </div>
         </div>
      </div>

      <div class="col-md-4">
         <div class="card mb-4 text-white bg-dark">
            <img class="card-img-top" src="images/vo.jpg" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">cours en ligne</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="list_voyages.php" class="btn btn-outline-light btn-sm">Voir Plus</a>
            </div>
         </div>
      </div>

      <div class="col-md-4">
         <div class="card mb-4 text-white bg-dark">
            <img class="card-img-top" src="images/1.jpg" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">video edicatif</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="list_stations.php" class="btn btn-outline-light btn-sm">Voir Plus</a>
            </div>
         </div>
      </div>
    </div>

   </div>
  
   





 
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2019 - All Rights Reserved - PFE Saida Dhouadi & Jawaher Fatnassi</p>
    <p class="fl_right"> <a href="#" ></a></p>
    <!-- ################################################################################################ --> 
  </div>
</div>
</body>
</html>