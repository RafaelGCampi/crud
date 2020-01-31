<?php
	if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['telefone']) ){
		echo "Os dados devem ser preenchidos";
		return false;
	}
	else{
		echo "Cadastrado com sucesso";
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Lista</title>
</head>
<body>
<!-- O TEU CÓDIGO PHP-->

<?php
 	require_once '../dao/Pessoa.php';

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone']; 
	$endereco = $_POST['endereco'];
	$dataNasc = $_POST['data_nasc'];
	$pessoa = new Pessoa($nome, $email, $telefone, $endereco, $dataNasc);
	$pessoa->inserir($nome, $email, $telefone, $endereco, $dataNasc);	
	$lista = $pessoa->listaPessoas();
	
?>
<!-- O TEU CÓDIGO PHP-->
	

</body>
</html>
