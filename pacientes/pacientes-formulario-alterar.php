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


    <div class="mb-3">
        <form class=text-center name="formulario-inserir-pacientes" action="pacientes-alterar.php" method="post">
            
            <input name="id_paciente" type="hidden" value="<?php echo $id_paciente;?>">
            <b>
                <label class="form-label">CPF:</label>
                <input name="cpf" class="form-control" 
                value="<?php echo $cpf; ?>">
            </b>
            <b>
                <label class="form-label">Nome:</label>
                <input name="nome" class="form-control" 
                value="<?php echo $nome;?>">
            </b>
            <b>
                <label class="form-label">Telefone:</label>
                <input name="telefone" class="form-control"
                value="<?php echo $telefone;?>">
            </b>
            <b>
                <label class="form-label">Nascimento:</label>
                <input name="nascimento" class="form-control" 
                value="<?php echo $nascimento; ?>">
            </b>
            <b>
                <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
            </b>
        </form>
    </div>
<?php include "../include/rodape.php"; ?>