<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>   
<?php


$aluno = $_POST['aluno'];
$disciplina = $_POST['disciplina'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "notas";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO users (aluno, disciplina, nota1, nota2)
  VALUES ('$aluno', '$disciplina', '$nota1', '$nota2')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "As Notas Foram Adicionadas";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>

<a href="http://localhost/alunos/">Inicio</a>

</body>
</html>