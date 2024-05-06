<?php

//é uma forma de segurança definir a class em abstract
abstract class ClassConexao {
 
    #realizara a conexao com o bd
    protected function conectaDB() {
        try{
            $Con= new mysqli("localhost","root","","crud");
            return $Con;
            
        }catch (Exception $Erro){
            return $Erro->getMessage();
        }
    }
}