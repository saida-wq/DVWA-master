<?php session_start(); ?>
<?php
if(empty($_SESSION['admin'])) {
  header('Location: login.php');
}
?> 

<?php
//y compris le fichier de connexion à la base de données
      include("connection.php"); //insert donneé dans la  database  

      if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['identifiant']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['numTel']) )
{ 

  
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $identifiant = $_POST['identifiant'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $numTel = $_POST['numTel'];
 

    //mise a joure  the table
    $result = mysqli_query($mysqli, "INSERT INTO chauffeurs(nom, prenom, identifiant, email, password, numTel) VALUES ('$nom','$prenom','$identifiant','$email','$password','$numTel')");
    
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


<section class="container" style="margin-top: 50px; margin-bottom: 50px;"> 
    <!-- ################################################################################################ -->

   
   
     <form  method="post" action="" class="form-group">
     <div>
      <h1 >Ajouter Chauffeurs</h1>
       </div>
    <table class="table" border="0">
      
      
      <tr> 
        <td>Nom</td>
        <td><input class="form-control" type="text" required name="nom" value=""></td>
      </tr>

      <tr> 
        <td>Prenom</td>
        <td><input class="form-control" type="text" required name="prenom" value=""></td>
      </tr>

      <tr> 
        <td>Identifiant</td>
        <td><input class="form-control" type="text" required name="identifiant" value=""></td>
      </tr>

      <tr> 
        <td>Email</td>
        <td><input class="form-control" type="text" required name="email" value=""></td>
      </tr>

      <tr> 
        <td>Password</td>
        <td><input class="form-control" type="text" required name="password" value=""></td>
      </tr>

      <tr> 
        <td>Tél</td>
        <td><input class="form-control" type="text" required name="numTel" value=""></td>
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