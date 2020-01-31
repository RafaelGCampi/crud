<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Lista</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css"  />
</head>
<body>
<!-- O TEU CÓDIGO PHP-->

<?php
 	require_once '../dao/Pessoa.php';
	$lista = array();
	$lista = Pessoa::listaPessoas();
?>
<!-- O TEU CÓDIGO PHP-->
	<table class="tabela">
		<tr>

			<th>Nome</th>
			<th>Email</th>
		</tr>
		
		<tr>
			<td>
				<?php for ($i=0; $i < count($lista); $i++) {echo $lista[$i]['nome']."<br>";} ?>
			</td>
			<td>
				<?php for ($i=0; $i < count($lista); $i++) {echo $lista[$i]['email']."<br>"; }?>
			</td>
		</tr>
	</table>

</body>
</html>