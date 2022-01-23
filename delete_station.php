<?php
$idcon = new mysqli('localhost','root','','id8811156_transit');
$idcon->query('SET NAMES UTF8');
$result = $idcon->query("select* from arrets where id=".$_GET['id']); // fs5li l id 
$tab= $result->fetch_assoc();
$idcon->query("delete from arrets where id=".$_GET['id']);
if($idcon->affected_rows ==1)
	header("Location: list_stations.php"); // redirection vers une page 
else
	echo "Erreur de suppression"; // sinon eruer
?>