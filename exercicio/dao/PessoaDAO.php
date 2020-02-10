<?php

class PessoaDAO  {
	
	public function __construct(){
		require_once('Conexao.php');
	}

	public function inserir ($nome, $email, $telefone, $endereco, $data){

		try{

		$pdo = Conexao::getConexao();
			
		$res = $pdo->prepare("INSERT INTO tb_pessoa (nome, email, telefone, endereco, data_nasc)
			VALUES (:nome, :email, :telefone, :endereco, :data)");
		$res->bindparam(":nome", $nome);
		$res->bindparam(":email", $email);
		$res->bindparam(":telefone", $telefone);
		$res->bindparam(":endereco", $endereco);
		$res->bindparam(":data", $data);
		$res->execute();
		
	}	
	catch(Exception $e){
		echo $e->getMessage();

	}		
		
	}
	public function lista(){
		$pdo = Conexao::getConexao();
			
		$res = $pdo->prepare("SELECT * FROM tb_pessoa");
		 $res->execute();
		 $lista = $res->fetchAll();
		return $lista;
	}

	public function excluir($idCliente){
		try{
			$pdo = Conexao::getConexao();
			$res = $pdo->prepare("DELETE * from tb_pessoa WHERE id_pessoa = :id");
			$res->bindparam(":id", $idCliente);
			$res->execute();
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function alterar ($idPessoa,$nome, $email, $telefone, $endereco, $data){

		try{

		$pdo = Conexao::getConexao();
			
		$res = $pdo->prepare("UPDATE tb_pessoa set nome = :nome, email= :email, telefone= :email, endereco=:endereco , data_nasc= :data WHERE id_pessoa = :id");
		$res->bindparam(":id", $idPessoa);
		$res->bindparam(":nome", $nome);
		$res->bindparam(":email", $email);
		$res->bindparam(":telefone", $telefone);
		$res->bindparam(":endereco", $endereco);
		$res->bindparam(":data", $data);
		$res->execute();
		
	}	
	catch(Exception $e){
		echo $e->getMessage();

	}		
		
	}
}