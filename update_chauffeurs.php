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
$result = mysqli_query($mysqli, "SELECT * FROM chauffeurs WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    
  $nom = $res['nom'];
  $prenom = $res['prenom'];
  $identifiant = $res['identifiant'];
  $email = $res['email'];
  $password = $res['password'];
  $numTel = $res['numTel'];

}


 if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['identifiant']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['numTel']) )
{ 
  $id = $_GET['id'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $identifiant = $_POST['identifiant'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $numTel = $_POST['numTel'];
  
    //updating the table
   $result = mysqli_query($mysqli, "UPDATE chauffeurs SET nom='$nom',prenom='$prenom',identifiant='$identifiant',email='$email',password='$password',numTel='$numTel' WHERE id=$id");


    //redirectig to the display page. In our case, it is view.php
    header("Location: list_chauffeurs.php");
   
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

     <?php $page='list_chauffeurs'; include("menu.php"); ?>

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
        <td>Prenom</td>
        <td><input class="form-control" type="text" required name="prenom" value="<?php echo $prenom;?>"></td>
      </tr>

      <tr> 
        <td>Identifiant</td>
        <td><input class="form-control" type="text" required name="identifiant" value="<?php echo $identifiant;?>"></td>
      </tr>

      <tr> 
        <td>Email</td>
        <td><input class="form-control" type="text" required name="email" value="<?php echo $email;?>"></td>
      </tr>

      <tr> 
        <td>Password</td>
        <td><input class="form-control" type="text" required name="password" value="<?php echo $password;?>"></td>
      </tr>

      <tr> 
        <td>Tél</td>
        <td><input class="form-control" type="text" required name="numTel" value="<?php echo $numTel;?>"></td>
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