
<html>
<head>
</head>
<body>
<?php

session_start();

include '../lib/conexao.php';

$id = $_GET['txtcodigo'];	
	
$sql = "DELETE FROM noticias WHERE id='$id'" or die (mysql_error());

if(mysqli_query($conn, $sql)){
    echo "<script>
					alert('Noticia excluída!');
					location.href='../pags/noticias.php';	
				</script>";

	}else{
		          echo "<script>
					alert('Não foi possível excluir a noticia');
					location.href='../pags/gerenciar_imagens.php';	
				</script>";
	}
    
?>
</body>
</html>