<?php
 
class Pessoa {
	public$nome;
	public $email;
	public $telefone;
	public $endereco;
	public $dataNasc;
	 public function __construct($nome, $email, $telefone, $endereco, $dataNasc) {
	 	require_once ('PessoaDAO.php');
    $this->$nome = $nome;
    $this->$email = $email;
    $this->$telefone = $telefone;
    $this->$endereco = $endereco;    
    $this->$dataNasc = $dataNasc;
  	}
  	
  	public function __set($atrib, $value){
          $this->$atrib = $value;
      }
  
      public function __get($atrib){
          return $this->$atrib;
      }

	public function inserir ($nome, $email, $telefone, $endereco, $data){
			
			$pessoaDao = new PessoaDAO();
			$pessoaDao->inserir($nome, $email, $telefone, $endereco, $data);
	
	}
	public function listaPessoas(){
		require_once ('PessoaDAO.php');
		$pessoaDao = new PessoaDAO();

		$lista = $pessoaDao->lista();
		return $lista;
	}

	
}