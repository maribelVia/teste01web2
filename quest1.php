<!DOCTYPE html>
<html>

	<head>

	<meta charset="utf-8"/>
		<title>Questão 1</title>	

	</head>
	
	<body>
	<div>
	<form method="get" action="quest1.php">
	<label for="estado">Código do Item</label>
	  <select name="cod" id="estado">
		   <option value=1 id="1">100</option>
		   <option value=2 id="2">1001</option>
		   <option value=3 id="3">102</option>
		   <option value=4 id="4">103</option>
		   <option value=5 id="5">104</option>
		   <option value=6 id="6">105</option>
		   
		</select>
	Quantidade: <input type= "number" name="q" /><br/><br/>
		
	<input type="submit" value="Enviar"/><br/><br/>
	
<?php
	
	$cod= $_GET["cod"];
	$quan= $_GET["q"];
	$cq= 3.50;
	$bs= 4.50;
	$bco= 4.80;
	$ham= 5.50;
	$xb= 6;
	$refri= 6.50;
	
	switch ($cod){
		case 1: 
			echo "O pedido foi de $quan cachorros quentes e o valor é de ". number_format($quan*$cq, 2);
			break;
		case 2: 
			echo "O pedido foi de $quan Bauru Simples e o valor é de ". number_format($quan*$bs, 2);
			break;
		case 3: 
			echo "O pedido foi de $quan bauru com ovo e o valor é de ". number_format($quan*$bco, 2);
			break;
		case 4: 
			echo "O pedido foi de $quan hamburguer e o valor é de ". number_format($quan*$ham, 2);
			break;
		case 5: 
			echo "O pedido foi de $quan x-burguer e o valor é de ". number_format($quan*$xb, 2);
			break;
		case 6: 
			echo "O pedido foi de $quan Refrigerante e o valor é de ". number_format($quan*$refri, 2);
		
		
	}
	?>
	
	
	</form>
	</div>
	</body>
</html>