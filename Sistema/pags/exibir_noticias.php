<?php include_once("../lib/includes.php"); ?>
<html>
<head>

<title><?php echo gera_titulo("Sistema de Gerenciamento"); ?></title>

<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css"  href="../Css/style.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
</head>

<body>
<div id="conteudo02">

<ul class="sec01">
<li>
<img src="../img/user.svg" class="icon01"><div class="texto01">
    <?php
    session_start();
    echo "Olá, ". $_SESSION['nome'];    
    ?></div>
<a href="sair.php"><img src="../img/logout.svg" class="logout"></a>

</li>
<br>

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
<div class="title01">
    Notícias do bairro
</div>
<a href="gerenciar_noticias.php">
<div class="button03">
Nova postagem
</a></div>
</div>
<div id="sec06">

    <div class="post-content">
            <div class="title02">Título da minha publicação</h4>
            <span class="texto02"><i class="fas fa-user"></i> Thiago sales - <i class="far fa-clock"></i> 27/08/2018</span>
            <div class="media"><br>
              <img class="miniatura" src="images/coding.jpg">
              <div class="text_body">
                Minha publicação. Minha publicação. Minha publicação. Minha publicação. Minha publicação. Minha publicação. Minha publicação. Minha publicação. Minha pub...
                <p class="button02"><a href="#">Leia Mais</a></p>
              </div>
            </div>
          </div>
          </div>

          <div class="post-content">
          <div class="title02">Título da minha publicação</h4>
            <span class="texto02"><i class="fas fa-user"></i> Thiago sales - <i class="far fa-clock"></i> 27/08/2018</span>
            <div class="media"><br>
              <img class="miniatura" src="images/coding.jpg">
              <div class="text_body">
                Minha publicação. Minha publicação. Minha publicação. Minha publicação. Minha publicação. Minha publicação. Minha publicação. Minha publicação. Minha pub...
                <p class="button02"><a href="#">Leia Mais</a></p>
              </div>
            </div>
          </div>
          </div>

          <div class="post-content">
            <div class="title02">Título da minha publicação</h4>
            <span class="texto02"><i class="fas fa-user"></i> Thiago sales - <i class="far fa-clock"></i> 27/08/2018</span>
            <div class="media"><br>
              <img class="miniatura" src="images/coding.jpg">
              <div class="text_body">
                Minha publicação. Minha publicação. Minha publicação. Minha publicação. Minha publicação. Minha publicação. Minha publicação. Minha publicação. Minha pub...
                <p class="button02"><a href="#">Leia Mais</a></p>
              </div>
            </div>
          </div>
          </div>