    <?php include_once("lib/includes.php"); ?>
<html>
<head>

<title><?php echo gera_titulo("Sistema de Gerenciamento"); ?></title>

<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css"  href="Css/style.css" />
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>

<body>
<div id="conteudo">
<table width="100%" align="center" >
<form method="POST">

            <tr>
            <td><img src="img/user.png" class="logo"></td>
            </tr>
            <tr>
			<td><input type="text" name="nome" id="nome" placeholder="Nome" class="inputtxt" required autofocus></td>
			</tr>
			<tr>
			<td><input type="password" name="senha" id="senha" placeholder="Senha" class="inputtxt" required></td>
			</tr>
            <tr>
            <td>
            <input type="submit" value="Entrar" name="Entrar" class="entrar">
            <input type="hidden" name="env" value="log">
        </td>	
            </tr>       
            
</table>

</div>


<?php 
	session_start();

	include'lib/conexao.php';    
    if($_POST['env'] && $_POST['env'] == "log"){ 
    if((isset($_POST['nome'])) && (isset($_POST['senha']))){
        $nome = mysqli_real_escape_string($conn, $_POST['nome']); 
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
	
	$result = "SELECT * FROM administrador WHERE nome = '$nome' AND senha= '$senha'";
	$result = mysqli_query($conn,$result) or die (mysqli_error());
	$row = mysqli_fetch_assoc($result);
	if(isset($row)){
		$_SESSION['nome'] = $row['nome'];
		$_SESSION['senha'] = $row['senha'];
		header("Location: pags/noticias.php");
		
		}else{
		echo"<div class='alert alert-danger'>Administrador ou senha inválidos!</div>";	
    }
}
}
?>


</body>
</html>