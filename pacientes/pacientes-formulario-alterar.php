<?php
include "../include/cabecalho.php"; 

$id_paciente = $_GET['id'];

include "../include/conexao.php";
$sqlBusca = "SELECT * FROM tb_pacientes WHERE id={$id_paciente};";

$listaDePacientes = mysqli_query($conexao , $sqlBusca);

$cpf = $nome = $telefone = $nascimento = "";

while($paciente = mysqli_fetch_assoc($listaDePacientes)){
    $cpf = $paciente['cpf'];
    $nome = $paciente['nome'];
    $telefone = $paciente['telefone'];
    $nascimento = $paciente['nascimento'];
}
?>


<div class="container">
    <div class="row">
        <form class=text-center name="formulario-inserir-pacientes" action="pacientes-alterar.php" method="post">    
            <input name="id_paciente" type="hidden" value="<?php echo $id_paciente;?>">
            <div class="col">
                <label class="form-label">CPF:</label>
                <input name="cpf" class="form-control" 
                value="<?php echo $cpf; ?>">
            </div>
            <div class="col">
                <label class="form-label">Nome:</label>
                <input name="nome" class="form-control" 
                value="<?php echo $nome;?>">
            </div>
            <div class="col">
                <label class="form-label">Telefone:</label>
                <input name="telefone" class="form-control"
                value="<?php echo $telefone;?>">
            </div>
            <div class="col">
                <label class="form-label">Nascimento:</label>
                <input id="nascimento" name="nascimento"
                 class="form-control" 
                value="<?php echo $nascimento; ?>">
                <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
            </div>
        </form>
    </div>
</div>
<?php include "../include/rodape.php"; ?>