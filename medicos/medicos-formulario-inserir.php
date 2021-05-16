<?php include "../include/cabecalho.php"; ?>
    <div class="mb-3">
        <form class=text-center name="formulario-inserir-medicos" action="medicos-inserir.php" method="post">
            <b>
                <label class="form-label">Nome:</label><input name="nome" class="form-control">
            </b>
            <b>
                <label class="form-label">Telefone:</label><input name="telefone" class="form-control">
            </b>
            <b>
                <label class="form-label">CRM:</label><input name="crm" class="form-control">
            </b>
            <b>
                <label class="form-label">Especialidade:</label>
                <select name="especialidade" class="form-select form-select-lg mb-3">
                    <option value="Cardiologista">Cardiologista</option>
                    <option value="Nutricionista">Nutricionista</option>
                    <option value="Ortopedista">Ortopedista</option>
                </select>
            </b>
            <b>
                <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
            </b>
        </form>
    </div>
<?php include "../include/rodape.php"; ?>