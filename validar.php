<?php

$email = $_POST['email'] ?? '';
$senha = $_POST['password'] ?? '';

$user_adm = "patolino@looneytunes.org";
$password_pat = "patolino123";

if($email == $user_adm && $senha == $password_pat){
    $usuario = 'Mago Supremo';
    echo "<h1 style="color: solid green; text-align: center;">Bem vindo, $usuario!!</h1>";
}
else{
    echo "<h1 style="color: solid red; text-align: center;">E-mail ou Senha incorretos</h1>";
    echo "<scan style="text-align: center;">Voltar<scan>";
}
?>