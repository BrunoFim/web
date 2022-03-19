<!DOCTYPE html>
<html>
<head>
<title>Meu primeiro </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6    jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body> 
    <h1>
      1. Faça um script PHP que armazene 4 notas de um aluno em variáveis e 
      no final apresente a média das notas. 
    </h1>
    <form action='codigo.php' method="get">
    Nota 1: <input type="text" name="num1"><br>
    Nota 2: <input type="text" name="num2"><br>
    Nota 3: <input type="text" name="num3"><br>
    <input type="submit">
   </form> 
   <?php 
   $num1 = $_GET['num1'];
   $num2 = $_GET['num2'];
   $num3 = $_GET['num3'];
   $media = ($num1 + $num2 + $num3)/3;
   echo "Média: $media";
  ?>
<h1>
Escreva um programa em PHP que apresente informações
relacionados a você, par  a isto, declarar variáveis para armazenamento dos
dados pedidos abaixo e posteriormente fazer a impressão deles utilizando o
comando ECHO.
<br>
• Nome Completo.<br>
• Data, Cidade e Estado de nascimento<br>
• Endereço<br>
<h1>
<form action='codigo.php' method="get">
Nome Completo: <input type="text" name="nome"><br>

Data:<input type="text" name="date">

Cidade:<input type="text" name="cidade"><br>

Estado de nascimento:<input type="text" name="esnasc"><br>

Endereço <input type="text" namesa ="ende"><br>
    <input type="submit">
   </form> 
   
   <?php
   $nome = $_GET['nome'];
   echo "nome: $nome";

   $date = $_GET['date'];
   echo "Date: $date";
   
   $cidade = $_GET['cidade'];
   echo "cidade: $cidade";

   $escnasc = $_GET['esnasc'];
   echo "esnac: $esnasc";

   $ende = $_GET['ende'];
   echo "ende: $ende";

   
   ?>

</h1>


</body>
</html>