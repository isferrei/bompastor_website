
<html>
<head>
</head>
<body>
<?php

session_start();

include 'conexao.php';

$id = $_GET['txtcodigo'];	
	
$sql = "DELETE FROM parceiros WHERE id='$id'" or die (mysql_error());

if(mysqli_query($conn, $sql)){
    echo "<script>
					alert('Parceiro excluído com sucesso!');
					location.href='../pags/parceiros.php';	
				</script>";

	}else{
		          echo "<script>
					alert('Não foi possível excluir o parceiro no momento');
					location.href='../pags/parceiros.php';	
				</script>";
	}
    
?>
</body>
</html>