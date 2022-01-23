<?php session_start(); ?>
<?php
if(empty($_SESSION['admin'])) {
  header('Location: login.php');
}
?>
<?php
include("connection.php");

$sql = <<<SQL
    SELECT * FROM `bus`
    
SQL;

if(!$result = $mysqli->query($sql)){
    die('There was an error running the query [' . $mysqli->error . ']');
  echo $sql;

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Transit Autobus</title>
<meta charset="utf-8">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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

     <?php $page='list_bus'; include("menu.php"); ?>

     <a href="#"><img style="height: 100px ; width: 100px; margin-top:-50px;" src="images/logo.jpg"></a>
   
    </div>
    <!-- ################################################################################################ -->


  </header>
</div>
<!-- ################################################################################################ --> 



    <!-- ################################################################################################ -->
         <br><h1 style="text-align: center; color: blue;" >Liste des Bus<FONT face="Times New Roman" color="#339BFF"></FONT></h1><br>

  
 <div class="container">
   <table class="table" >
   <tr>
       <td> <a href="add_bus.php"> <img  src="images/ajou.png" align="center" /></a></td>
    <!--recherche##################################################################-->
    
       <form method="post" action="">   
        <td > <a href="list_bus.php"> <img src="images/ref.png"/> </a></td>
        <td > <input  class="input-group-text" type="text" name="matricule" placeholder="Chercher par matricule.."/>
              <input class="btn btn-primary" type="submit" name="cherche" value="Chercher"/>
        </td>
       </form>
   </tr>
   </table>
   <table class="table">
          <thead style="color:#ffefee">
            <tr style="color:black;">
              <th class="bg-primary" align="center">Id Bus </th>
              <th class="bg-primary" align="center">Matricule</th>
              <th class="bg-primary" align="center">Description</th>
              
              <th class="bg-primary" align="center">Modifier</th>
              <th class="bg-primary" align="center">Suprimer</th>
            </tr>
          </thead>
          <tbody>

<?php 
if(isset($_POST['cherche']))//si il y a un recherche
{  $t=$_POST['cherche'];

  /*--- il va chercher par matricule dans la base de donnee--*/ 
$val1=$_POST['matricule'];

$sql2 = <<<SQL
   SELECT * FROM `bus` 
   WHERE matricule LIKE '%$val1%'
    
SQL;


  $result = $mysqli->query($sql2);
  while($row = $result->fetch_assoc())
{ ?>
          <tr>
              <td><?php echo $row['id'];?></td>
              <td><?php echo $row['matricule'];?></td>
              <td><?php echo $row['description'];?></td>
              
              
            <td align="center" ><a href="update_bus.php?id=<?php echo $row['id'];?>" > <img width="50px" height="50px" src="images/modif.png" align="center" /></a></td>
      
              <td align="center" ><a href="delete_bus.php?id=<?php echo $row['id'];?>" onClick="return confirm('Êtes-vous sûr que vous voulez supprimer?')"><img width="50px" height="50px"  src="images/sup.png" align="center" /></a></td>
              
            

            </tr>
<?php } ?>
<?php
     } 
    else{ $result = $mysqli->query($sql);
  while($row = $result->fetch_assoc())

{
?>
        <tr>
              <td><?php echo $row['id'];?></td>
              <td><?php echo $row['matricule'];?></td>
              <td><?php echo $row['description'];?></td>
              
              
            <td align="center" ><a href="update_bus.php?id=<?php echo $row['id'];?>" > <img width="50px" height="50px" src="images/modif.png" align="center" /></a></td>
          
              <td align="center" ><a href="delete_bus.php?id=<?php echo $row['id'];?>" onClick="return confirm('Êtes-vous sûr que vous voulez supprimer ?')"><img width="50px" height="50px"  src="images/sup.png" align="center" /></a></td>
              

            </tr>

          <?php  } } ?>
            </tbody>
            </table>
          </div>
    <!-- ################################################################################################ -->





 
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