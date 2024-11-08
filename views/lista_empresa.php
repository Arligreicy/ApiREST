<!doctype html>
<html>
	<head>
		<title>retornos da Empresa</title>
		<meta charset="UTF-8">
	</head>
	<body>
        <h1>Cadastrar Empresa</h1>
        <form action="index.php?controle=empresaController&metodo=cadastrar" method="post">
            <label for="razao_social">Razão Social:</label>
            <input type="text" name="razao_social" id="razao_social" value="<?php echo $retorno->razao_social?>">
            <br>
            <label for="bairro">Bairro:</label>
            <input type="text" name="bairro" id="bairro" value="<?php echo $retorno->bairro?>">
            <br>
            <label for="logradouro">Logradouro:</label>
            <input type="text" name="logradouro" id="logradouro" value="<?php echo $retorno->logradouro?>">
            <br>
            <label for="nome_fantasia">Nome Fantasia:</label>
            <input type="text" name="nome_fantasia" id="nome_fantasia" value="<?php echo $retorno->nome_fantasia?>">
        
            <div>
            <input type="submit" value="Cadastrar">
            </div>
        </form>
        <br>
        <br>
                    
	</body>
</html>