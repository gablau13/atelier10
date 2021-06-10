<?php
require_once 'Connexion.php';
// Écrire un script php( peut-être permettant d'insérer un étudiant sur la table étudiant.

$sql = "INSERT INTO etudiant (Id, Nom, Prenom, Age, Classe, Date_inscription)
VALUES ('', 'Diouf', 'Gabriel', '26', 'Terminale', now())";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}