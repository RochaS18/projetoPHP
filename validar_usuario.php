<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

<h1>Validador usuário</h1>

</head>

<body>

<form action="recebe_usuario.php" method="post">

<label for="email"> Email: </label>
	
<input type="email" name="email" id="email" required maxlength="100" autofocus>

<br><br>

<label for="senha"> Senha: </label>
	
<input type="password" name="senha" id="senha" required maxlength="12" >

<br><br>

<input type="submit" name="enviar" value="Enviar">

<br><br>

<input type="reset" name="limpar" value="Limpar">

</form>

</body>

</html>