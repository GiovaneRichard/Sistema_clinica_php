<?php

namespace App\model

class Cliente{

	private $id;
	private $nome;
	private $cpf;
	private $idade;
	private $endereco;
	private $email;
	private $telefone;


	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id =$id;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome =$nome;
	}

	public function getCpf(){
		return $this->cpf;
	}

	public function setCpf($cpf){
		$this->cpf =$cpf;
	}

	public function getIdade(){
		return $this->idade;
	}

	public function setIdade($idade){
		$this->idade =$idade;
	}

	public function getEndereco(){
		return $this->endereco;
	}

	public function setEndereco($endereco){
		$this->endereco =$endereco;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email =$email;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setTelefone($telefone){
		$this->telefone =$telefone;
	}

}// fim da class
