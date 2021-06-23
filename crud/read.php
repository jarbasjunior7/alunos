<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
</head>
<body>
<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "notas";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM users");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stmt->fetchAll() as $k=>$v) {
    
    echo '<tr>';
    echo '<td>'.$v['id'].'</td>';
    echo '<td>'.$v['aluno'].'</td>';
    echo '<td>'.$v['disciplina'].'</td>';
    echo '<td>'.$v['nota1'].'</td>';
    echo '<td>'.$v['nota2'].'</td>';
    echo '<td> EDITAR </td>';
    echo '<td> EXCLUIR </td>';
    echo '</tr>';
    
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
</body>
</html>