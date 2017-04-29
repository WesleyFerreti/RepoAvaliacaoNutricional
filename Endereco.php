<?php
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Paciente.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class Endereco {
	/**
	 * @AttributeType string
	 */
	private $_rua;
	/**
	 * @AttributeType string
	 */
	private $_cEP;
	/**
	 * @AttributeType int
	 */
	private $_numero;
	/**
	 * @AttributeType string
	 */
	private $_complemento;
	/**
	 * @AttributeType string
	 */
	private $_cidade;
	/**
	 * @AttributeType string
	 */
	private $_bairro;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Paciente
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
	public function Consultar() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Endereco() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getRua() {
		return $this->_rua;
	}

	/**
	 * @access public
	 * @param string aRua
	 * @return void
	 * @ParamType aRua string
	 * @ReturnType void
	 */
	public function setRua($aRua) {
		$this->_rua = $aRua;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getCEP() {
		return $this->_cEP;
	}

	/**
	 * @access public
	 * @param string aCEP
	 * @return void
	 * @ParamType aCEP string
	 * @ReturnType void
	 */
	public function setCEP($aCEP) {
		$this->_cEP = $aCEP;
	}

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getNumero() {
		return $this->_numero;
	}

	/**
	 * @access public
	 * @param int aNumero
	 * @return void
	 * @ParamType aNumero int
	 * @ReturnType void
	 */
	public function setNumero($aNumero) {
		$this->_numero = $aNumero;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getComplemento() {
		return $this->_complemento;
	}

	/**
	 * @access public
	 * @param string aComplemento
	 * @return void
	 * @ParamType aComplemento string
	 * @ReturnType void
	 */
	public function setComplemento($aComplemento) {
		$this->_complemento = $aComplemento;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getCidade() {
		return $this->_cidade;
	}

	/**
	 * @access public
	 * @param string aCidade
	 * @return void
	 * @ParamType aCidade string
	 * @ReturnType void
	 */
	public function setCidade($aCidade) {
		$this->_cidade = $aCidade;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getBairro() {
		return $this->_bairro;
	}

	/**
	 * @access public
	 * @param string aBairro
	 * @return void
	 * @ParamType aBairro string
	 * @ReturnType void
	 */
	public function setBairro($aBairro) {
		$this->_bairro = $aBairro;
	}
}
?>