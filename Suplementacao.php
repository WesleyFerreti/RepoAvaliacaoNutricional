<?php
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Refeicao.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class Suplementacao {
	/**
	 * @AttributeType string
	 */
	private $_nomeSuplemento;
	/**
	 * @AttributeType string
	 */
	private $_sabor;
	/**
	 * @AttributeType string
	 */
	private $_quantidade;
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
	public function getNomeSuplemento() {
		return $this->_nomeSuplemento;
	}

	/**
	 * @access public
	 * @param string aNomeSuplemento
	 * @return void
	 * @ParamType aNomeSuplemento string
	 * @ReturnType void
	 */
	public function setNomeSuplemento($aNomeSuplemento) {
		$this->_nomeSuplemento = $aNomeSuplemento;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getSabor() {
		return $this->_sabor;
	}

	/**
	 * @access public
	 * @param string aSabor
	 * @return void
	 * @ParamType aSabor string
	 * @ReturnType void
	 */
	public function setSabor($aSabor) {
		$this->_sabor = $aSabor;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getQuantidade() {
		return $this->_quantidade;
	}

	/**
	 * @access public
	 * @param string aQuantidade
	 * @return void
	 * @ParamType aQuantidade string
	 * @ReturnType void
	 */
	public function setQuantidade($aQuantidade) {
		$this->_quantidade = $aQuantidade;
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