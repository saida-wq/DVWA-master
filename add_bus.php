<?php session_start(); ?>
<?php
if(empty($_SESSION['admin'])) { 
  header('Location: login.php');
}
?>
<?php
      include("connection.php");

      if(isset($_POST['matricule']) && isset($_POST['description']) )
{ 

  
  $matricule = $_POST['matricule'];
  $description = $_POST['description'];
 

    //updating the table
    $result = mysqli_query($mysqli, "INSERT INTO bus(matricule, description) VALUES ('$matricule','$description')");
    
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


<section class="container" style="margin-top: 50px; margin-bottom: 50px;"> 
    <!-- ################################################################################################ -->

   
   
     <form  method="post" action="" class="form-group">
     <div>
      <h1 >Ajouter Bus</h1>
       </div>
    <table class="table" border="0">
      
      
      <tr> 
        <td>Matricule</td>
        <td><input class="form-control" type="text" required name="matricule" value=""></td>
      </tr>

      <tr> 
        <td>Description</td>
        <td><textarea class="form-control" required name="description" value=""> </textarea></td>
      </tr>

      <tr>
        <td></td>
        <td><input type="submit" name="add" value="Ajouter" class="btn btn-success"></td>
      </tr>
      
    </table>
  </form>


    <!-- ################################################################################################ -->
  </section>




 
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