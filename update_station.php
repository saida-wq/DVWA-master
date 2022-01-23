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
$result = mysqli_query($mysqli, "SELECT * FROM arrets WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    
  $nom = $res['nom'];
  $latitude = $res['latitude'];
  $longitude = $res['longitude'];

}


 if(isset($_POST['nom']) && isset($_POST['latitude']) && isset($_POST['longitude']) )
{ 
  $id = $_GET['id'];
  $nom = $_POST['nom'];
  $latitude = $_POST['latitude'];
  $longitude = $_POST['longitude'];
 
  
    //updating the table
   $result = mysqli_query($mysqli, "UPDATE arrets SET nom='$nom',latitude='$latitude',longitude='$longitude' WHERE id=$id");


    //redirectig to the display page. In our case, it is view.php
    header("Location: list_stations.php");
   
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

     <?php $page='list_stations'; include("menu.php"); ?>

     <a href="#"><img style="height: 100px ; width: 100px; margin-top:-50px;" src="images/logo.jpg"></a>
   
    </div>
    <!-- ################################################################################################ -->


  </header>
</div>
<!-- ################################################################################################ --> 



<div class="container" style="margin-bottom: 50px; margin-top: 50px;">
 

<form role="form" class="form-group" action="" method="post" >
     <div>
      <h1 >Modifier Bus</h1>
       </div>
    <table  class="table" border="0">
     
      <tr> 
        <td>Nom</td>
        <td><input class="form-control" type="text" name="nom"  value="<?php echo $nom;?>" required></td>
      </tr>
      
      <tr> 
        <td>Latitude</td>
        <td><input class="form-control" type="text" name="latitude"  value="<?php echo $latitude;?>" required></td>
      </tr>

      <tr> 
        <td>Longitude</td>
        <td><input class="form-control" type="text" name="longitude"  value="<?php echo $longitude;?>" required></td>
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