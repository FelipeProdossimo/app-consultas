<?php include "../include/cabecalho.php"; ?>
    <div class="container">
        <div class="row">
            <form class=text-center name="formulario-inserir-pacientes" action="pacientes-inserir.php" method="post">
                <div class="col">
                    <label class="form-label">CPF:</label>
                    <input name="cpf" class="form-control">
                </div>
                <div class="col">
                    <label class="form-label">Nome:</label>
                    <input name="nome" class="form-control">
                </div>
                <div class="col">
                    <label class="form-label">Telefone:</label>
                    <input name="telefone" class="form-control">
                </div>
                <div class="col">
                    <label class="form-label">Data de Nascimento:</label>
                    <input class="form-control text-center" id="nascimento" name="nascimento" type="date">
                    <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                </div>
            </form>
        </div>
    </div>
<?php include "../include/rodape.php"; ?>