<?php
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Refeicao.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class Suplementacao {
	/**
	 * @AttributeType string
	 */
	public $nomeSuplemento;
	/**
	 * @AttributeType string
	 */
	public $sabor;
	/**
	 * @AttributeType string
	 */
	public $quantidade;
	/**
	 * @AttributeType string
	 */
	public $descricao;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Refeicao
	 * @AssociationMultiplicity 1..*
	 */
	//public $possui = array();

	/**
	 * @access public
	 */
	public function Incluir() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Alterar() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Remover() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Consultar() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getNomeSuplemento() {
		return $this->nomeSuplemento;
	}

	/**
	 * @access public
	 * @param string nomeSuplemento
	 * @return void
	 * @ParamType nomeSuplemento string
	 * @ReturnType void
	 */
	public function setNomeSuplemento($nomeSuplemento) {
		$this->nomeSuplemento = $nomeSuplemento;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getSabor() {
		return $this->sabor;
	}

	/**
	 * @access public
	 * @param string sabor
	 * @return void
	 * @ParamType sabor string
	 * @ReturnType void
	 */
	public function setSabor($sabor) {
		$this->sabor = $sabor;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getQuantidade() {
		return $this->quantidade;
	}

	/**
	 * @access public
	 * @param string quantidade
	 * @return void
	 * @ParamType quantidade string
	 * @ReturnType void
	 */
	public function setQuantidade($quantidade) {
		$this->quantidade = $quantidade;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getDescricao() {
		return $this->descricao;
	}

	/**
	 * @access public
	 * @param string descricao
	 * @return void
	 * @ParamType descricao string
	 * @ReturnType void
	 */
	public function setDescricao($descricao) {
		$this->descricao = $descricao;
	}
}
?>