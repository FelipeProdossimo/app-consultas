<?php include "../include/cabecalho.php"; ?>
    <div class="mb-3">
        <form class=text-center name="formulario-inserir-pacientes" action="pacientes-inserir.php" method="post">
            <b>
                <label class="form-label">CPF:</label>
                <input name="cpf" class="form-control">
            </b>
            <b>
                <label class="form-label">Nome:</label>
                <input name="nome" class="form-control">
            </b>
            <b>
                <label class="form-label">Telefone:</label>
                <input name="telefone" class="form-control">
            </b>
            <b>
                <label class="form-label">Data de Nascimento:</label>
                <input class="form-control text-center" id="nascimento" name="nascimento" type="date">
            </b>
            <b>
                <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
            </b>
        </form>
    </div>
<?php include "../include/rodape.php"; ?>