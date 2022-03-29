<?php

    class Categorys extends Controller {

        public function create() {

            $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if(isset($formulario)):
                $dados = [
                    'nome' => trim($formulario['nome']),
                    'categoria' => trim($formulario['categoria'])
                ];

            else:
                $dados = [
                    'nome' => '',
                    'categoria' => ''
                ];
            endif;

            $this->views('categorys/create', $dados);
        }

    }