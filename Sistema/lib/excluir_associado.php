
<html>
<head>
</head>
<body>
<?php

session_start();

include 'conexao.php';

$id_associado = $_GET['txtcodigo'];	
	
$sql = "DELETE FROM associado WHERE id_associado='$id_associado'" or die (mysql_error());

if(mysqli_query($conn, $sql)){
    echo "<script>
					alert('Associado excluído com sucesso!');
					location.href='../pags/associados.php';	
				</script>";

	}else{
		          echo "<script>
					alert('Não foi possível excluir o associado no momento');
					location.href='../pags/associados.php';	
				</script>";
	}
    
?>
</body>
</html>