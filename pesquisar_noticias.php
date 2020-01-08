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
            <li><a href="estatuto.php" class="estatuto">Estatuto</a></li>
            <li><a href="noticias.php"  class="noticias">Notícias</a></li>
            <li><a href="parceiros.html"  class="parceiros">Parceiros</a></li>
            <li id="logo"><a href="index.php"><img src="img/PNG/logo-cabecalho.png" alt="" ></a></li>
            <li id="button1"><a href="ouvidoria.html" class="but1">Ouvidoria</a></li>
            <li id="button2"><a href="associese.html" class="but2">Associe-se</a></li>
        </ul>         
    </div>

    <div id="conteudo03">
            <div id="sec07">
            <p class="title05">fique por dentro das noticias do bairro</p>
            </div>

            <div id="sec08">
            <p class="texto07">Separamos notícias, dicas, lista de documentação e muitos outros assuntos para você.</p>
            </div>

            <div id="sec09">
            <form method="post" action="pesquisar_noticias.php">
                <div class="search01">
                <input type="txt" placeholder="Encontre uma notícia..." name="txtparametro">
                <button><img src="img/SVG/magnifying-glass.svg"></button>
                </div>
            </form>
            </div>

            <div id="sec10">
                <div class="title06">Categorias</div>
            </div>

            <a href="noticias.php" style=" text-decoration:none;"><div id="box05"><div id="textbox01"><p class="texto08">Todas as notícias</p></div></div></a>
            <a href="#" style=" text-decoration:none;"><div id="box06"><div id="textbox01"><p class="texto08">Documentações</p></div></div></a>
            <a href="#" style=" text-decoration:none;"><div id="box07"><div id="textbox01"><p class="texto08">Eventos</p></div></div></a>
            <a href="#" style=" text-decoration:none;"><div id="box08"><div id="textbox01"><p class="texto08">História</p></div></div></a>
    
            <?php

            $pesquisar = $_POST['pesquisar'];
            $result = "SELECT * FROM noticias WHERE categoria LIKE '%$pesquisar%' LIMIT 5";
            $resultado = mysqli_query($conn, $result);

            if($resultado = '0')
            {
                echo "<script language='javascript' type='text/javascript'> alert('Estatuto publicado com sucesso!');window.location.href='gerenciar_estatuto.php';</script>";
            }else{

            while($dados = mysqli_fetch_array($resultado)){
                
            ?>

            <table class="post-content">
            <tr>
            <td> <?php 
                echo "<a href='post.php?id=$dados[id]' style='text-decoration:none;'>";
                ?>
            <div class="title10"><?php echo $dados['titulo'];?></div>
            </a></td>
            </tr>
            <tr>
            <td>
            <span class="texto04"><?php echo $dados['categoria'];?></span>
            </td>
            <div class="media">
            </tr><br>
            <tr><td>
            <div class="card_img">
            <img src="Sistema/pags/uploads/<?php echo$dados['imagem']?>" class="miniatura">
            </div>
            </td>
            </tr>
            </div>
            </div>
            </div> 
		    </div>
            </div>
            </table>
            
    <?php 
    }}        
    ?>  

</div>
            
<div id="sec24">  

    <div id="footer02">
        <div class="title03" style="margin-left: 32%;">PARCEIROS DO BAIRRO</div>
        <div id="line02"></div>


    </div>

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
</div>
</div>

    </body>
</html>