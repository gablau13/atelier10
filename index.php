

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etudiant</title>
</head>
<body>
    <title>Liste des étudiants</title>
    <?php
    require_once "Connexion.php";


$sql = "SELECT Id, Nom, Prenom, Age, Classe, Date_inscription FROM etudiant";
$result = mysqli_query($conn, $sql);
print_r($result);

if (mysqli_num_rows($result) > 0) {
  
  while($row = mysqli_fetch_assoc($result)) {
    echo "Id: " . $row["Id"]. " - Nom: " . $row["Nom"]. " - Prenom " . $row["Prenom"]. " - Age " . $row["Age"]. " - Classe " . $row["Classe"]. " - Date_inscription " . $row["Date_inscription"].  "<br>";
  }
}
 else {
  echo "0 results";
}
mysqli_close($conn);
?>
    
  
</body>
</html>