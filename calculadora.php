<?php

$valor1 = $_POST["valor1"]; 
$valor2 = $_POST["valor2"];
$op = $_POST["operador"]    ;

if (!empty($op) ) {	
	if($op == '+')
	$resul = $valor1 + $valor2;
		elseif($op == '-')
		$resul = $valor1 - $valor2;
			elseif($op == '/')
			$resul = $valor1 / $valor2;
				elseif($op == '*')
				$resul = $valor1 * $valor2;

	echo "O resultado de $valor1 $op $valor2 é: $resul";
}
?>
