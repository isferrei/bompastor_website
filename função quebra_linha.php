function quebra_linha($texto){
  $i = strlen($texto);//verifica a quantidade de caracteres que tem no texto
  $cont=0;//contador de posição da pesquisa
  $tamanho = 0;//tamanho da linha que esta sendo pesquisada
  while($i>$cont) //nao deixa passar o limite do texto
    {

    if(($tamanho >= 15 and substr ( $texto, $cont, 1 ) ==" ") or  substr ( $texto, $cont, 4 ) == "\r\n" ) //verifica se a quantidade de caracteres é maior que 120 na linha, se for verifica se este carácter é um espaço, ou se caso no texto existir quebra de linha é respeitado também.
    {
     echo "<br>"; // faz a quebra da linha
     $tamanho =0; //volta o contador
    }else{
     echo substr ( $texto, $cont, 1 ); //exibe o carácter da linha
     $tamanho ++; //soma a pesquisa;
    }    
    $cont++; //soma o contador de caracter
    }
 }
