<?php 
require_once("connexion_bdd.php");
// var_dump($_POST);
// die();
$nom = htmlspecialchars($_POST["nom"]);
$prenom = htmlspecialchars($_POST["prenom"]);
$email = htmlspecialchars($_POST["email"]);
$tel = htmlspecialchars($_POST["telephone"]);
$entreprise = htmlspecialchars($_POST["entreprise"]);

$insert = ('INSERT INTO données(nom, prenom, email, telephone, entreprise) VALUES(?, ?, ?, ?, ?)');
$insert = $connexion->prepare($insert);
$insert->bind_param("sssis", $nom, $prenom, $email, $tel, $entreprise);
$insert->execute();
header('Location: ../View/adresse.php?co=success');
die();
?>