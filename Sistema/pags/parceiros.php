<?php include_once("../lib/includes.php"); ?>
<html>
<head>

<title>Parceiros | Gerenciador Bairro Bom Pastor</title>

<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">


<link rel="stylesheet" type="text/css"  href="../Css/style.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<link rel="stylesheet" href="../Assets/bootstrap-3.3.5-dist/css/bootstrap.css">

						


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
    Parceiros do bairro
</div>
<a href="gerenciar_parceiros.php"><button class="button03">Novo parceiro</button></a>
</div>


<div id="sec02">
<br>
<br>

    <div class="container">
        <div class="row">

        <?php
                $sql = $conn->prepare("SELECT * FROM parceiros");
                $sql->execute();
                $get = $sql->get_result();
                $total = $get->num_rows;
                if($total > 0){
                    while($dados = $get->fetch_array()){
            
                 ?>

            <div class="card_img">
                <a href="<?php echo $dados['link']?>" target="_blank">
                <img src="uploads/<?php echo $dados['imagem'] ?>" class="small_img">
                </a>
            </div>    
                <div  class="excluir01" style=" text-decoration: none;">
                <?php 
                echo "<a href='../lib/excluir_parceiro.php?txtcodigo=$dados[id]'>"; 
                ?><i class="fas fa-trash"></i></a>
            </div>
                <div class="alterar01" style="text-decoration: none;">
                <?php 
                echo "<a href='form_alterar_parceiro.php?id=$dados[id]'>"; 
                ?><i class="fas fa-user-edit"></i></a>
                </div>
            <?php
            } }
            ?>  
	
        </div>
    </div>
</div>
</body>
</html>