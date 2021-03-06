<?php
include "../include/cabecalho.php"; 

$id_medico = $_GET['id_medico'];

include "../include/conexao.php";
$sqlBusca = "SELECT * FROM tb_medicos WHERE id={$id_medico};";

$listaDeMedicos = mysqli_query($conexao , $sqlBusca);

$nome = $telefone = $crm = $especialidade = "";

while($medico = mysqli_fetch_assoc($listaDeMedicos)){
    $nome = $medico['nome'];
    $telefone = $medico['telefone'];
    $crm = $medico['crm'];
    $especialidade = $medico['especialidade'];
}
?>


<div class="container">
    <div class="row">
        <form class=text-center name="formulario-inserir-medicos" action="medicos-alterar.php" method="post"> 
            <input name="id_medico" type="hidden" value="<?php echo $id_medico;?>">
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
                <label class="form-label">CRM:</label>
                <input name="crm" class="form-control" 
                value="<?php echo $crm; ?>">
            </div>
            <div class="col">
                <label class="form-label">Especialidade:</label>
                <select name="especialidade" class="form-select form-select-lg mb-3">

                    <option value="Cardiologista" <?php if($especialidade == 'Cardiologista')
                    { echo "selected "; }
                    ?>>Cardiologista</option>

                    <option value="Nutricionista" <?php if($especialidade == 'Nutricionista')
                    { echo "selected "; }
                    ?>>Nutricionista</option>
                    <option value="Ortopedista" <?php if($especialidade == 'Ortopedista')
                    { echo "selected "; }
                    ?>>Ortopedista</option>
                </select>
                <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
            </div>
        </form>
    </div>
</div>
<?php include "../include/rodape.php"; ?>