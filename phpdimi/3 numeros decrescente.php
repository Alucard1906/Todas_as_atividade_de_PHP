<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title> Exercicio 4 </title>
		
</head>
<body>
Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes)
<form method="POST">
	<label>Digite um numero </label>
			<input type="text" name="Numero1"/><br><br>
    	<label>Digite um numero </label>
     		<input type="text" name="Numero2"/><br><br>
     	<label>Digite um numero </label>
     		<input type="text" name="Numero3"> <br><br>
		<input type="submit" name="btnCalcular" value="Resultado">
	</form>
<?php
	@$num1 = $_POST["Numero1"];
	@$num2 = $_POST["Numero2"];
	@$num3 = $_POST["Numero3"];
	if ($num1 < $num2 && $num2 < $num3 && $num1 < $num3) {
		echo "A ordem decrescente é: <br> ".($num3);
		echo "<br>" .($num2);
		echo "<br>" .($num1);
			}
	elseif ($num1< $num2 && $num3 < $num2) {
		echo "A ordem decrescente é: <br> ".($num2);
		echo "<br>" .($num3);
		echo "<br>" .($num1);
	}
	elseif ($num2 < $num1 && $num1 < $num3) {
		echo "A ordem decrescente é: <br> ".($num3);
		echo "<br>" .($num1);
		echo "<br>" .($num2);
	}
	elseif ($num2 < $num3 && $num3< $num1) {
		echo "A ordem decrescente é: <br> ".($num1);
		echo "<br>" .($num3);
		echo "<br>" .($num2);
	}
	elseif ($num3<$num1 && $num1< $num2) {
		echo "A ordem decrescente é: <br> ".($num2);
		echo "<br>" .($num1);
		echo "<br>" .($num3);
	}
	else{
		echo "A ordem decrescente é: <br> ".($num1);
		echo "<br>" .($num2);
		echo "<br>" .($num3);
	}
?>


</body>
</html><?php