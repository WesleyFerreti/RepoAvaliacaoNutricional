<?php
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/PrescricaoDietetica.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class Dieta {
	/**
	 * @AttributeType string
	 */
	private $_tipoDieta;
	/**
	 * @AttributeType string
	 */
	private $_descricao;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.PrescricaoDietetica
	 * @AssociationMultiplicity 1..*
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
	public function Consultar() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getTipoDieta() {
		return $this->_tipoDieta;
	}

	/**
	 * @access public
	 * @param string aTipoDieta
	 * @return void
	 * @ParamType aTipoDieta string
	 * @ReturnType void
	 */
	public function setTipoDieta($aTipoDieta) {
		$this->_tipoDieta = $aTipoDieta;
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