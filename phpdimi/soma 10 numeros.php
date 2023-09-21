<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Exemplo</title>
   <meta charset = "UTF-8">
</head>
<body>
   <form action="" method="post" >
      Primeiro Numero: <input name="num1" type="text"><br>
      Segundo numero: <input name="num2" type="text"><br>
      Terceiro numero: <input name="num3" type="text"><br>
      Quarto numero: <input name="num4" type="text"><br>
      Quinto numero: <input name="num5" type="text"><br>
      Sexto numero: <input name="num6" type="text"><br>
      Setimo numero: <input name="num7" type="text"><br>
      Oitavo numero: <input name="num8" type="text"><br>
      Nono numero: <input name="num9" type="text"><br>
      Decimo numero: <input name="num10" type="text"><br>

      <input type="submit" name="operacao" value="+">         
   </form> 
<?php


@$a = $_POST ['num1'];
   @$b = $_POST ['num2'];
   @$c = $_POST ['num3'];
   @$d = $_POST ['num4'];
   @$e = $_POST ['num5'];
   @$f = $_POST ['num6'];
   @$g = $_POST ['num7'];
   @$h = $_POST ['num8'];
   @$i = $_POST ['num9'];
   @$j = $_POST ['num10'];
   @$k =  ['num11'];




   @$op= $_POST['operacao'];


   if( !empty($op) ) {
      if($op == '+')
         $k = $a + $b + $c + $d + $e + $f + $g + $h + $i + $j;

         echo "O resultado da opera&ccedil;&atilde;o &eacute;: $k";
        }
     
     ?>       
     </body>
     </html>