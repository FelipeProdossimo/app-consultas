<div class="container text-center">
<?php
include "../include/cabecalho.php";
echo "<hr>";
include "../include/conexao.php";

$id = $_GET['id'];

$sqlExcluir = "DELETE FROM tb_agenda WHERE id = {$id}";

$resultado = mysqli_query($conexao , $sqlExcluir);

if($resultado){
    echo "Excluido com sucesso <br>";
    echo "<a class='btn btn-outline-danger' style='width: 400px;' href='agenda-listar.php'>
    <i class='bi bi-arrow-left'>Voltar</a>";
}else{
    echo "Ocorreu algum problema";
}
?>
</div>
