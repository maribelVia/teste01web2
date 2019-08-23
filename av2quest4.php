<!-- 4) Crie um programa em PHP utilizando a função rand(), conforme as instruções: (2,5 pontos)
 a. Gerar randomicamente 100 números inteiros entre 0 e 99 {0,1,2,...,97,98,99};
 b. A é o vetor dos valores entre 0 e 50.
 c. Mostre na tela os números gerados aleatoriamente e o vator A. -->
 
 <!DOCTYPE html>
<html>

	<head>
	
		<meta charset="utf-8"/>
		<title>Questão 4</title>
		
	</head>
	
	<body>
	<div>
<pre>
<?php
	
	$limite= 99;
	$vetor= array();
	
	$vetor=gerarValores($limite, $vetor);

	
	function gerarValores($limite, $vetor){
		echo "100 valores entre 0 a 99 :";
		for ($i = 0; $i <= $limite; $i++){
			$vetor[$i] = rand(0,99);
			echo "<br/>$vetor[$i]";
			}
			
			echo "<br/><br/>Valores inferiores a 50 : ";
			
			for($i=0; $i<99; $i++){
				$val=$vetor[$i];
				if($val>=0 && $val<=50){
					echo "<br/><br/>$val";
				}
			}
			}
			
			/*echo "<br/>Primeiros 50 valores : ";
			for($i=0; $i<50; $i++){
				echo "<br/><br/>$vetor[$i]";*/
				

		

	
	
?>
</pre>
	</div>
	</body>
</html>
 