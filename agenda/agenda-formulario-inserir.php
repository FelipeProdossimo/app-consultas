<?php 
include "../include/cabecalho.php" 
?>


<?php 
include "../include/conexao.php" 
?>

<div class="container text-center text-align mt-5">
    <form name="cadastro-agenda" method="post" action="agenda-inserir.php">
            <div class="mb-3 row">
                <label for="">Data:</label>
                <input type="date" name="data">
            </div>
            <div class="mb-3 row">
                <label for="">Hora:</label>
                <input type="time" name="hora">
            </div>
            <div class="mb-3 row">
                <label>Médico:</label>
                <select name="id_medico">
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
            <div class="mb-3 row">
                <label for="">Sala:</label>
                <input name="sala">
            </div>
            <div class="mb-3 row">
                <label>Paciente:</label>
                <select name="id_paciente">
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
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="submit">Salvar</button>
            </div>
        
    </form>
</div>
<?php include "../include/rodape.php" ?>