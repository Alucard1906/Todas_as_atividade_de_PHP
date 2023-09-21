<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<center>
		<h3>Armazenar 15 números inteiros em um vetor e imprimir uma mensagem contendo o número e uma das mensagens: par ou ímpar</h3><hr color="black">
	<div class="tudo">
<?php
	 	$vetor = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
		for ($i = 0; $i < count($vetor); $i++){
   	 	if ($vetor[$i] % 2 == 0)
        echo "$vetor[$i] - Par<br><br>";
    	else
        echo "$vetor[$i] - Ímpar<br><br>";
}
?>
	</center>
	</div>

</body>
</html><?php