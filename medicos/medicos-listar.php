<?php include "../include/cabecalho.php"; ?>
<h4 class="text-center fw-bold">Listagem de médicos</h4>
<hr>
<p>
<a href="../medicos/medicos-formulario-inserir.php" class="btn btn-outline-danger mx-auto" style="width: 200px;">Novo Médico</a></button>
</p>

<?php

    include "../include/conexao.php";
    $sqlBusca = "SELECT * FROM tb_medicos;";
    $listaDeMedicos = mysqli_query($conexao , $sqlBusca);

?>
<table class="table table-dark table-striped text-center">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>CRM</th>
        <th>Especialidade</th>
        <th>Ações</th>
    </tr>
    <?php 

    while($medico = mysqli_fetch_assoc($listaDeMedicos)){
        echo "<tr>";
        echo "<td>{$medico['id']}</td>";
        echo "<td>{$medico['nome']}</td>";
        echo "<td>{$medico['telefone']}</td>";
        echo "<td>{$medico['crm']}</td>"; 
        echo "<td>{$medico['especialidade']}</td>";
        echo "<td>Alterar | Excluir</td>";
        echo "</tr>";
    }
    ?>
</table>


    <?php include "../include/rodape.php"; ?>