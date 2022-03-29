<form action="<?= URL ?>/Schools/create" method="POST" enctype="multipart/form-data" class="form">   

 <!-- <?php /* 
            if(isset($dados['cadastrado'])): ?>
                <h1 class="info"><?= $dados['cadastrado'] ?></h1>
                <?php 
                else: ?>
                    <h1>Cadastro de Escola</h1>
<?php endif; */?> --> 
<h1>Remover Escola</h1>

        <div id="input-container">
                    <label for="escola">Seleciona a escola:</label>
                    <select name="escola" id="escola" class="atualiza-select">
                        <option value="">Escola a atualizar</option>
                        <option >IPIL</option>
                    </select>
        </div>
        
        <div class="input-field">
            <input type="submit" value="Registrar" class="btn">
        </div>
    </form>