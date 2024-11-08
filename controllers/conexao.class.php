<?php
	class Conexao
	{
		public function __construct(protected $db = null)
		{
			try
			{
				$parametros = "mysql:host=localhost;dbname=empresa;";
				
				$this->db = new PDO($parametros, "root", "");
			}
			catch(PDOException $e)
			{
				echo "Problema ao abrir conexão com o BD";
				die();
			}
		}
	}
?>