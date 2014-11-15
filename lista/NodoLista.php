<?php
class NodoLista{
	private $valor;
	private $proximo;

	public function __construct($valor = null, NodoLista $proximo = null){
		$this->valor = $valor;
		$this->proximo = $proximo;
	}	

	public function getValor(){
		return $this->valor;
	}

	public function setValor($valor){
		$this->valor = $valor;
	}

	public function getProximo(){
		return $this->proximo;
	}

	public function setProximo(NodoLista $nodoLista){
		$this->proximo = $nodoLista;
	}
}
?>