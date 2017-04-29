<?php
/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
abstract class Pessoa {
	/**
	 * @AttributeType string
	 */
	protected $_email;
	/**
	 * @AttributeType string
	 */
	protected $_cPF;
	/**
	 * @AttributeType boolean
	 */
	protected $_sexo;
	/**
	 * @AttributeType string
	 */
	protected $_telefoneFixo;
	/**
	 * @AttributeType string
	 */
	protected $_dataNasc;
	/**
	 * @AttributeType string
	 */
	protected $_telefoneCelular;
	/**
	 * @AttributeType string
	 */
	protected $_nome;

	/**
	 * @access private
	 */
	private function Incluir() {
		// Not yet implemented
	}

	/**
	 * @access private
	 */
	private function Alterar() {
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
	public function Pessoa() {
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
	 * @return string
	 * @ReturnType string
	 */
	public function getTelefoneFixo() {
		return $this->_telefoneFixo;
	}

	/**
	 * @access public
	 * @param string aTelefoneFixo
	 * @return void
	 * @ParamType aTelefoneFixo string
	 * @ReturnType void
	 */
	public function setTelefoneFixo($aTelefoneFixo) {
		$this->_telefoneFixo = $aTelefoneFixo;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getTelefoneCelular() {
		return $this->_telefoneCelular;
	}

	/**
	 * @access public
	 * @param string aTelefoneCelular
	 * @return void
	 * @ParamType aTelefoneCelular string
	 * @ReturnType void
	 */
	public function setTelefoneCelular($aTelefoneCelular) {
		$this->_telefoneCelular = $aTelefoneCelular;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getCPF() {
		return $this->_cPF;
	}

	/**
	 * @access public
	 * @param string aCPF
	 * @return void
	 * @ParamType aCPF string
	 * @ReturnType void
	 */
	public function setCPF($aCPF) {
		$this->_cPF = $aCPF;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getEmail() {
		return $this->_email;
	}

	/**
	 * @access public
	 * @param string aEmail
	 * @return void
	 * @ParamType aEmail string
	 * @ReturnType void
	 */
	public function setEmail($aEmail) {
		$this->_email = $aEmail;
	}

	/**
	 * @access public
	 * @return boolean
	 * @ReturnType boolean
	 */
	public function getSexo() {
		return $this->_sexo;
	}

	/**
	 * @access public
	 * @param boolean aSexo
	 * @return void
	 * @ParamType aSexo boolean
	 * @ReturnType void
	 */
	public function setSexo($aSexo) {
		$this->_sexo = $aSexo;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getDataNasc() {
		return $this->_dataNasc;
	}

	/**
	 * @access public
	 * @param string aDataNasc
	 * @return void
	 * @ParamType aDataNasc string
	 * @ReturnType void
	 */
	public function setDataNasc($aDataNasc) {
		$this->_dataNasc = $aDataNasc;
	}
}
?>