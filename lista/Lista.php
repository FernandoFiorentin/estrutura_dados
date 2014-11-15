<?php
include_once "NodoLista.php";

class Lista{

	private $head;

	public function __construct(){
		$this->head = null;
	}

	public function insereApos($valor){
		$novoNodo = new NodoLista($valor);
		if($this->head){
			$nodoAtual = $this->head;
			while($nodoAtual->getProximo()){
				$nodoAtual = $nodoAtual->getProximo();
			}	
			$nodoAtual->setProximo($novoNodo);
		}else{
			$this->head = $novoNodo;
		}
		
	}
	
	//somente para teste
	public function toString(){
		$result = '';
		if($this->head){
			$nodoAtual = $this->head;
			while($nodoAtual->getProximo()){
				$result .= $nodoAtual->getValor().' -> ';
				$nodoAtual = $nodoAtual->getProximo();
			}
			$result .= $nodoAtual->getValor().' -> ';
		}
		return $result;
	}
}
?>