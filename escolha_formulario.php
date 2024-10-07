<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<h1 id="titulo">Escolha</h1>

</head>

<body>

<print>

1 - banana
<br>
2 - abacaxi
<br>
3 - morango 
<br>
4 - maracuja
<br>
5 - pera

</print>

<br><br>

<form action="fruta_escolha.php" method="post">

<label for="fruta"> Fruta: </label>
	
<input type="number" name="fruta" id="fruta" required >

<br><br>

<input type="submit" name="Escolher" value="Escolher">

<input type="reset" name="limpar" value="Limpar">

</body>
</html>