<?php
$senha1 = 1234; // Senha que vai ser comparada!

$senha = $_POST['senha']; // Pega os dados do formulario e armazena na variavel senha

if($senha == $senha1){// Compara a Senha com os dados do formulário

header("location:secreta.php");}// Se der certo redireciona para secreta.php

else{

echo"Senha Incorreta!";// Se der erro aparece a mensagem "Senha Incorreta!"

}

?>