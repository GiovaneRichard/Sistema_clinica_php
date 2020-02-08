<?php
	session_start();
	include("conexao.php");

$query = 'SELECT id, title, color, inicio, fim FROM eventos';

$result = mysqli_query($conexao, $query);

$result->execute();

$eventos = [];

while ($row = mysqli_fetch_assoc($result)) {
	$id = $row['id'];
	$title = $row['title'];
	$color = $row['color'];
	$inicio = $row['inicio'];
	$fim = $row['fim'];

	$eventos[] = [
		'id' => $id,
		'title' => $title,
		'color' => $color,
		'inicio' => $inicio,
		'fim' => $fim
	];
}
echo jason_encode($eventos);

?>