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
<table class="table table-dark table-striped text-center">
    <tr>
        <th>ID</th>
        <th>CPF</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Nascimento</th>
        <th>Ações</th>
    </tr>
    <?php 

    while($paciente = mysqli_fetch_assoc($listaDePacientes)){
        echo "<tr>";
        echo "<tr>{$paciente['id']}</td>";
        echo "<td>{$paciente['cpf']}</td>";
        echo "<td>{$paciente['nome']}</td>";
        echo "<td>{$paciente['telefone']}</td>";
        echo "<td>{$paciente['nascimento']}</td>";
        echo "<td><a href='pacientes-formulario-alterar.php?id_paciente={$paciente['id']}'>Alterar</a> | 
        <a href='pacientes-excluir.php?id_paciente={$paciente['id']}'>Excluir</a></td>";
        echo "</tr>";
    }
    ?>
</table>


    <?php include "../include/rodape.php"; ?>