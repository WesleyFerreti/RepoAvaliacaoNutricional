<?php
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Paciente.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class CorPele {
	/**
	 * @AttributeType string
	 */
	private $_cor;
	/**
	 * @AttributeType string
	 */
	private $_descricao;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Paciente
	 * @AssociationMultiplicity 0..*
	 */
	public $_tem = array();

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
	public function Visualizar() {
		// Not yet implemented
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
	 * @return string
	 * @ReturnType string
	 */
	public function getCor() {
		return $this->_cor;
	}

	/**
	 * @access public
	 * @param string aCor
	 * @return void
	 * @ParamType aCor string
	 * @ReturnType void
	 */
	public function setCor($aCor) {
		$this->_cor = $aCor;
	}
}
?>