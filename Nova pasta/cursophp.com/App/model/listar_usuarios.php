<?php
	session_start();
	include("conexao.php");

$sql = "SELECT id, nome, email, senha FROM usuario";

$result = mysqli_query($conexao, $sql);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista de usuários</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<style type="text/css">
		body{padding: 150px}
		h1{text-align: center; padding: 50px;}
	</style>

</head>
<body>


	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Usuários Administrativos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="painel.php">Início</a></li>
              <li class="breadcrumb-item active">Usuários</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Administradores ativos do sistema</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th scope="col">Código</th>
	      		  <th scope="col">Nome</th>
	              <th scope="col">Email</th>
	              <th scope="col">Senha</th>
                </tr>
                </thead>
<?php 
	while ( $row = mysqli_fetch_assoc($result)) { 
?>
	   <tbody>
	    <tr>
	      <th><?php echo $row['id']; ?></th>
	      <td><?php echo $row['nome']; ?></td>
	      <td><?php echo $row['email']; ?></td>
	      <td><?php echo $row['senha']; ?></td>
	    </tr>
	    <tr>
	  </tbody>
<?php
}
?>
	</table>
</body>
</html>