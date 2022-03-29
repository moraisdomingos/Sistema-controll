<?php 

    class School {

        private $db;

        public function __construct()
        {
            $this->db = new DATABASE;
        }

        public function Insert($dados) {

            $this->db->query("INSERT INTO escola(nome, localizacao, contacto, data_fundacao, status, logo) VALUES(:nome, :localizacao, :contacto, :data_fundacao, :status, :logo)");

            $this->db->bind("nome", $dados['nome']);
            $this->db->bind("localizacao", $dados['localizacao']);
            $this->db->bind("contacto", $dados['contacto']);
            $this->db->bind("data_fundacao", $dados['data']);
            $this->db->bind("status", $dados['status']);
            $this->db->bind("logo", $dados['logo']);

            if($this->db->executa()):
                return true;
            else:
                return false;
            endif;

        }

    }