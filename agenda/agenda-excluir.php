<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluído</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
    

<div class="container text-center">
<?php

include "../include/conexao.php";

$id = $_GET['id'];

$sqlExcluir = "DELETE FROM tb_agenda WHERE id = {$id}";

$resultado = mysqli_query($conexao , $sqlExcluir);

if($resultado){
    echo "Excluido com sucesso <br>";
    echo "<a class='btn btn-outline-danger position-absolute top-50 start-50 translate-middle' style='width: 400px;' href='agenda-listar.php'>Voltar</a>";
}else{
    echo "Ocorreu algum problema";
}
?>
</div>
</body>
</html>