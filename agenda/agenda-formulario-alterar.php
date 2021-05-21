<?php
include "../include/cabecalho.php"; 

$id = $_GET['id'];

include "../include/conexao.php";
$sqlBusca = "SELECT * FROM tb_agenda WHERE id={$id};";

$listaDaAgenda = mysqli_query($conexao , $sqlBusca);

$data = $hora = $id_medico = $sala = $id_paciente = "";

while($agenda = mysqli_fetch_assoc($listaDaAgenda)){
    $data = $agenda['data'];
    $hora = $agenda['hora'];
    $id_medico = $agenda['id_medico'];
    $sala = $agenda['sala'];
    $id_paciente = $agenda['id_paciente'];
}
?>

<div class="container">
    <div class="row">
        <form name="altera-agenda" method="post" action="agenda-alterar.php">
        <input name="id" type="hidden" value="<?php echo $id;?>">
            <div class="col">
                <label class="form-label">Data:</label>
                <input class="form-control" type="date" name="data" value="<?php echo $data; ?>">
            </div>
            <div class="col">
                <label class="form-label">Hora:</label>
                <input class="form-control" type="time" name="hora" value="<?php echo $hora; ?>">
            </div>
            <div class="col">
                <label class="form-label">Médico:</label>
                <select name="id_medico" class="form-select form-select-lg mb-3" value="<?php echo $id_medico; ?>">
                    <?php 
                        $sqlBuscaMedicos = "SELECT * FROM tb_medicos";
                        $listaDeMedicos = mysqli_query($conexao , $sqlBuscaMedicos);

                        while($medico = mysqli_fetch_assoc($listaDeMedicos)){
                            echo "<option value='{$medico['id']}'>";
                            echo $medico['nome'];
                            echo "</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="col">
                <label class="form-label">Sala:</label>
                <input class="form-control" name="sala" value="<?php echo $sala; ?>">
            </div>
            <div class="col">
                <label >Paciente:</label>
                <select name="id_paciente" class="form-select form-select-lg mb-3" value="<?php echo $id_paciente; ?>">
                    <?php 
                        $sqlBuscaPacientes = "SELECT * FROM tb_pacientes";
                        $listaDePacientes = mysqli_query($conexao , $sqlBuscaPacientes);

                        while($paciente = mysqli_fetch_assoc($listaDePacientes)){
                            echo "<option value='{$paciente['id']}'>";
                            echo $paciente['nome'];
                            echo "</option>";
                        }
                    ?>
                </select>
            </div>
            <p>
                <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
            </p>

        </form>

<?php include "../include/rodape.php"; ?>