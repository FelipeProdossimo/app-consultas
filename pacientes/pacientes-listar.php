<?php include "../include/cabecalho.php"; ?>
<h4 class="text-center fw-bold">Listagem de pacientes</h4>
<hr>
<p>
<a href="../pacientes/pacientes-formulario-inserir.php" class="btn btn-outline-danger mx-auto" style="width: 200px;">Novo Paciente</a></button>
</p>

<?php

    include "../include/conexao.php";
    $sqlBusca = "SELECT * FROM tb_pacientes;";
    $listaDePacientes = mysqli_query($conexao , $sqlBusca);

?>
<table class="table table-dark table-hover text-center">
    <tr>
        <td>ID</th>
        <td>Nome</th>
        <td>Telefone</th>
        <td>Data de nascimento</th>
        <td>Convênio</th>
        <td>Ações</th>
    </tr>
    <?php 

    while($paciente = mysqli_fetch_assoc($listaDePacientes)){
        echo "<tr>";
        echo "<td>{$paciente['id']}</td>";
        echo "<td>{$paciente['nome']}</td>";
        echo "<td>{$paciente['telefone']}</td>";
        $dataBrasil = date('d/m/Y', strtotime ($paciente['nascimento']));
        echo "<td>{$dataBrasil}</td>";
        echo "<td>{$paciente['convenio']}</td>";
        echo "<td><a href='pacientes-formulario-alterar.php?id={$paciente['id']}'>Alterar</a> | 
        <a href='pacientes-excluir.php?id={$paciente['id']}'>Excluir</a></td>";
        echo "</tr>";
    }
    ?>
</table>


    <?php include "../include/rodape.php"; ?>