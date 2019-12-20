<?php
   include'conexao.php';

    $result=mysqli_query("SELECT * FROM noticias WHERE id=$PicNum") or die("Impossível executar a query "); 
    $row=mysqli_fetch_object($result); 
    Header( "Content-type: image/gif"); 
    echo $row->imagem; 
?>