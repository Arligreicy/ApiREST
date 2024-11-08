<?php
	class empresaDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function inserir($empresa)
		{
			$sql = "INSERT INTO empresa (razao_social, bairro, logradouro, nome_fantasia) VALUES (:razao_social, :bairro, :logradouro, :nome_fantasia)";
            
            $consulta = $this->db->prepare($sql);
            
            $consulta->bindValue(":razao_social", $empresa->getRazao());
            $consulta->bindValue(":bairro", $empresa->getBairro());
            $consulta->bindValue(":logradouro", $empresa->getLogradouro());
            $consulta->bindValue(":nome_fantasia", $empresa->getNomefantasia());
            
            $consulta->execute();
		}
		
	}
?>