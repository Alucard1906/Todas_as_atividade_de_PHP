<html>
 <head>
  <title> HTML Progressivo - Curso de HTML completo, online e gratuito </title>
  <meta name="description" content="Como alterar a cor do plano de fundo de um site em HTML">
 </head>
 
 <body bgcolor="#F0E68C	"> 


<?php

//Recebemos o CPF digitado pelo usuario

@ $cpfRecebido  = $_POST['numero8'];
$cpf = str_split($cpfRecebido);

//Temos um array para armazenar os numeros 

$cpfInvalido = array(00000000000, 11111111111, 22222222222, 33333333333, 44444444444, 55555555555, 66666666666, 77777777777, 88888888888, 99999999999);

$resultadoSomaPDV = 0;
$resultadoMultiplicacaoPDV = 0;
$resultadoSomaSDV = 0;
$resultadoMultiplicacaoSDV = 0;
$situacao = 0;

//Agora, podemos fazer a podemos transcrever a parte que calcula o primeiro DV.
//Temos o operador ternário, com isso é possível resumir a estrutura do “Se” em apenas uma linha.

for ($i = 0; $i <= 8; $i++){
   @ $resultadoMultiplicacaoPDV = $cpf[$i] * (10 - $i);
    $resultadoSomaPDV = $resultadoSomaPDV + $resultadoMultiplicacaoPDV;
}
$resultadoRestoPDV = $resultadoSomaPDV % 11;
$pdv = ($resultadoRestoPDV >= 10) ? 0 : (11 - $resultadoRestoPDV);

//Continuando nossa transcrição, podemos ir para o cálculo do segundo DV, 
//Que é bem parecido com o cálculo do primeiro, porém, são utilizado os dez primeiros números.

for ($i = 0; $i <= 9; $i++) {
 @   $resultadoMultiplicacaoSDV = $cpf[$i] * (11 - $i);
    $resultadoSomaSDV = $resultadoSomaSDV + $resultadoMultiplicacaoSDV;
}
$resultadoRestoSDV = $resultadoSomaSDV % 11;
$sdv = ($resultadoRestoSDV >= 10) ? 0 : (11 - $resultadoRestoSDV);

//Vamos para a parte que verifica se o número digitado no CPF são aqueles casos de todos os números repetidos

for ($i = 0; $i <= 9; $i++) {
    if($cpfRecebido == $cpfInvalido[$i]) {
        $situacao = true;
        break;
    } else {
        $situacao = false;
    }
}

//E finalmente a última parte. Nessa parte que é feita a validação final verificando se tem algum número repetido no código e se, 
//O primeiro DV é igual ao décimo número do CPF, e o segundo DV é igual ao décimo primeiro número do CPF

if ($situacao) {
    echo  ("<center>  <font size='10'> <span style='color:#4B0082	'> Seu CPF Aparecerá Aqui! </span> </font> </center>");
} else if(( @ $cpf[9] == $pdv) and ($cpf[10] == $sdv)) {
        echo ("<center>  <font size='10'><span style='color:#006400'>CPF válido </span></font> </center>");
} else {
    echo("<center>  <font size='10'><span style='color:#B22222	'> CPF inválido  </span></font> </center>");
}

?>
<center>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<input type="" name="numero8" placeholder="Digite o CPF"style="width: 450px;px; height:40px; ">

<input type="submit">

</center>
</form>


 </body>
 
</html>