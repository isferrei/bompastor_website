<html>
<head>
</head>
<body>
<?php session_start();

include 'conexao.php';

if(isset($_POST['alterar'])){
    
$id = mysqli_escape_string($conn, $_POST['id']);
$id_admin = $_SESSION['nome'];
$titulo = mysqli_escape_string($conn, $_POST['titulo']);
$categoria = mysqli_escape_string($conn, $_POST['categoria']);
$noticia = mysqli_escape_string($conn, $_POST['noticia']);

$imagem = $_FILES['imagem']['name'];
$filetmpname = $_FILES['imagem']['tmp_name'];

$folder = '../pags/uploads/';
move_uploaded_file($filetmpname, $folder.$imagem);

$sql = "UPDATE noticias SET id_admin= '$id_admin', titulo='$titulo', categoria= '$categoria', imagem= '$imagem', noticia= '$noticia' WHERE id = '$id'";

if(mysqli_query($conn, $sql)){
    echo "<script language='javascript' type='text/javascript'> alert('Post alterado com sucesso!');window.location.href='../pags/noticias.php';</script>";
}else{
    echo "<script language='javascript' type='text/javascript'> alert('Não foi possivel realizar a alteração!');window.location.href='../pags/noticias.php';</script>";

}
}

?>

</body>
</html>