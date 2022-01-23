<?php
$idcon = new mysqli('localhost','root','','id8811156_transit');
$idcon->query('SET NAMES UTF8');
$result = $idcon->query("select* from chauffeurs where id=".$_GET['id']);
$tab= $result->fetch_assoc();
$idcon->query("delete from chauffeurs where id=".$_GET['id']);
if($idcon->affected_rows ==1)
	header("Location: list_chauffeurs.php"); // redirection vers une page 
else
	echo "Erreur de suppression";
?>