<!DOCTYPE html>
<html>

	<head>

	<meta charset="utf-8"/>
		<title>Salário</title>	

	</head>
	
	<body>
	<div>
	
<?php
	$tab= 0;
	$tab1=1;
	$tab2=2;
	$tab3=3;
	$tab4=4;
	$tab5=5;
	$tab6=6;
	$tab7=7;
	$tab8=8;
	$tab9=9;
	$tab10=10;
	$vez=0;
	
	while($vez<=10){
		
	echo "$tab x $vez = ". $res=$tab*$vez;
	echo "<br/>$tab1 x $vez = ". $res=$tab1*$vez;
	echo "<br/>$tab2 x $vez = ". $res=$tab2*$vez;
	echo "<br/>$tab3 x $vez= ". $res=$tab3*$vez;
	echo "<br/>$tab4 x $vez = ". $res=$tab4*$vez;
	echo "<br/>$tab5 x $vez= ". $res=$tab5*$vez;
	echo "<br/>$tab6 x $vez = ". $res=$tab6*$vez;
	echo "<br/>$tab7 x $vez= ". $res=$tab7*$vez;
	echo "<br/>$tab8 x $vez = ". $res=$tab8*$vez;
	echo "<br/>$tab9 x $vez= ". $res=$tab9*$vez;
	echo "<br/>$tab10 x $vez = ". $res=$tab10*$vez;
	
	$vez++;

	}
	?>
	
	
	</form>
	</div>
	</body>
</html>