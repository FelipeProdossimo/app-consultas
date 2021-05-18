<?php include "../include/cabecalho.php"; ?>
<div class="container">
    <div class="row">
        <form class=text-center name="formulario-inserir-medicos" action="medicos-inserir.php" method="post">
            <div class="col">
                <label class="form-label">Nome:</label>
                <input name="nome" class="form-control">
            </div>
            <div class="col">
                <label class="form-label">Telefone:</label>
                <input name="telefone" class="form-control">
            </div>
            <div class="col">
                <label class="form-label">CRM:</label>
                <input name="crm" class="form-control">
            </div>
            <div class="col">
                <label class="form-label">Especialidade:</label>
                <select name="especialidade" class="form-select form-select-lg mb-3">
                    <option value="Cardiologista">Cardiologista</option>
                    <option value="Nutricionista">Nutricionista</option>
                    <option value="Ortopedista">Ortopedista</option>
                </select>
                <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
            </div>
        </form>
    </div>
</div>
<?php include "../include/rodape.php"; ?>