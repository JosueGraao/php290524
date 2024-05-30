<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Cadastro</title>
</head>

<body>
<h1>Gerenciador de Cadastro</h1>
	<form method="post" action="recebe_cadastro.php">
		Nome
		<input type="text" name="nome"> <br/><br/>
		Senha
		<input type="password" name="senha"> <br/><br/> <input type="checkbox" name="termouso">
		Aceito o termo de uso <br/><br/>
		<input type="radio" name="sexo" value="fem">
		Feminino
		<input type="radio" name="sexo" value="masc">
		Masculino
		<input type="hidden" name="login" value="admin"> <br/>
		<input type="button" name="voltar" value="Voltar">
		<input type="reset" name="limpar" value="Limpar">
		<input type="submit" name="enviar" value="Enviar">
	</form>
</body>
</html>