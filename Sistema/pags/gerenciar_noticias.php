<?php include_once("../lib/includes.php"); ?>
<html>
<head>

<title>Publicar Notícias | Gerenciador Bairro Bom Pastor</title>

<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css"  href="../Css/style.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"></script>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
						
<script>
    function get_in (objeto, msg) {	if (objeto.value == msg)objeto.value = '';}function get_out (objeto, msg) {	if (objeto.value == '')objeto.value = msg;}
</script>

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
    Nova Notícia
</div>
</div>

<div id="sec02">
<form method="POST" enctype="multipart/form-data">
    <br>
    <br>
<table>         
            <tr><td><div id="sec03"><p class="texto01">Insira seu título abaixo:</p></div>
            <input type="text" name="titulo" class="titulo01" placeholder="Digite um título para a notícia"></td>
            </tr>

            <tr>
            <td><div id="sec05"><p class="texto01">Selecione uma categoria:</p></div>
            <form>
            <select name="categoria" class="categoria01">
                    <option name="categoria" value="" selected>Categorias</option>
                    <option name="categoria" value="Documentações">Documentações</option>
                    <option name="categoria" value="Eventos">Eventos</option>
                    <option name="categoria" value="História">História</option>
            </select>
            </form>
            </td>    
            </tr>

            <tr><div id="sec04"><p class="texto01">Insira uma imagem principal:</p></div>
            <td><input type="file" name="imagem" class="imagem01" /></td>
            </tr>

                <tr>   
                <td><textarea name="noticia" class="noticia01" placeholder="Digite sua notícia" rows="20" cols="90" maxlength="10000" class="textarea02"></textarea></td>
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

    $id_admin = $_SESSION['nome'];
    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $noticia = $_POST['noticia'];

    $imagem = $_FILES['imagem']['name'];
    $filetmpname = $_FILES['imagem']['tmp_name'];
   
    $folder = 'uploads/';
    move_uploaded_file($filetmpname, $folder.$imagem);

    $sql = "INSERT INTO noticias (id_admin, titulo, categoria, data, imagem, noticia) VALUES ('$id_admin', '$titulo', '$categoria', NOW(), '$imagem', '$noticia')";
    $qry = mysqli_query($conn, $sql);
    if( $qry) {
    echo "<script language='javascript' type='text/javascript'> alert('Notícia cadastrada com sucesso!');window.location.href='noticias.php';</script>";
    }else{
    echo "<script language='javascript' type='text/javascript'> alert('Não foi possível cadastrar a notícia!');window.location.href='gerenciar_noticias.php';</script>";
    }
    }
?>  


</body>
</html>