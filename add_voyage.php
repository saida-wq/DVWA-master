<?php session_start(); ?>
<?php
if(empty($_SESSION['admin'])) {
  header('Location: login.php');
}
?> 
<?php
//y compris le fichier de connexion à la base de données
      include("connection.php"); //insert donneé dans la  database

      if(isset($_POST['titre']) && isset($_POST['description']) && isset($_POST['depart_latitude']) && isset($_POST['depart_longitude']) && isset($_POST['arriver_latitude']) && isset($_POST['arriver_longitude']) && isset($_POST['id_chauffeur']) && isset($_POST['id_bus']) )
{ 

  
  $titre = $_POST['titre'];
  $description = $_POST['description'];
  $depart_latitude = $_POST['depart_latitude'];
  $depart_longitude = $_POST['depart_longitude'];
  $arriver_latitude = $_POST['arriver_latitude'];
  $arriver_longitude = $_POST['arriver_longitude'];
  $id_chauffeur = $_POST['id_chauffeur'];
  $id_bus = $_POST['id_bus'];
   
 

    //updating the table
    $result = mysqli_query($mysqli, "INSERT INTO voyages(titre, description, depart_latitude, depart_longitude, arriver_latitude, arriver_longitude, id_chauffeur, id_bus) VALUES ('$titre','$description','$depart_latitude','$depart_longitude','$arriver_latitude','$arriver_longitude','$id_chauffeur','$id_bus')");
    
    //redirectig to the display page. In our case, it is view.php
    header("Location: list_voyages.php"); // fl page  heki 
  
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Transit Autobus</title>
<meta charset="utf-8">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

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
     <center> <h1><a href="index.html">Transit Autobus</a> </h1></center>

     <?php $page='list_voyages'; include("menu.php"); ?>

     <a href="#"><img style="height: 100px ; width: 100px; margin-top:-50px;" src="images/logo.jpg"></a>
   
    </div>
    <!-- ################################################################################################ -->


  </header>
</div>
<!-- ################################################################################################ --> 

<div>
<section class="container" style="margin-top: 50px; margin-bottom: 50px;"> 
    <!-- ################################################################################################ -->

   
   
     <form  method="post" action="" class="form-group">
     <div>
      <h1 >Ajouter Bus</h1>
       </div>
    <table class="table" border="0">
      
      
      <tr> 
        <td>Titre</td>
        <td><input class="form-control" type="text" required name="titre" value=""></td>
      </tr>

      <tr> 
        <td>Description</td>
        <td><textarea class="form-control" required name="description" value=""> </textarea></td>
      </tr>

      <tr> 
        <td>Depart Latitude</td>
        <td><input type="text" class="form-control" required name="depart_latitude" value="" /> </td>
      </tr>

      <tr> 
        <td>Depart Longitude</td>
        <td><input type="text" class="form-control" required name="depart_longitude" value="" /> </td>
      </tr>

      <tr> 
        <td>Arriver Latitude</td>
        <td><input type="text" class="form-control" required name="arriver_latitude" value="" /> </td>
      </tr>

      <tr> 
        <td>Arriver Longitude</td>
        <td><input type="text" class="form-control" required name="arriver_longitude" value="" /> </td>
      </tr>

      <tr> 
        <td>ID Chauffeur</td>
        <td><input type="number" class="form-control" required name="id_chauffeur" value="" /> </td>
      </tr>

      <tr> 
        <td>ID Bus</td>
        <td><input type="number" class="form-control" required name="id_bus" value="" /> </td>
      </tr>

      <tr>
        <td></td>
        <td><input type="submit" name="add" value="Ajouter" class="btn btn-success"></td>
      </tr>
      
    </table>
  </form>


    <!-- ################################################################################################ -->
  </section>

</div>


 
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2019 - All Rights Reserved - PFE Saida Dhouadi & Jawaher Fatnassi
    <p class="fl_right"> <a href="#" ></a></p>
    <!-- ################################################################################################ --> 
  </div>
</div>
</body>
</html>