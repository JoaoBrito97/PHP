<?php

class Conexao{
    private $host;
    private $banco;
    private $usuario;
    private $senha;
    private $pdo;

    public function __construct(){
        $this->host = "localhost";
        $this->banco = "projeto";
        $this->usuario = "root";
        $this->senha = "";
    }

    public function getConexao(){
        try{
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->banco",$this->usuario,$this->senha);
            return $this->pdo;
        }catch (PDOexception $erro){
                echo "ERRO <br>".$erro->getMessage();
        }catch(Exception $erro){
            echo "ERRO GENÉRICO<br>".$erro->getMessage();
        }
    }

}
$teste = new Conexao();
$teste->getConexao();

?>