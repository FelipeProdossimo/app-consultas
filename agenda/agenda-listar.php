<div class="container text-align">

<?php include "../include/cabecalho.php"; ?>
<h4 class="text-center fw-bold">Listagem da agenda</h4>

<?php 
include "../include/conexao.php" ;
$sqlBusca = "SELECT tb_agenda.id,
tb_agenda.data,
tb_agenda.hora,
tb_medicos.nome as 'nome_medico',
tb_agenda.sala,
tb_pacientes.nome as 'nome_paciente'
from tb_agenda
inner join tb_pacientes on tb_agenda.id_paciente = tb_pacientes.id
inner join tb_medicos on tb_agenda.id_medico = tb_medicos.id";
                

$listaDeAgenda = mysqli_query($conexao , $sqlBusca);
?>
<hr>

    <div class="row">
        <div class="col text-center">
            <a href="agenda-formulario-inserir.php" class="btn btn-outline-warning mx-auto" 
            style="width: 200px;"><i class="bi bi-plus-circle-dotted"></i> Nova Consulta
            </a>
            <hr>
            <table class="table table-hover text-center">
                <tr>
                    <th class="fw-bold">ID</th>
                    <th class="fw-bold">Data</th>
                    <th class="fw-bold">Hora</th>
                    <th class="fw-bold">Médico</th>
                    <th class="fw-bold">Sala</th>
                    <th class="fw-bold">Paciente</th>
                    <th class="fw-bold">Ações</th>
                </tr>
                <?php 

                while($agenda = mysqli_fetch_assoc($listaDeAgenda)){
                    echo "<tr>";
                    echo "<td>{$agenda['id']}</td>";
                    $dataBrasil = date('d/m/Y', strtotime ($agenda['data']));
                    echo "<td>{$dataBrasil}</td>";
                    echo "<td>{$agenda['hora']}</td>";
                    echo "<td>{$agenda['nome_medico']}</td>";
                    echo "<td>{$agenda['sala']}</td>";
                    echo "<td>{$agenda['nome_paciente']}</td>";
                    echo "<td><a class='btn btn-outline-success' href='agenda-formulario-alterar.php?id={$agenda['id']}'>
                    <i class='bi bi-pen'></i>
                    </a> | <a class='btn btn-outline-danger' href='agenda-excluir.php?id={$agenda['id']}'>
                    <i class='bi bi-x-lg'></i></a></td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php include "../include/rodape.php" ; ?>

