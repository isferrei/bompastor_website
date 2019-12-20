<?php include_once("../lib/includes.php"); ?>
<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<?php
			$id_admin = $_SESSION['id_admin'];
            $titulo = $_POST['titulo'];
            $categoria = $_POST['categoria'];
			$noticia = $_POST['noticia'];

			$sql = ("INSERT INTO noticias (id_admin, titulo, categoria, data, noticia) VALUES ('$id_admin', '$titulo', '$categoria', NOW(), '$noticia')");
			if(mysqli_query($conn, $sql)){
                echo "<div class='alert alert-success'>Publicação enviada com sucesso!</div>";
                header("Location: ../pags/gerenciador.php");
			}else{
				echo "<div class='alert alert-danger'>Erro ao enviar a publicação!</div>";
			}


		}else{
			echo "<div class='alert alert-danger'>Preencha todos os campos</div>";
		}
	}
?>
</html>