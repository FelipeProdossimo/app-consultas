<div class="container text-align">

<?php include "../include/cabecalho.php"; ?>
<h4 class="text-center fw-bold">Listagem de médicos</h4>
<hr>
<?php 
if(isset($_GET['mensagem'])){
    if($_GET['mensagem'] == 'cadastrado'){
    ?>
    <div class="alert alert-info text-center" role="alert">
        Cadastrado com sucesso!
    </div>


    <?php
    }      
        if($_GET['mensagem'] == 'excluido'){ 
    ?>
        <div class="alert alert-danger text-center" role="alert">
        Excluído totalmente!
    </div>

    <?php 
        }
        if($_GET['mensagem'] == 'alterado'){
    ?>
        <div class="alert alert-warning text-center" role="alert">
            Linha escolhida foi modificada pelo usuário!!
        </div>

    <?php
        }
    ?>
    <?php 
    }
?>
    <div class="row">
        <div class="col text-center">
            <a href="../medicos/medicos-formulario-inserir.php" class="btn btn-outline-warning mx-auto text-center" 
            style="width: 200px;">
            <i class="bi bi-plus-circle-dotted"></i> Novo Médico</a></button>
            
            <hr>

            <?php

            include "../include/conexao.php";
            $sqlBusca = "SELECT * FROM tb_medicos;";
            $listaDeMedicos = mysqli_query($conexao , $sqlBusca);

            ?>
            <table class="table table-hover text-center">
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
                echo "<td><a class='btn btn-outline-success' href='medicos-formulario-alterar.php?id_medico={$medico['id']}'>
                <i class='bi bi-pen'></i>
                </a> | <a class='btn btn-outline-danger' href='medicos-excluir.php?id_medico={$medico['id']}'>
                <i class='bi bi-x-lg'></i></a></td>";
                echo "</tr>";
            }
            ?>
            </table>
</div>

    <?php include "../include/rodape.php"; ?>