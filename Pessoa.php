<?php

require_once "../Classes/Conexao.php";

class Pessoa extends Conexao{
    private $nome;
    private $sobre;
    private $cep;
    private $endereco;
    private $cidade;
    private $bairro;
    private $estado;
    private $id;
    private $pdo;

    public function __construct(){
        $this->pdo = new Conexao();
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setSobre($sobre){
        $this->sobre = $sobre;
        return $this;
    }
    public function getSobre(){
        return $this->sobre;
    }
    public function setId($id){
        $this->id = $id;
        return $this;
    }
    public function getId(){
        return $this->id;
    }
    public function setCep($cep){
        $this->cep = $cep;
        return $this;
    }
    public function getCep(){
        return $this->cep;
    }
     public function setEndereco($endereco){
         $this->endereco = $endereco;
         return $this;
     }
     public function getEndereco(){
         return $this->endereco;
     }
     public function setCidade($cidade){
         $this->cidade = $cidade;
         return $this;
     }
     public function getCidade(){
         return $this->cidade;
     }
     public function setBairro($bairro){
         $this->bairro = $bairro;
         return $this;
     }
     public function getBairro(){
         return $this->bairro;
     }
     public function setEstado($estado){
         $this->estado = $estado;
         return $this;
     }
     public function getEstado(){
         return $this->estado;
     }
    public function setPessoa($pessoa){
        $this->pessoa = $id;
        return $this;
    }
    public function getPessoa(){
        return $this->id;
    }
    public function cadastrarPessoa(){
        $con = $this->pdo->getConexao();
        $cadastar = $con->prepare("INSERT INTO pessoa (nome,sobre) VALUES (:nome,:sobre)");
        $cadastar->bindValue(":nome",$this->nome);
        $cadastar->bindValue(":sobre",$this->sobre);
        $cadastar->execute();
        $this->id = $con->lastInsertId();
        echo $this->id;
        return true;
        
    }

    public function cadastrarEndereco(){
        $this->id;
        $con = $this->pdo->getConexao();
        $cadastrar = $con->prepare("INSERT INTO endereco (cep,nome,cidade,bairro,estado,pessoa)
         VALUES (:cep,:nome,:cidade,:bairro,:estado,:pessoa)");
         $cadastrar->bindValue(":cep",$this->cep);
         $cadastrar->bindValue(":nome",$this->endereco);
         $cadastrar->bindValue(":cidade",$this->cidade);
         $cadastrar->bindValue(":bairro",$this->bairro);
         $cadastrar->bindValue(":estado",$this->estado);
         $cadastrar->bindValue(":pessoa", $this->id);
         $cadastrar->execute();
         return true;
    }
}

?>