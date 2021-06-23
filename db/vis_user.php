<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alunos Adicionados</title>
</head>
<body>
  
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    

    <br>
    <br>
              
   
    <center> 
    
      <font size="5" face="Georgia, Arial" color=#0000>     

        <h1> Alunos Inseridos </h1>

      </font>

  </center>


    <br>
    <br>
    <br>
    <main class="container">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id Aluno</th>
            <th scope="col">Aluno</th>
            <th scope="col">Disciplina</th>
            <th scope="col">Nota 1</th>
            <th scope="col">Nota 2</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
            
          </tr>
        </thead>
        <tbody>

      <?php include "alunos/crud/read.php";?>

        </tbody>
    </table>
  </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <a href="http://localhost/alunos/">Inicio</a>
  </body>
</html>