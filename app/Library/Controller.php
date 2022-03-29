<?php

    class Controller {

        public function model($model) {
            //requere o arquivo de modelo
            require_once '../app/Models/'.$model.'.php';
            //instancia o modelo
            return new $model;
        }

        public function views($views, $dados = []) {
            $arquivo = ('../app/Views/'.$views.'.php');
            if(file_exists($arquivo)):
                require_once $arquivo;
            else:
                die('O arquivo de views não existe!');
            endif;
        }
    }