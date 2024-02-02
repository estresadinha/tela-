<?php
//$nome = $_GET['nome']; //$_GET capta informações do tipo get

$nome = $_POST['nome']; //$_POST capta infomações do tipo post
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

function CadastroUsuarios($usuario, $senha)
{

    $conexao = new PDO("mysql:host=localhost;dbname=db_login", "root", "");
    $query = "INSERT INTO 
                tb_usuarios (usuario, senha) 
            VALUE 
                ('" . $usuario . "', '" . $senha . "')";
    $conexao->exec($query);

    $ultimo_id =  $conexao->lastInsertId();
    return $ultimo_id;
}

$id_usuario = CadastroUsuarios($usuario, $senha);
function CadastroInformacoes($nome, $email, $id)
{
 
    $conexao = new PDO("mysql:host=localhost;dbname=db_login", "root", "");
    $query = "INSERT INTO 
                tb_informacoes (nome, email, id_usuarios) 
            VALUE 
                ('" . $nome . "', '" . $email . "', " . $id . ")";
 
    $conexao->exec($query);
 
    $ultimo_id =  $conexao->lastInsertId();
    return $ultimo_id;
}

CadastroInformacoes($nome, $email, $id_usuario);

