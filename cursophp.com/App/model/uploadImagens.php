<?php
	include('conexao.php');

	$msg = false;
	if(isset($_FILES['arquivo'])){
		$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
		$novo_nome = md5(time()) . $extensao;
		$diretorio = "../../upload/"; // define o diretório para onde será enviado o arquivo

		// efetua o upload
		move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

		$sql = "INSERT INTO arquivo(arquivo, dataArquivo) VALUES('$novo_nome', NOW())";

		// Valida se a consulta foi realizada com sucesso
		if($conexao->query($sql)){
			$_SESSION['status_arquivo'] = true;
			$msg = "Arquivo enviado com sucesso!";
		}

	}

	// encerra a conexão
	$conexao->close();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clínica de Estética</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../../css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
	<h1>Carregamento de Imagns</h1>
	<?php 
		session_start();
		if($msg != false) echo "<p>$msg</p>";

	?>
	<div class="principal">
		<form action="uploadImagens.php" method="POST" enctype="multipart/form-data">
			<div class="field">
			  <div class="file is-centered is-boxed is-success has-name">
			    <label class="file-label">
			      <input class="file-input" type="file" name="arquivo">
			      <span class="file-cta">
			        <span class="file-icon">
			          <i class="fas fa-upload"></i>
			        </span>
			        <span class="file-label">
			          Carregar imagem
			        </span>
			      </span>
			      
			    </label>
			  </div>
			</div>
		</form>
	</div>

</body>
</html>