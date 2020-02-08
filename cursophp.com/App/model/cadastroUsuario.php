<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "SELECT count(*) as total from usuario WHERE email = '$email'";


$result = mysqli_query($conexao, $sql);

$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
	$_SESSION['usuario_existe'] = true;
	header('Location: ../views/cadUsuario.php');
	exit();
}

$sql = "INSERT INTO usuario(nome, email, senha, dataCadastro) VALUES('$nome', '$email', '$senha', NOW())";
?>


<!DOCTYPE html>
<html>
<head>
	<title>cadastro de usuários</title>
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
	        <h5 class="modal-title" id="exampleModalLabel">Usuário cadastrado com sucesso!</h5>
	      </div>
	      <div class="modal-body">
	        <table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">Nome</th>
			      <th scope="col">Email:</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td ><?php echo $nome ?></td>
			      <td><?php echo $email ?></td>
			    </tr>
			    <tr>
			  </tbody>
			</table>
	      </div>
	      <div class="modal-footer">
	        <a href="../../App/views/cadUsuario.php"><button type="button" class="btn btn-success">OK</button></a>
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
	        <h5 class="modal-title" id="exampleModalLabel">Erro ao cadastrar o usuário!</h5>
	      </div>
	      <div class="modal-body">
	        <table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">Nome</th>
			      <th scope="col">Email:</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td ><?php echo $nome ?></td>
			      <td><?php echo $email ?></td>
			    </tr>
			    <tr>
			  </tbody>
			</table>
	      </div>
	      <div class="modal-footer">
	        <a href="../../App/views/cadUsuario.php"><button type="button" class="btn btn-danger">OK</button></a>
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