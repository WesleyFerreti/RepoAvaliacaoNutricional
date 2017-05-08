<?php
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/PrescricaoDietetica.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class Refeicao {
	/**
	 * @AttributeType string
	 */
	public $refeicao;
	/**
	 * @AttributeType string
	 */
	public $descricao;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.PrescricaoDietetica
	 * @AssociationMultiplicity 1..*
	 */
	//public $possui = array();

	/**
	 * @access public
	 */
	public function Alterar() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Incluir() {
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
	 */
	public function getRefeicao() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param refeicao
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setRefeicao($refeicao) {
		// Not yet implemented
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