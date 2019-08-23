<!--   1) Escreva um programa em PHP chamado Aritmética que possua uma função chamada Calcular, que recebe dois números inteiros como parâmetros 
e imprime na tela o resultado das quatro operações (+,-,*,/). (2,5 pontos) */   -->

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Aritmética</title>
	</head>

	
	<body>
		<script language="javascript">
			function aleatorio() {
				document.getElementById("demo").innerHTML = "Ola , eu sou Maribel";
			}
		</script>
		
		<form action="av2quest1.php" method="GET">
			
				Primeiro valor : <input type="number" name="n1" /> <br /><br/>
				Segundo valor: <input type="number" name="n2" /> <br /><br/>
			
			
			<input type="submit" name="Enviar" value="calcular" >
			<button onclick="aleatorio()"> Teste<button/>
		</form>
		
		<p id="demo"></p>

		
		<div>
		
		<?php
		
		if(empty($_POST)){
			echo 
		}else{
			
		}

		echo "<br/>Os valores são $n1 e $n2,  respectivamente.<br/>";
		
		calcular($n1, $n2);
		
		function calcular($n1, $n2){
			$soma=$n1+$n2;
			$sub=$n1-$n2;
			$mult=$n1*$n2;
			$div=$n1/$n2;
			echo "<br/><br/>Soma : ". $soma;
			echo "<br/><br/>Subtração : ". $sub;
			echo "<br/><br/>Multiplicação : ". $mult;
			echo "<br/><br/>Divisão : ". $div;
		}
		?>
		</div>
	</body>

</html>
