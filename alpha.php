<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordre Alphabétique</title>
</head>
<body>
<?php
require_once "Connexion.php";
$sql = "SELECT Id, Nom, Prenom, Age, Classe, Date_inscription FROM etudiant ORDER BY Nom";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    echo "Id: " . $row["Id"]. " - Nom: " . $row["Nom"]. " - Prenom " . $row["Prenom"]. " - Age " . $row["Age"]. " - Classe " . $row["Classe"]. " - Date_inscription " . $row["Date_inscription"]. "<br>";
  }
} else {
  echo "0 results";
  
  }
?>
</body>
</html>