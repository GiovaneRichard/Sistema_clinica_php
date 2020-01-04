<?php

namespace App\model;
include('conexao.php');

public function create(usuario $c){

	$query = 'INSERT INTO usuario(nome, email, senha) VALUES(?,?,?)';

	$result = mysqli_query(conexao, $query);
}