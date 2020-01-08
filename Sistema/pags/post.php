<?php include_once("../lib/includes.php"); ?>
<?php
    include("../lib/conexao.php");

   if(isset($_GET['id'])){
       $id = mysqli_escape_string($conn, $_GET['id']);
       $sql = "SELECT * FROM noticias WHERE id = '$id'";
       

       $resultado = mysqli_query($conn, $sql);
       $dados = mysqli_fetch_array($resultado);
    }
?>


<html>
<head>

<title>Notícia | Gerenciador Bairro Bom Pastor</title>

<meta charset="utf-8"/>
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
<img src="../img/followers.svg" class="icon01"><a href="gerenciar_parceiros.php"class="texto03"><p>Parceiros</p></a>
</li>
</ul>

<div id="upbar">
<div class="title01">
    Notícia
</div>
</div>  
    

<div id="sec02">
<form method="POST" enctype="multipart/form-data" action="../lib/alterar_post.php">
<table>         
            <tr><td><div id="sec03"><p class="texto01">Título:</p></div>
            <input type="text" name="titulo" class="titulo01" value="<?php echo$dados['titulo']?>"></td>
            </tr>
            
            <tr>
            <td><div id="sec05"><p class="texto01">Categoria:</p></div>
            <select name="categoria" class="categoria01">
                    <option name="categoria" value=""><?php echo$dados['categoria']?></option>        
                    <option name="categoria" value="Documentações">Documentações</option>
                    <option name="categoria" value="Eventos">Eventos</option>
                    <option name="categoria" value="História">História</option>
            </select></td>    
            </tr>
            
            <tr><div id="sec04"><p class="texto01">Imagem principal:</p></div>
            <td>
            <img src="uploads/<?php echo$dados['imagem']?>" class="miniatura02">
            <br>
            <div id="sec08"><p class="texto01">Carregar nova imagem:</p></div>
            <input type="file" name="imagem" class="imagem03" value="<?php echo$dados['imagem']?>"></td>
            </tr>

            <tr>   
            <td><textarea name="noticia" class="noticia01" value="<?php echo$dados['noticia']?>" rows="20" cols="90" maxlength="10000" class="textarea02"><?php echo$dados['noticia']?></textarea></td>
            </tr>
            
            <tr>
            <td><input type="hidden" name='id' value=<?php echo $dados['id']; ?>>
            <input type="submit" class="button01" name="alterar" value="Salvar mudança" action="../lib/alterar_post.php"></td>
            <td><a href="../pags/noticias.php"><div class="button07">Cancelar</div></a>  
                
            
</td>
</tr>
</table>
</form>
</div>    

</body>
</html>