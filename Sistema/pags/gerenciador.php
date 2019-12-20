<?php 
  session_start();
  include_once("../lib/includes.php");
?>
<html>
<head>

<title><?php echo gera_titulo("Sistema de Gerenciamento"); ?></title>

<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css"  href="../Css/style.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

</head>

<body>
<?php if($_SESSION['nome']){?>
<div id="conteudo02">

<ul class="sec01">
<li>
<img src="../img/user.svg" class="icon01">
<div class="texto01"><?php
    echo "Olá, ". $_SESSION['nome'];    
    ?></div>
<a href="sair.php"><img src="../img/logout.svg" class="logout"></a>
<?php }?>

</li><br>
<li>
<img src="../img/chat.svg" class="icon01"><a href="noticias.php" class="texto01"><p>Notícias do bairro</p></a>
</li>
<li>
<img src="../img/photograph.svg" class="icon01"><a href="gerenciar_imagens.php"class="texto01"><p>Imagens</p></a>
</li>
<li>
<img src="../img/file.svg" class="icon01"><a href="gerenciar_estatuto.php"class="texto01"><p>Estatuto</p></a>
</li>
<li>
<img src="../img/menu.svg" class="icon01"><a href="gerenciar_parceiros.php"class="texto01"><p>Parceiros</p></a>
</li>
<li>
<img src="../img/followers.svg" class="icon01"><a href="gerenciar_parceiros.php"class="texto01"><p>Parceiros</p></a>
</li>
</ul>

<div id="upbar">
</div>
<div id="sec02">

</div>

</div>
</head>
</html>