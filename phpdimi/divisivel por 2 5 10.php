<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title> </title>
</head>
<body>
<div class="container">
<div class="questao">
	<p>
		Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes.
	</p>
</div>
	<form method="POST">
		<label>Digite um número: </label>
			<input type="text" name="Numero1"/><br>
			<input type="submit" name="btnCalcular" value="Calcular"> 
	</form>

<?php
@$num = $_POST["Numero1"];
if ($num % 10 == 0) {
	echo "<br> O número: " .($num) ;
	echo " é divisísel por 10 <br>" ; 
} 
if ($num % 5 == 0) {
	echo " O número: ".($num) ;
	echo " é divisível por 5 <br>" ; 
}
if ($num % 2 == 0) {
	echo " O número: " .($num) ;
	echo " é divisível por 2 <br> " ;
}
elseif ($num % 10 !=0 && $num  % 5 !=0 && $num % 2 !=0 ) {
	echo "O número: " .($num) ;
	echo " não é divisivel por nenhum destes"; 
}

?>
</div>
</body>
</html><?php
