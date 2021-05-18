<?php
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$nascimento = date('Y-m-d', strtotime($_POST["nascimento"]));


include "../include/conexao.php";
$sqlInserir = "INSERT INTO tb_pacientes
(cpf, nome, telefone, nascimento) values(
    '{$cpf}' , 
    '{$nome}' , 
    '{$telefone}' , 
    '{$nascimento}');
    ";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    echo "Paciente foi inserido com sucesso!<br>";
    echo "<a href='pacientes-listar.php'>Retornar</a>";
}else{
    echo "Ops, ocorreu um erro!";
}
?>

INSERT INTO tb_pacientes(id, cpf, nome, telefone, nascimento) values('3' , '43333188521' , 'Hill' , '19 97432-8342' , '20/08/1997')