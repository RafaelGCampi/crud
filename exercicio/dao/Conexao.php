<?php

class Conexao{
	public $pdo;
	public function getConexao(){
		
		try {
		 $pdo = new PDO("mysql:dbname=cadastro; host=localhost", "root","");
		 return $pdo;
		} catch (PDOException $e) {
			echo "Erro com banco de dados ".$e->getMessage();
			return false;
		}
		catch(Exception $e)
		{
		echo "Erro generico ".$e->getMessage();
		return false;
		}

		}
	}
	

?>