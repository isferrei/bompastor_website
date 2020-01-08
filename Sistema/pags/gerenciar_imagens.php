<?php include_once("../lib/includes.php"); ?>
<html>
<head>

<title>Galeria de imagens | Gerenciador Bairro Bom Pastor</title>

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
    Galeria de imagens
</div>
</div>


<div id="sec02">
<form method="POST" enctype="multipart/form-data">
<table>         
            <tr><td><div id="sec05"><p class="texto01">Insira uma imagem à sua galeria:</p></div>
            <input type="file" name="imagem" class="imagem02">
            <input type="submit" class="button04" name="insert" value="Inserir"></td>
            
</tr>
</table>
</form>
<br>
<br>

<div class="modal">
    <div class="modal_content">
    <img src="uploads/<?php echo $dados['nome'] ?>" id="modal_img">
    </div>
    <span id="bt_close">&times;</span>
</div>


    <div class="container">
        <div class="row">

        <?php
                $sql = $conn->prepare("SELECT * FROM imagens ORDER BY id_imagem DESC");
                $sql->execute();
                $get = $sql->get_result();
                $total = $get->num_rows;
                if($total > 0){
                    while($dados = $get->fetch_array()){
            
                 ?>

            <div class="card_img">
                <img src="uploads/<?php echo $dados['nome'] ?>" class="small_img">
            </div>    
                <div  class="excluir01" style=" text-decoration: none;">
                <?php 
                echo "<a href='../lib/excluir_imagem.php?txtcodigo=$dados[id_imagem]'"; 
                ?><i class="fas fa-trash"></i></a>
            </div>
            <?php
            } }
            ?>  
	
        </div>
    </div>


    <script src="galeria.js"></script>
</div>
</body>

<?php  
$connect = mysqli_connect("localhost", "root", "", "bompastor");  
if(isset($_POST['insert'])) {

    $nome = $_FILES['imagem']['name'];
    $filetmpname = $_FILES['imagem']['tmp_name'];
   
    $folder = 'uploads/';
    move_uploaded_file($filetmpname, $folder.$nome);

    $sql = "INSERT INTO imagens (nome) VALUES ('$nome')";
    $qry = mysqli_query($conn, $sql);
    if( $qry) {
    echo "<script language='javascript' type='text/javascript'> alert('Imagem cadastrada com sucesso!');window.location.href='gerenciar_imagens.php';</script>";
    }else{
        echo "<script language='javascript' type='text/javascript'> alert('Não foi possivel cadastrar a imagem!');window.location.href='gerenciar_imagens.php';</script>";
    }
    }
?>  



</html>