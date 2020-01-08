<?php include_once("../lib/includes.php"); ?>
<?php
    include("../lib/conexao.php");

   if(isset($_GET['id'])){
       $id = mysqli_escape_string($conn, $_GET['id']);
       $sql = "SELECT * FROM parceiros WHERE id = '$id'";
       

       $resultado = mysqli_query($conn, $sql);
       $dados = mysqli_fetch_array($resultado);
    }
?>


<?php include_once("../lib/includes.php"); ?>
<html>
<head>

<title>Alterar Parceiro | Gerenciador Bairro Bom Pastor</title>

<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">


<link rel="stylesheet" type="text/css"  href="../Css/style.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">


					
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
    Alterar Parceiros
</div>
</div>


<div id="sec02">
<form method="POST" enctype="multipart/form-data" action="../lib/alterar_parceiro.php">
<br>
<br>
<table>         
            <tr><td><div id="sec03"><p class="texto01">Nome do parceiro:</p></div>
            <input type="text" name="nome" class="titulo02" value="<?php echo$dados['nome']?>"></td></tr>  
            <tr><td><div id="sec05"><p class="texto01">Logo do parceiro:</p></div>
            <input type="file" name="imagem" class="imagem02" value="<?php echo$dados['imagem']?>"></td></tr>
            <tr><td><div id="sec09"><p class="texto01">Link para a página do parceiro:</p>
            <input type="text" name="link" class="link01" value="<?php echo$dados['link']?>"></td></tr>  
        <tr>
        <td><input type="hidden" name='id' value=<?php echo $dados['id']; ?>>
            <input type="submit" class="button08" name="alterar" value="Salvar mudança" action="../lib/alterar_parceiro.php" ></td>
        <td><a href="parceiros.php"><div class="button09">Cancelar</div></a></td>
        </tr>
</table>
</form>

</body>
</html>


