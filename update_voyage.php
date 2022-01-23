<?php session_start(); ?>
<?php
if(empty($_SESSION['admin'])) {
  header('Location: login.php');
}
?>
<?php
include("connection.php");
 

//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM voyages WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    
  $titre = $res['titre'];
  $description = $res['description'];
  $depart_latitude = $res['depart_latitude'];
  $depart_longitude = $res['depart_longitude'];
  $arriver_latitude = $res['arriver_latitude'];
  $arriver_longitude = $res['arriver_longitude'];
  $id_chauffeur = $res['id_chauffeur'];
  $id_bus = $res['id_bus'];

}
//insert le tableau done la BD


 if(isset($_POST['titre']) && isset($_POST['description']) && isset($_POST['depart_latitude']) && isset($_POST['depart_longitude']) && isset($_POST['arriver_latitude']) && isset($_POST['arriver_longitude']) && isset($_POST['id_chauffeur']) && isset($_POST['id_bus']) )
{ 
  $id = $_GET['id'];
  $titre = $_POST['titre'];
  $description = $_POST['description'];
  $depart_latitude = $_POST['depart_latitude'];
  $depart_longitude = $_POST['depart_longitude'];
  $arriver_latitude = $_POST['arriver_latitude'];
  $arriver_longitude = $_POST['arriver_longitude'];
  $id_chauffeur = $_POST['id_chauffeur'];
  $id_bus = $_POST['id_bus'];
 
  
    //updating the table
   $result = mysqli_query($mysqli, "UPDATE voyages SET titre='$titre',description='$description',depart_latitude='$depart_latitude',depart_longitude='$depart_longitude',arriver_latitude='$arriver_latitude',arriver_longitude='$arriver_longitude',id_chauffeur='$id_chauffeur',id_bus='$id_bus' WHERE id=$id");


    //redirectig to the display page. In our case, it is view.php
    header("Location: list_voyages.php"); // update teb3a l modification 
   
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Transit Autobus</title>
<meta charset="utf-8">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> <!--beblioteque -->

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



<div class="container" style="margin-bottom: 50px; margin-top: 50px;">
 

<form  method="post" action="" class="form-group">
     <div>
      <h1 >Ajouter Bus</h1>
       </div>
    <table class="table" border="0"> <!--tableau -->
      
      
      <tr> 
        <td>Titre</td>
        <td><input class="form-control" type="text" required name="titre" value="<?php echo $titre;?>"></td>
      </tr>

      <tr> 
        <td>Description</td>
        <td><textarea class="form-control" required name="description" value=""><?php echo $description;?></textarea></td>
      </tr>

      <tr> 
        <td>Depart Latitude</td>
        <td><input type="text" class="form-control" required name="depart_latitude" value="<?php echo $depart_latitude;?>" /> </td>
      </tr>

      <tr> 
        <td>Depart Longitude</td>
        <td><input type="text" class="form-control" required name="depart_longitude" value="<?php echo $depart_longitude;?>" /> </td>
      </tr>

      <tr> 
        <td>Arriver Latitude</td>
        <td><input type="text" class="form-control" required name="arriver_latitude" value="<?php echo $arriver_latitude;?>" /> </td>
      </tr>

      <tr> 
        <td>Arriver Longitude</td>
        <td><input type="text" class="form-control" required name="arriver_longitude" value="<?php echo $arriver_longitude;?>" /> </td>
      </tr>

      <tr> 
        <td>ID Chauffeur</td>
        <td><input type="number" class="form-control" required name="id_chauffeur" value="<?php echo $id_chauffeur;?>" /> </td>
      </tr>

      <tr> 
        <td>ID Bus</td>
        <td><input type="number" class="form-control" required name="id_bus" value="<?php echo $id_bus;?>" /> </td>
      </tr>

      <tr>
        <td> <input type="hidden" name="id" value=<?php echo $_GET['id'];?> > </td>
        <td><input type="submit" name="update" value="Modefier" class="btn btn-warning"></td>
      </tr>
      
    </table>
  </form>

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