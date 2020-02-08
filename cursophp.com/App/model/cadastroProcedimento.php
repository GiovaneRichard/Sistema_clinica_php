<?php
include("conexao.php");

$nome_proce = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$duracao_proce =mysqli_real_escape_string($conexao, trim($_POST['duracao']));
$qtd_sessao =mysqli_real_escape_string($conexao, trim($_POST['nro_sessao']));
$valor =mysqli_real_escape_string($conexao, trim($_POST['valor']));
$descricao =mysqli_real_escape_string($conexao, trim($_POST['descricao']));

$sql = "INSERT INTO procedimento(nome, duracao, quantidade, valor, descricao) VALUES('$nome_proce', '$duracao_proce', '$qtd_sessao', '$valor', '$descricao')";

?>

<!DOCTYPE html>
<html>
<head>
	<title>cadastro de procedimento</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		
	<link href="../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../css/bootstrap-datetimepicker.min.css" rel="stylesheet">
</head>
<body>
	<?php if($conexao->query($sql) === true){ ?>
		
	<!-- Modal -->
	<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Procedimento cadastrado com sucesso!</h5>
	      </div>
	      <div class="modal-body">
	        <table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">Nome</th>
			      <th scope="col">Valor:</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td ><?php echo $nome_proce ?></td>
			      <td><?php echo $valor ?></td>
			    </tr>
			    <tr>
			  </tbody>
			</table>
	      </div>
	      <div class="modal-footer">
	        <a href="procedimentos.php"><button type="button" class="btn btn-success">OK</button></a>
	      </div>
	    </div>
	  </div>
	</div>

	<?php
	}else{
	?>

	<!-- Modal -->
	<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Erro ao cadastrar o procedimento!</h5>
	      </div>
	      <div class="modal-body">
	        <table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">Nome</th>
			      <th scope="col">Valor:</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td ><?php echo $nome_proce ?></td>
			      <td><?php echo $valor ?></td>
			    </tr>
			    <tr>
			  </tbody>
			</table>
	      </div>
	      <div class="modal-footer">
	        <a href="procedimentos.php"><button type="button" class="btn btn-danger">OK</button></a>
	      </div>
	    </div>
	  </div>
	</div>
	

	<?php 
	}
	?>
	

	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../../dist/js/adminlte.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#mymodal').modal('show');
	});
</script>
</body>
</html>