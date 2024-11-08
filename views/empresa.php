<!doctype html>
<html>
	<head>
		<title>Empresa</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>Consultar Empresa</h1>
		<form action="index.php?controle=empresaController&metodo=consultar" method="post">
            <label for="cnpj">CNPJ:</label>
            <input type="text" name="cnpj" id="cnpj">
            <input type="submit" value="Consultar">
        </form>
	</body>
</html>