<h1>Categorias da Escola</h1>
<div class="central">
    <form action="<?= URL ?>categorys/create" method="POST" enctype="multipart/form-data" class="form">
        <div class="input-field">
            <label for="nome">Nome da escola:</label>
            <input type="text" name="nome" id="nome" value="<?= $dados['nome'] ?>" placeholder="Nome da escola" required>
        </div>

        <div class="input-field">
            <select name="categoria" id="categoria">
                <option value="">Categorias</option>
                <option value="Centros Infantis">Centros Infantis</option>
                <option value="Escolas Primárias">Escolas Primáriass</option>
                <option value="Escolas do 1º Ciclo">Escolas do 1º Ciclo</option>
                <option value="Institutos Médios">Institutos Médios</option>
                <option value="Universidades">Universidades</option>
                <option value="Escolas de Condução">Escolas de Condução</option>
            </select>
        </div>
        
        <div class="input-field">
            <input type="submit" value="Registrar" class="btn">
        </div>
    </form>
</div>