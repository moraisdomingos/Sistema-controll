<?php 

    class Schools extends Controller {
        public function __construct()
        {
            $this->schoolModel = $this->model('School');
        }

        public function create() {

            $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if(isset($formulario)):

                $dados = [
                    'nome' => trim($formulario['nome']),
                    'localizacao' => trim($formulario['localizacao']),
                    'contacto' => trim($formulario['contacto']),
                    'data' => $formulario['data'],
                    'status' => $formulario['status']
                ];

                if(isset($_FILES['logo'])):

                    $formatosPermitidos = ["png", "jpg", "jpeg", "gif"];
                    $extensao = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);

                    if(in_array($extensao, $formatosPermitidos)):

                        $pasta = 'C:/wamp64/www/API_ESM/uploads/';
                        $temporario = $_FILES['logo']['tmp_name'];
                        $novoNome = uniqid().".$extensao";

                        if(move_uploaded_file($temporario, $pasta.$novoNome)):

                            $dados['logo'] = $novoNome; 
                            if($this->schoolModel->Insert($dados)):
                                $dados['cadastrado'] = "Cadastro da escola realizado com sucesso !";
                            else:
                                die('Erro ao armazena dados no banco de dados');
                            endif;
                        endif;

                    endif;
                endif;

            else: 

                $dados = [
                    'nome' => '',
                    'localizacao' => '',
                    'contacto' => '',
                    'data' => '',
                    'status' => ''
                ];
            endif;

            $this->views('schools/create', $dados);
        }

        public function update() {
          
            $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $this->views('schools/update');
        }

        public function delete() {

            $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $this->views('schools/delete');
        }
    } 