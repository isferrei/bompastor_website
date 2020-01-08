<?php include_once("../lib/includes.php"); ?>
<html>
<head>

<title>Parceiros | Gerenciador Bairro Bom Pastor</title>

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
<img src="../img/menu.svg" class="icon01"><a href="gerenciar_parceiros.php"class="texto03"><p>Parceiros</p></a>
</li>
<li>
<img src="../img/followers.svg" class="icon01"><a href="associados.php"class="texto03"><p>Associados</p></a>
</li>
</ul>

<div id="upbar">
<div class="title01">
    Parceiros do bairro
</div>
</div>


<div id="sec02">
<form method="POST" enctype="multipart/form-data">

<table>         
            <tr><td>
            <div id="sec05"><p class="texto01">Insira o nome do parceiro abaixo:</p></div>
            <input type="text" name="nome" class="titulo02" placeholder="Digite o nome de seu parceiro">
            </td></tr>  
            <tr><td><div id="sec05"><p class="texto01">Insira a logo de seu parceiro:</p></div>
            <input type="file" name="imagem" class="imagem02"></td></tr>
            <tr><td><div id="sec09"><p class="texto01">Insira um link para a página de seu parceiro:</p>
            <input type="text" name="link" class="link01" placeholder="https://www.parceiro..."></td></tr>  
        <tr>
        <td><input type="submit" class="cadastrar" name="cadastrar" value="Cadastrar"></td>
        </tr>
</table>
</form>

</body>
</html>

<?php  
$connect = mysqli_connect("localhost", "root", "", "bompastor");  
if(isset($_POST['cadastrar'])) {

    $nome = $_POST['nome'];
    $link = $_POST['link'];

    $imagem = $_FILES['imagem']['name'];
    $filetmpname = $_FILES['imagem']['tmp_name'];
   
    $folder = 'uploads/';
    move_uploaded_file($filetmpname, $folder.$imagem);

    $sql = "INSERT INTO parceiros (nome, link, imagem) VALUES ('$nome', '$link', '$imagem')";
    $qry = mysqli_query($conn, $sql);
    if( $qry) {
        echo "<script language='javascript' type='text/javascript'> alert('Parceiro cadastrado com sucesso!');window.location.href='parceiros.php';</script>";
    }else{
        echo "<script language='javascript' type='text/javascript'> alert('Não foi possivel cadastrar este parceiro!');window.location.href='gerenciar_parceiros.php';</script>";
    }
    }
?>  



