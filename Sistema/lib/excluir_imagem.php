
<html>
<head>
</head>
<body>
<?php

session_start();

include '../lib/conexao.php';

$id_imagem = $_GET['txtcodigo'];	
	
$sql = "DELETE FROM imagens WHERE id_imagem='$id_imagem'" or die (mysql_error());

if(mysqli_query($conn, $sql)){
    echo "<script>
					alert('Imagem excluída!');
					location.href='../pags/gerenciar_imagens.php';	
				</script>";

	}else{
		          echo "<script>
					alert('Não foi possível excluir a imagem');
					location.href='../pags/gerenciar_imagens.php';	
				</script>";
	}
    
?>
</body>
</html>