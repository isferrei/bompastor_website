<?php
require_once 'conexao.php';

if(isset($_POST['cadastrar'])):
$nome = mysqli_escape_string($conn, $_POST['nome']);
$email = mysqli_escape_string($conn, $_POST['email']);
$telefone = mysqli_escape_string($conn, $_POST['telefone']);
$numero = mysqli_escape_string($conn, $_POST['numero']);
$complemento = mysqli_escape_string($conn, $_POST['complemento']);


$sql = "INSERT INTO associado (nome, email, telefone, rua, numero, complemento) VALUES ('$nome', '$email', '$telefone', '$rua', '$numero', '$complemento')";

if(mysqli_query($conn, $sql)):
    echo "Sucesso ao cadastrar-se como associado";
else:
    echo "Erro, ao realizar o cadastro. Verifique suas informações e tente novamente.";
endif;
endif;
?>