<?php

function listarUsuarios(){

    $conexao = new PDO("mysql:host=localhost;dbname=db_login","root","");

    $query =   "SELECT * FROM  tb_usuarios ";
                   
               
    $resultado = $conexao->query($query);
    $lista = $resultado->fetchAll();
    return $lista;
}
