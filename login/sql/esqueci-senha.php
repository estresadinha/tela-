<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esqueci senha</title>
</head>
<?php
require'usuario-consulta.php';
$usuario = listarUsuarios();
var_dump($usuario);
?>

<body>


    <table>
        <thead>
        <tr>
            <th>Usuario</th>
            <th>Senha</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
        </thead>

        <tbody>
            <?php foreach($usuario as $lista ) {?>
               

        <tr>Usuario
            <td>manu</td>
            <td>123</td>
            <td><a href= "#">editar</a></td>
            <td><a href="#">Excluir</a></td>
        </tr>
        <?php }?>

        
        </tbody>
    </table>
 

</body>

</html>