<div class="container text-center">
<?php
include "../include/cabecalho.php";
echo "<hr>";
include "../include/conexao.php";

$id = $_GET['id'];

$sqlExcluir = "DELETE FROM tb_agenda WHERE id = {$id}";

$resultado = mysqli_query($conexao , $sqlExcluir);

if($resultado){
    header('Location:agenda-listar.php?mensagem=excluido');
}else{
    echo "Ocorreu algum problema";
}
?>
</div>
