<!-- 3) Faça um programa que calcula a Média: (2,5 pontos) 
a. Crie um vetor de 15 posições e preencha com valores aleatórios entre 0 e 9
 b. Calcule a Média desse vetor. 
 -->
 <!DOCTYPE html>
<html>

	<head>
	
		<meta charset="utf-8"/>
		<title>Questão 3</title>
		
	</head>
	
	<body>
	<div>
	
<pre>
<?php
	
	$p=15;
	
	$vetor= media($p);
	$vetor= array();
	
	
	
	function media($p){
		$soma=0;
		for($i=0; $i<=$p; $i++){
			$vetor[$i]= rand(0, 9);
			$soma=$vetor[$i]+$soma;
		}
		$media = $soma/15;
		sort($vetor);
		$mediana= $vetor[8];
		
		print_r($vetor);
		print_r("Soma: ". $soma);
		echo "<br/>A media é de : ". $media;
		echo "<br/>A mediana é : ". $mediana;
		return $vetor;
		
	}
?>

</pre>
	</div>
	</body>
</html>
 