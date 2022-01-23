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
$result = mysqli_query($mysqli, "SELECT * FROM bus WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    
  $matricule = $res['matricule'];
  $description = $res['description'];
  

}


 if(isset($_POST['matricule']) && isset($_POST['description']) )
{ 
  $id = $_GET['id'];
  $matricule = $_POST['matricule'];
  $description = $_POST['description'];
 
  
    //updating the table
   $result = mysqli_query($mysqli, "UPDATE bus SET matricule='$matricule',description='$description' WHERE id=$id");


    //redirectig to the display page. In our case, it is view.php
    header("Location: list_bus.php");
   
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

     <?php $page='list_bus'; include("menu.php"); ?>

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
        <td>Matricule</td>
        <td><input class="form-control" type="text" name="matricule"  value="<?php echo $matricule;?>" required></td>
      </tr>
      
      <tr> 
        <td>Description</td>
        <td><textarea class="form-control" type="text" name="description" required value=""> <?php echo $description;?></textarea></td>
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