<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conectado</title>
</head>
<body>
  
</body>
</html>
<?php
//Página de cadastro

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "notas";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
   //set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "CONECTADO COM SUCESSO";
} catch(PDOException $e) {
  echo "NÃO CONECTADO: " . $e->getMessage();
}
?>