<?php


$PO= 4;


echo "Cardapio <br />";
echo "1 Banana <br />";
echo "2 Laranja <br />";
echo "3 Abacaxi <br />";
echo "4 Sair <br />";

switch ($PO) {
	case '1':
		
		echo"Voçê escolheu Banana"; 
		
		break;
	
	case '2':
		
		echo"Voçê escolheu Laranja"; 
		
		break;

	case '3':
		
		echo"Voçê escolheu Abacaxi"; 
		
		break;
	
	case '4':
		
		echo"Voçê escolheu Sair"; 
		
		break;

    default:
    		echo "Sua escolha é invalida";

    		break;
    }

?>