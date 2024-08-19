<?php

$salario = 1500;
$desconto = 10;

if ($salario <= 1500.00  ) {
	
	echo = "Salario Bruto".$salario;
	echo = "Salario com Desconto de 10%".$desconto;
	$desconto = $salario - (($salario*10)/100);

}


if ($salario >= 1501.00 && $salario <= 1600.00 ) {
	
	echo = "Salario Bruto".$salario;
	echo = "Salario com Desconto de 15%".$desconto;
	$desconto = $salario - (($salario*15)/100);


}

if ($salario >= 1601.00 && $salario <= 1800.00 ) {
	
	echo = "Salario Bruto".$salario;
	echo = "Salario com Desconto de 20%".$desconto;
	$desconto = $salario - (($salario*20)/100);


}

if ($salario >= 1801.00 && $salario <= 2500.00 ) {
	
	echo = "Salario Bruto".$salario;
	echo = "Salario com Desconto de 15%".$desconto;
	$desconto = $salario - (($salario*15)/100);


}

