<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($senha == 123){

    header("Location: aprovado.php");
    
}else {
    header("Location: bloqueado.php");
}

echo "Seu usuário é : $usuario <br>Sua Senha é : <b>Confidencial</b>";
?>