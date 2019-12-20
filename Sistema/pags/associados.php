<?php include_once("../lib/includes.php"); ?>
<html>
<head>

<title>Associados | Gerenciador Bairro Bom Pastor</title>

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
    Associados do bairro
</div>
</div>


<div id="sec02">
<br>
<br>

            <div class="sec10">
            <table style="width:100%">
<tr>
    <th><div class="titulo03">ID</div></th>
    <th><div class="titulo03">NOME</div></th>
    <th><div class="titulo03">EMAIL</div></th>
    <th><div class="titulo03">TELEFONE</div></th>
    <th><div class="titulo03">RUA</div></th>
    <th><div class="titulo03">NUMERO</div></th>
    <th><div class="titulo03">COMPLEMENTO</div></th>
  </tr>
  <?php
                $sql = $conn->prepare("SELECT * FROM associado");
                $sql->execute();
                $get = $sql->get_result();
                $total = $get->num_rows;
                if($total > 0){
                    while($dados = $get->fetch_array()){
            
                 ?>
  <tr>
    <td><div class="texto01"><?php echo $dados['id_associado']?></div></td>
    <td><div class="texto01"><?php echo $dados['nome']?></div></td>
    <td><div class="texto01"><?php echo $dados['email']?></div></td>
    <td><div class="texto01"><?php echo $dados['telefone']?></div></td>
    <td><div class="texto01"><?php echo $dados['rua']?></div></td>
    <td><div class="texto01"><?php echo $dados['numero']?></div></td>
    <td><div class="texto01"><?php echo $dados['complemento']?></div></td>
    <td> <?php echo "<a href='../lib/excluir_associado.php?txtcodigo=$dados[id_associado]'"; ?>
    <i class="fas fa-trash" style=" text-decoration: none; color:#ED4949;"></i></a></td>
</tr> <?php
            } }
            ?> 
</table>
             
	
        </div>
    </div>
</div>
</body>
</html>