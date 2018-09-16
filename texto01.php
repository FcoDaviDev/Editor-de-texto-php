<!DOCTYPE html>
<html>
<head>
	<!-- Pega os parâmetros passados pelo formulário -->

	<?php
		//Caso não seja passado valor nenhum em "t", $txt receberá a String "Texto Generico como valor"
		$txt = isset($_GET["t"])?$_GET["t"]:"Texto Generico";
		//Caso não seja passado valor nenhum em "tam", $tam receberá a String "12pt como valor"
		$tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
		$cor = isset($_GET["cor"])?$_GET["cor"]:"#000";
	?>

	<title>Texto Gerado</title>

	<style type="text/css">
		span.texto{
			/*Os valores passados no formulário são atribuídos às propriedades font-size e color */
			font-size: <?php echo $tam; ?>;
			color: <?php echo $cor; ?>;
		}
	</style>
</head>
<body>
	<?php 
	//Escreve na tela o texto modificado pela classe "texto"
		echo "<span class='texto'>$txt</span";
	 ?>
</body>
</html>