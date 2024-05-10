
<?php
/*connexion à la base de donnée*/
include ("header.php");
$db_username = 'bob';
$db_password = 'bob';
$db_name = 'Fripouille';
$db_host = 'localhost';

try{
    $db = new PDO("mysql:host=$db_host;dbname=$db_name",$db_username,$db_password);
}catch(PDOException $e){
    die("Erreur de connexion à la base de donnée :".$e->getMessage());
}
/*Inscription des données du suivi enfant dans la bdd*/
$date = date('Y-m-d');
$sql2 = 'CALL Insert_suivi_enfant(:nom,:prenom,:comportement,:date,:idcomptep)';
$id_parent = intval($_POST["id_compte_p"]);
$statement = $db->prepare($sql2);
$statement->bindParam(":nom",$_POST["nom"]);
$statement->bindParam(":prenom",$_POST["prenom"]);
$statement->bindParam(":comportement",$_POST["comportement"]);
$statement->bindParam(":date",  $_POST['DateActivite']);
$statement->bindParam(":idcomptep",$id_parent,PDO::PARAM_INT);

$statement->execute();
?>
<h2><u>Et voilà votre enfant est inscrit !</u></h2>
<br>
<br>
<img src="img/pouce.png">

