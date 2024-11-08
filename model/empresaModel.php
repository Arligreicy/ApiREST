<?php
	class Empresa
	{
		public function __construct(private int $id_empresa = 0, 
		private string $razao_social = "", private string $bairro = "", 
        private string $logradouro = "", private string $nome_fantasia = ""){}
		
		public function getId_empresa()
		{
			return $this->id_empresa;
		}
		public function getRazao()
		{
			return $this->razao_social;
		}
        public function getBairro()
		{
			return $this->bairro;
		}
        public function getLogradouro()
		{
			return $this->logradouro;
		}
        public function getNomefantasia()
		{
			return $this->nome_fantasia;
		}
	}
    

?>