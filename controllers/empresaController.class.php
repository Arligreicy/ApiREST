<?php
	class EmpresaController
	{
		
		public function consultar()
		{
			// Recebe o CNPJ enviado pelo formulário
			$cnpj = $_POST["cnpj"];

			// Remove os caracteres não numéricos (ponto, barra, traço)
			$cnpj = preg_replace("/\D/", "", $cnpj);
			$cnpj_int = (int)$cnpj;

			$retorno = file_get_contents("https://brasilapi.com.br/api/cnpj/v1/$cnpj_int");
			
			$retorno = json_decode($retorno);

		
			if(is_object($retorno))
			{
				require_once "views/lista_empresa.php";

			}
			else{
				echo $retorno;
			}

		}
		public function cadastrar()
		{
			require_once "conexao.class.php";
			require_once "model/empresaModel.php";
			require_once "controllers/empresaDAO.php";
			

			$empresa = new Empresa(0, $_POST["razao_social"],
			$_POST["bairro"], $_POST["logradouro"], 
			$_POST["nome_fantasia"]);

			$empresaDAO = new EmpresaDAO();
			$empresaDAO->inserir($empresa);
		}
		
	}
?>