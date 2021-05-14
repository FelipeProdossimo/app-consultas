<?php include "../include/cabecalho.php"; ?>
    <div class="mb-3">
        <form name="formulario-inserir-medicos" action="medicos-inserir.php" method="post">
            <p>
                <label class="form-label">Nome:</label><input name="nome" class="form-control">
            </p>
            <p>
                <label class="form-label">Telefone:</label><input name="telefone" class="form-control">
            </p>
            <p>
                <label class="form-label">CRM:</label><input name="crm" class="form-control">
            </p>
            <p>
                <label class="form-label">Especialidade:</label>
                <select name="especialidade">
                    <option value="Cardiologista">Cardiologista</option>
                    <option value="Nutricionista">Nutricionista</option>
                    <option value="Ortopedista">Ortopedista</option>
                </select>
            </p>
            <p>
                <button type="subtmit">Salvar</button>
            </p>
        </form>
    </div>
<?php include "../include/rodape.php" ; ?>