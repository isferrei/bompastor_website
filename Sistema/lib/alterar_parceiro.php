<html>
<head>
</head>
<body>
<?php session_start();

include 'conexao.php';

if(isset($_POST['alterar'])){
$id = mysqli_escape_string($conn, $_POST['id']);
$nome = mysqli_escape_string($conn, $_POST['nome']);
$link = mysqli_escape_string($conn, $_POST['link']);

$imagem = $_FILES['imagem']['name'];
$filetmpname = $_FILES['imagem']['tmp_name'];

$folder = '../pags/uploads/';
move_uploaded_file($filetmpname, $folder.$imagem);

$sql = "UPDATE parceiros SET id='id', nome= '$nome', link='$link', imagem= '$imagem' WHERE nome = '$nome'";

if(mysqli_query($conn, $sql)){
    echo "<script language='javascript' type='text/javascript'> alert('Parceiro alterado com sucesso!');window.location.href='../pags/parceiros.php';</script>";
}else{
    echo "<script language='javascript' type='text/javascript'> alert('Não foi possivel realizar a alteração!');window.location.href='../pags/parceiros.php';</script>";
}
}

?>

</body>
</html>