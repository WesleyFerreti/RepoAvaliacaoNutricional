<?php
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Refeicao.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class Adequacao {
	/**
	 * @AttributeType string
	 */
	private $_alimento;
	/**
	 * @AttributeType string
	 */
	private $_descricao;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Refeicao
	 * @AssociationMultiplicity 1..*
	 */
	public $_possui = array();

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
	public function getAlimento() {
		return $this->_alimento;
	}

	/**
	 * @access public
	 * @param string aAlimento
	 * @return void
	 * @ParamType aAlimento string
	 * @ReturnType void
	 */
	public function setAlimento($aAlimento) {
		$this->_alimento = $aAlimento;
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