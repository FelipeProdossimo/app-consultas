<div class="container text-align">

<?php include "../include/cabecalho.php"; ?>
<h4 class="text-center fw-bold">Listagem de pacientes</h4>
<hr>
    <div class="row">
        <div class="col text-center">
            <a href="../pacientes/pacientes-formulario-inserir.php" class="btn btn-outline-warning mx-auto" 
            style="width: 200px";>
            <i class="bi bi-plus-circle-dotted"></i> Novo Paciente</a>
            <hr>
        <?php

            include "../include/conexao.php";
            $sqlBusca = "SELECT * FROM tb_pacientes;";
            $listaDePacientes = mysqli_query($conexao , $sqlBusca);

        ?>
        <table class="table table-hover text-center">
            <tr>
                <td class="fw-bold">ID</th>
                <td class="fw-bold">Nome</th>
                <td class="fw-bold">Telefone</th>
                <td class="fw-bold">Data de nascimento</th>
                <td class="fw-bold">Convênio</th>
                <td class="fw-bold">Ações</th>
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
                echo "<td><a class='btn btn-outline-success' href='pacientes-formulario-alterar.php?id={$paciente['id']}'>
                <i class='bi bi-pen'></i>
                </a> | <a class='btn btn-outline-danger' href='pacientes-excluir.php?id={$paciente['id']}'>
                <i class='bi bi-x-lg'></i></a></td>";
                echo "</tr>";
            }
            ?>
        </table>


        </div>
    </div>
</div>
    <?php include "../include/rodape.php"; ?>