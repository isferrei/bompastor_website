<?php include_once("../lib/includes.php"); ?>

<?php
    include("../lib/conexao.php");

       $sql = "SELECT * FROM estatuto";

       $resultado = mysqli_query($conn, $sql);
       $dados = mysqli_fetch_array($resultado);
   
?>

<html>
<head>

<title>Estatuto | Gerenciador Bairro Bom Pastor</title>

<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css"  href="../Css/style.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"></script>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
						


</head>

<body>
<div id="conteudo02">

<ul class="sec01">
<li>
<img src="../img/user.svg" class="icon01"><div class="texto03">
    <?php
    session_start();
    echo "Olá, ". $_SESSION['nome'];    
    ?></div>
<a href="sair.php"><img src="../img/logout.svg" class="logout"></a>

</li>
<br>


<li>
<img src="../img/chat.svg" class="icon01"><a href="noticias.php" class="texto03"><p>Notícias do bairro</p></a>
</li>
<li>
<img src="../img/photograph.svg" class="icon01"><a href="gerenciar_imagens.php"class="texto03"><p>Imagens</p></a>
</li>
<li>
<img src="../img/file.svg" class="icon01"><a href="gerenciar_estatuto.php"class="texto03"><p>Estatuto</p></a>
</li>
<li>
<img src="../img/menu.svg" class="icon01"><a href="parceiros.php"class="texto03"><p>Parceiros</p></a>
</li>
<li>
<img src="../img/followers.svg" class="icon01"><a href="associados.php"class="texto03"><p>Associados</p></a>
</li>
</ul>

<div id="upbar">
<div class="title01">
Estatuto do bairro
</div>
</div>

<div id="sec02">
<form method="POST" enctype="multipart/form-data">
    <br>
    <br>
<table>         
            <tr><div id="sec05"><p class="texto01">Insira o estatuto abaixo:</p></div>  
            <td><textarea name="documento" class="noticia01" value="<?php echo$dados['documento']?>" rows="20" cols="90" maxlength="50000" class="textarea02"><?php echo$dados['documento']?></textarea></td>
</tr>
<tr>
        <td><input type="submit" class="button01" name="publicar" value="publicar"></td>
</tr>
</table>
</form>
</div>

</div>


<?php  
$connect = mysqli_connect("localhost", "root", "", "bompastor");  
if(isset($_POST['publicar'])) {

    $documento = $_POST['documento'];

    $sql = "INSERT INTO estatuto (documento) VALUE ('$documento')";
    $qry = mysqli_query($conn, $sql);
    if( $qry) {
    echo "<script language='javascript' type='text/javascript'> alert('Estatuto publicado com sucesso!');window.location.href='gerenciar_estatuto.php';</script>";
    
    }
    }
?>  


</body>
</html>