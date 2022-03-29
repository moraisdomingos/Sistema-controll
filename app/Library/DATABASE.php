<?php

    class DATABASE {

    private $host = 'localhost';
    private $usuario = 'root';
    private $senha = '';
    private $banco = 'esm';
    private $porta = '3306';
    private $dbh;
    private $stmt;

    public function __construct()
    {
        //fonte de dados ou DNS contém as informações necessárias para conectar ao banco de dados
       $dns = 'mysql:host'.$this->host.';port='.$this->porta.';dbname='.$this->banco;
       $opcoes = [
           //armazena em cache a conexão para ser reutizada, evita a sobrecarga de uma nova conexão,        resultado em aplixativo mais rápido
            PDO::ATTR_PERSISTENT => true,
            //lança uma PDOexception se ocorrer um erro
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
       ];

       try {
           //cria a instancia do PDO
            $this->dbh = new PDO($dns, $this->usuario, $this->senha, $opcoes);
        } catch (PDOException $e) {
            print "Error!: ". $e->getMessage() ."<br>";
            die();
        }
    }
        public function query($sql) {
            $this->stmt = $this->dbh->prepare($sql);
        }

        public function bind($parametro, $valor, $tipo = null) {

            if(is_null($tipo)):
                switch(true):
                    case is_int($valor):
                        $tipo = PDO::PARAM_INT;
                    break;
                        case is_bool($valor):
                            $tipo = PDO::PARAM_BOOL;
                        break;
                            default:
                            $tipo = PDO::PARAM_STR;
                            break; 
                endswitch;
            endif;

            $this->stmt->bindValue($parametro, $valor, $tipo);
        }

        public function executa() {
            return $this->stmt->execute(); 
        }
    }