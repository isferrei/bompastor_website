<?php include_once("functions/conexao.php"); ?>

<html>
    <head>

    <title>Notícias | Associação de moradores - Bom Pastor</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css"  href="Css/style.css" />

    <script src="scripts/DD_belatedPNG_0.0.7a.js" type="text/javascript"></script> 
<!--[if lte IE 6]>
<script type="text/javascript">
 DD_belatedPNG.fix('img, #wrap-header, #quick-contact, #right, ul');
</script>
<![endif]-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
       $("li a[href='"+location.href.substring(location.href.lastIndexOf("/")+1,255)+"']").addClass("diferente");
});
</script>
    </head>

    <body>
        <div id="menu">
        <ul>   
            <li><a href="quem_somos.html" class="quem_somos">Quem somos</a></li>
            <li><a href="estatuto.html" class="estatuto">Estatuto</a></li>
            <li><a href="noticias.html"  class="noticias">Notícias</a></li>
            <li><a href="parceiros.html"  class="parceiros">Parceiros</a></li>
            <li id="logo"><a href="index.html"><img src="img/PNG/logo-cabecalho.png" alt="" ></a></li>
            <li id="button1"><a href="ouvidoria.html" class="but1">Ouvidoria</a></li>
            <li id="button2"><a href="associese.html" class="but2">Associe-se</a></li>
        </ul>         
    </div>


    <div id="conteudo03">

            <a href="noticias.php" style="text-decoration: none;">
            <div class="sec19">
            <p class="texto11"><img src="img/SVG/left-arrow.svg" class="arrow-left">Voltar para a Lista de Notícias</p>
            </div></a>
<?php


   if(isset($_GET['id'])){
       $id = mysqli_escape_string($conn, $_GET['id']);
       $sql = "SELECT * FROM noticias WHERE id = '$id'";
       

       $resultado = mysqli_query($conn, $sql);
       $dados = mysqli_fetch_array($resultado);
    }
?>
            <span class="textcategoria"><?php echo $dados['categoria'];?></span>
            <div id="sec17">
            <p class="title09"><?php echo $dados['titulo'];?></p>
            </div>

            <div id="sec18">
            <p class="texto10">Por: <?php echo $dados['id_admin'];?> <br>Data: <?php echo $dados['data'];?></p>
            </div>

            <div id="sec20">
            <p class="texto10">Compartilhe</p> 
            <a href=""><img src="img/SVG/facebook.svg" class="face"></a> 
            <a href=""><img src="img/SVG/twitter.svg" class="twitter"></a> 
            <a href=""><img src="img/SVG/whatsapp.svg" class="whatsapp"></a> 
            </div>
            
            <img src="Sistema/pags/uploads/<?php echo $dados['imagem'];?>" class="mainphoto">
            <div id="sec21">
            <textarea name="noticia" class="noticia01" rows="20" cols="150" maxlength="10000" class="textarea02"><?php echo $dados['noticia'];?></textarea>
            </div>
            </div>
</div>


<div id="sec23">
<div id="bg04">
            </div>
            
            <div id="bg03">
                <p class="title02">NOTÍCIAS DO BAIRRO</p>
                <div id="carousel01">
                </div>
            </div>
            <div id="footer">
                <p class="title03">PARCEIROS DO BAIRRO</p>
                <div id="line"></div>
            </div>


</div>
<div id="sec22">  
<div id="rodape">

    <div id="box02">
        <p class="texto03">Faça parte atuante em prol ao nosso bairro, receba nossos comunicados em primeira mão!</p>
        <input type="email" name="email" id="email" class="email01" placeholder="Digite aqui seu e-mail...">
    </div>
    
    <div id="logo_bairro"><img src="img/PNG/logo-rodape.png"></div>
    
    <ul id="nav">   
        <li id="quem_somos_02"><a href="quem_somos.html">Quem somos</a></li>
        <li id="estatuto_02"><a href="estatuto.html">Estatuto</a></li>
        <li id="noticias_02"><a href="noticias.html">Notícias</a></li>
        <li id="parceiros_02"><a href="parceiros.html">Parceiros</a></li>
        <li id="button3"><a href="ouvidoria.html" class="but3">Ouvidoria</a></li>
    </ul>

<div id="copyright">
    <p class="texto04">Copyright ©2019. Associação de Moradores do Bairro Bom Pastor. Todos os direitos reservados.</p>        
</div>

<div id="desenvolvedor">
    <p class="texto04">Desenvolvido por:</p>
    <div id="logo_plugin"><img src="img/PNG/logoPluginRodape.png" /></div>

</div>
</div>
</body>
</html>