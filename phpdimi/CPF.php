<?php 
	/*
		Estrutura condicional IF
		isset() : função recebe uma variável e verifica se ela existe. retorna valor boolean
		
		$_POST : variável superglobal que recebe os valores do formulário com método "post"
	*/
	if(isset($_POST)){
		// $n1 recebe o número do campo do formulário de nome 'numero1'
	@	$n1 = $_POST['numero1'];
		// $n2 recebe o número do campo do formulário de nome 'numero2'
	@	$n2 = $_POST['numero2'];

	@	$n3 = $_POST['numero3'];
        
	@	$n4 = $_POST['numero4'];

	@	$n5 = $_POST['numero5'];

	@	$n6 = $_POST['numero6'];

	@	$n7 = $_POST['numero7'];

	@	$n8 = $_POST['numero8'];

	@	$n9 = $_POST['numero9'];
        
	@	$n10 = $_POST['numero2'];


		// echo é equivalente ao printf
		echo "Resultado: ";
		echo $n1*10;
		echo $n2*9;
		echo $n3*8;
		echo $n4*7;
		echo $n5*6;
		echo $n6*5;
		echo $n7*4;
		echo $n8*3;
		echo $n9*2;



	}
?>


<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="" name="numero1" placeholder="Numero 1"style="width: 55px;px; height:25px; ">
	<input type="" name="numero2" placeholder="Numero 2"style="width: 55px;px; height:25px; ">
	<input type="" name="numero3" placeholder="Numero 3"style="width: 55px;px; height:25px; ">
	<input type="" name="numero4" placeholder="Numero 4"style="width: 55px;px; height:25px; ">
	<input type="" name="numero5" placeholder="Numero 5"style="width: 55px;px; height:25px; ">
	<input type="" name="numero6" placeholder="Numero 6"style="width: 55px;px; height:25px; ">
	<input type="" name="numero7" placeholder="Numero 7"style="width: 55px;px; height:25px; ">
	<input type="" name="numero8" placeholder="Numero 8"style="width: 55px;px; height:25px; ">
	<input type="" name="numero9" placeholder="Numero 9"style="width: 55px;px; height:25px; ">

	<input type="submit">

    
</form>