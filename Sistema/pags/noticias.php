<?php include_once("../lib/includes.php"); ?>
<html>
<head>

<title>Notícias | Gerenciador Bairro Bom Pastor</title>

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
<img src="../img/followers.svg" class="icon01"><a href="associados.php"class="texto03"><p>Associados</p></a>
</li>
</ul>

<div id="upbar">
<div class="title01">
    Notícias do bairro
</div>
<a href="gerenciar_noticias.php"><button class="button03">Nova postagem</button></a>
</div>


<div id="sec06">
    

    <?php
			$sql = $conn->prepare("SELECT * FROM noticias ORDER BY id DESC");
			$sql->execute();
			$get = $sql->get_result();
			$total = $get->num_rows;
			if($total > 0){
				while($dados = $get->fetch_array()){
		?>
        <table>
            <div class="post-content">
            <tr>
            <td>
            <div class="title02"><?php echo $dados['titulo'];?></h4>
            </td>
            </tr>
            <tr>
            <td>
            <span class="texto04"><i class="fas fa-user"></i> <?php echo $dados['id_admin'];?> - <i class="far fa-clock"></i> <?php echo $dados['data'];?></span>
            </td>
            <div class="media">
            </tr><br>
            <tr><td>
            <img src="uploads/<?php echo$dados['imagem']?>" class="miniatura">
            </td>
            <td>
            <?php 
                echo "<a href='post.php?id=$dados[id]'"; 
            ?>
            <div class="button05">Visualizar</div>
            </a>
            </td>
            <td>
            <?php 
                echo "<a href='../lib/excluir_noticia.php?txtcodigo=$dados[id]'"; 
            ?>
            <div class="button06">Excluir</div>
            </a>    
            </td>
            </tr>
            </div>
            </div>
            </div> 
		    </div>
            </div><?php }}?>  
            
        </table>
          

        </body>
</html>