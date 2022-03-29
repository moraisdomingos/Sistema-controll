<form action="<?= URL ?>/Schools/create" method="POST" enctype="multipart/form-data" class="form">
        <?php 
            if(isset($dados['cadastrado'])): ?>
                <h1 class="info"><?= $dados['cadastrado'] ?></h1>
                <?php 
                else: ?>
                    <h1>Cadastro de Escola</h1>
           <?php endif; ?>    

    <div class="divider1">

        <div class="input-field">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?= $dados['nome'] ?>" placeholder="Nome da escola" required>
        </div>

        <div class="input-field">
            <label for="contacto">Contacto:</label>
            <input type="text" name="contacto" id="contacto" value="<?= $dados['contacto'] ?>"  placeholder="Contacto da escola" required>
        </div>

        <div class="input-field chekbox-container">
            <label for="status" id="status-title">Status da escola:</label>
            <label for="aberto">
                <input type="checkbox" name="status" id="aberto" value="Aberto">
                <span>Aberto</span>
            </label>
            <label for="encerrado">
                <input type="checkbox" name="status" id="encerrado" value="Encerrado Temporáriamente">
                <span>Encerrado Temporáriamente</span>
            </label>
            <label for="brevemente">
                <input type="checkbox" name="status" id="brevemente" value="Aberto Brevemente">
                <span>Aberto Brevemente</span>
            </label>
        </div>

        </div>    

        <div class="divider2">

        <div class="input-field">
            <label for="localizacao">Localização:</label>
            <input type="text" name="localizacao" id="localizacao" value="<?= $dados['localizacao'] ?>" placeholder=" (Município, distrito, bairro, rua) required">
        </div>

        <div class="input-field">
            <label for="data">Data de fundação:</label>
            <input type="date" name="data" value="<?= $dados['data'] ?>" required>
        </div>

        <div class="input-field">
            <label for="logo">Logo da escola:</label>
            <input type="file" name="logo" id="logo">
        </div>

        </div>
        
        <div class="input-field">
            <input type="submit" value="Registrar" class="btn">
        </div>
    </form>