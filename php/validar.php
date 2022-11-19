<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($senha == 123 && $usuario == 'gui'){
    header('location: painel.php');
}else{
    header('location: usuario-invalido.php');
}
?>