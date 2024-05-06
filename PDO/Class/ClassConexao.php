<?php

//é uma forma de segurança definir a class em abstract
abstract class ClassConexao {
 
    #realizara a conexao com o bd
    protected function conectaDB() {
        try{
            $Con= new PDO("mysql:host=localhost;dbname-crud","root","");
            return $Con;
        }catch (PDOException $Erro){
            return $Erro->getMessage();
        }
    }
    }