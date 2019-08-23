<!-- Faça um programa em PHP, que leia um número n e: (2,5 pontos) 
a. Crie um vetor de inteiros de n posições;
 b. Crie uma função que receba o valor n. A partir daí, gere números aleatórios no intervalo entre 1 e 10 e armazena em cada posição do vetor;
 c.Conte a quantidade de números pares e ímpares no vetor de inteiros e mostre-os na tela; -->
 <!DOCTYPE html>
<html>

	<head>
	
		<meta charset="utf-8"/>
		<title>Exercicio</title>
		
	</head>
	
	<body>
	<div>

		<form method="get" action="av2quest2.php">
			Posições : <input type="number" name="val" />
			<input type="submit" value="Enviar"/>
		</form>
		
<?php

	
	$n = $_GET["val"];
	$n= $n-1;
	$vetor = array();
	
	$vetor = geracaoDeNumeros($n);
	
	mostraNumerosPares($vetor, $n);
	
	mostraNumerosImpares($vetor, $n);
	
	function geracaoDeNumeros($n){
		for ($i = 0; $i <= $n; $i++){
			$vetor[$i] = rand(1,10);
		}
		
		return $vetor;
	}
	
	function mostraNumerosPares($vetor, $n){
		$qtd = 0 ;
		for ($i=0;$i <= $n; $i++){
			if ($vetor[$i] % 2 == 0){
				$qtd++;
			}
		}
		echo "<br/><br/>Quantidade de números pares: " . $qtd . "<br />";
		
		for ($i=0;$i <= $n; $i++){
			if ($vetor[$i] % 2 ==0){
				echo $vetor[$i] . "<br />";
			}
		}

		
	}
	
	function mostraNumerosImpares($vetor, $n){
		$qtd = 0 ;
		for ($i=0;$i <= $n; $i++){
			if ($vetor[$i] % 2 != 0){
				$qtd++;
			}
		}
		echo "<br/><br/>Quantidade de números ímpares: " . $qtd . "<br />";
		
		for ($i=0;$i <= $n; $i++){
			if ($vetor[$i] % 2 != 0){
				echo $vetor[$i] . "<br />";
			}
		}
	}
?>
	</div>
	</body>
</html>
 