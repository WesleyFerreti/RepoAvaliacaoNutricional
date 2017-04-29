<?php
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/AvaliacaoAntropometrica.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class MembroAputado {
	/**
	 * @AttributeType string
	 */
	private $_nome;
	/**
	 * @AttributeType double
	 */
	private $_percentual;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.AvaliacaoAntropometrica
	 * @AssociationMultiplicity 1..*
	 */
	public $_compoe = array();

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
	public function getNome() {
		return $this->_nome;
	}

	/**
	 * @access public
	 * @param string aNome
	 * @return void
	 * @ParamType aNome string
	 * @ReturnType void
	 */
	public function setNome($aNome) {
		$this->_nome = $aNome;
	}

	/**
	 * @access public
	 * @return double
	 * @ReturnType double
	 */
	public function getPercentual() {
		return $this->_percentual;
	}

	/**
	 * @access public
	 * @param double aPercentual
	 * @return void
	 * @ParamType aPercentual double
	 * @ReturnType void
	 */
	public function setPercentual($aPercentual) {
		$this->_percentual = $aPercentual;
	}
}
?>