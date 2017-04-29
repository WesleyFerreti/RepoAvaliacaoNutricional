<?php
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/PrescricaoDietetica.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class Refeicao {
	/**
	 * @AttributeType string
	 */
	private $_refeicao;
	/**
	 * @AttributeType string
	 */
	private $_descricao;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.PrescricaoDietetica
	 * @AssociationMultiplicity 1..*
	 */
	public $_possui = array();

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
	 * @param aRefeicao
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setRefeicao($aRefeicao) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getDescricao() {
		return $this->_descricao;
	}

	/**
	 * @access public
	 * @param string aDescricao
	 * @return void
	 * @ParamType aDescricao string
	 * @ReturnType void
	 */
	public function setDescricao($aDescricao) {
		$this->_descricao = $aDescricao;
	}
}
?>