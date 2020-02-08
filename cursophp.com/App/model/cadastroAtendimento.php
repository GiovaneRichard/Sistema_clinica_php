<?php
	include('conexao.php');

	//recebe os campos do formulário
	$nome = $_REQUEST['nome_cliente'];
	$data = $_POST['data'];	
	$procedimento = $_POST['procedimento'];
	$atendimento = $_POST['nro_atendimento'];

	// converte a data no formato do BD
	$data = explode(" ", $data);
	list($date, $hora) = $data;
	$data_sem_barra = array_reverse(explode("/", $date));
	$data_sem_barra = implode("-", $data_sem_barra);

	$data_sem_barra = $data_sem_barra . " " . $hora;

	// salvando no BD
	//$query = "INSERT INTO atendimento(id_cliente, data_atendimento, id_procedimento, nro_atendimento,) VALUES();"
echo $procedimento;