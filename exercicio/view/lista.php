<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Lista</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css"  />
</head>
<body>


<?php
 	require_once '../dao/Pessoa.php';
	$lista = array();
	$lista = Pessoa::listaPessoas();
?>

	<table class="tabela">
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Ação</th>
		</tr>
		<?php foreach ($lista as $item){?>
		<tr>
			<td><?= $item['id_pessoa']?> </td>
			<td>
				<?= $item['nome'] ?>
			</td>
			<td>
				<?= $item['email'] ?>
			</td>
			<td><a href="?alterar=<?= $item['id_pessoa']?>">Alterar</a></td>
			<td><a href="?excluir=<?= $item['id_pessoa']?>">Excluir</a></td>
		</tr>
	<?php } ?>
	</table>


<?php
require_once '../dao/Pessoa.php';
function excluir($id)
{
	Pessoa::excluir($id);
	echo "Excluir".$id;
}

if (isset($_GET['excluir'])){
	$id = $_GET['excluir'];
	excluir($id);
}
else if (isset($_GET['alterar']))
{
	$id = $_GET['alterar'];
	echo"Alterar".$id;
}
?>


</body>
</html>