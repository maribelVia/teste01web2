<!DOCTYPE html>
<html>

	<head>

	<meta charset="utf-8"/>
		<title>Salário</title>	

	</head>
	
	<body>
	<div>
	<form method="get" action="quest3.php">
	Digite o valor de I : <input type="number" name="vi" min="1"/><br/><br/>
	
		
	<input type="submit" value="Enviar"/><br/><br/>

<?php
	$i= $_GET["vi"];
	$a=9;
	$b=-5;
	$c=-6;
	
	echo " I igual a  : $i <br/>";
	echo " A : $a <br/>";
	echo " B : $b <br/>";
	echo " C : $c <br/>";
	
	if($i==1){
		echo "Crescente : $c, $b, $a";
	}
	elseif(($i=2) || ($i=3)){ #esta é uma manieira simplificada de fazer o mesmo código comentado em cima 
		echo " Decrescente : $a, $b, $c";
	}
		else{
			echo "A maior fica no meio : $b, $a, $c";
		}
	?>
	
	
	</form>
	</div>
	</body>
</html>