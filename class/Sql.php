<?php

class Sql extends PDO
{
	private $conn;

	//Inicia a classe com a conexao
	function __construct()
	{
		$this->conn = new PDO("mysql:host=localhost;dbname=cursophp7", "root", "");
	}

	//Método para setar os parametros da query
	private function setParams($statment, $parameters = array()){

		//Percorre o array de paramentros e set no bindParam
		foreach ($parameters as $key => $value) {
			$this->setParam($statment, $key, $value);
		}

	}

	//Seta um parametro no bindParam
	private function setParam($statment, $key, $value){

		$statment->bindParam($key, $value);

	}

	//Método que executa a query
	public function query($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$result = $stmt->execute();

		return $stmt;


	}

	//Método que retorna todos os dados da consulta
	public function select($rawQuery, $params = array()):array{
	
		$stmt = $this->query($rawQuery, $params);
		
		return $stmt->fetchAll(PDO::FETCH_OBJ);


	}

	//Método que atualizada um registro do banco
	public function update($rawQuery, $params = array()):int{

		$stmt = $this->query($rawQuery, $params);

		return $stmt->rowCount();

	}
}

?>