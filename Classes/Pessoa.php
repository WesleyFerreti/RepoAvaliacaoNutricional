<?php
/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
abstract class Pessoa{
	/**
	 * @AttributeType string
	 */
	protected $email;
	/**
	 * @AttributeType string
	 */
	protected $CPF;
	/**
	 * @AttributeType boolean
	 */
	protected $sexo;
	/**
	 * @AttributeType string
	 */
	protected $telefoneFixo;
	/**
	 * @AttributeType string
	 */
	protected $dataNasc;
	/**
	 * @AttributeType string
	 */
	protected $telefoneCelular;
	/**
	 * @AttributeType string
	 */
	protected $nome;

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
		return $this->nome;
	}

	/**
	 * @access public
	 * @param string nome
	 * @return void
	 * @ParamType nome string
	 * @ReturnType void
	 */
	public function setNome($nome) {
		$this->nome = $nome;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getTelefoneFixo() {
		return $this->telefoneFixo;
	}

	/**
	 * @access public
	 * @param string telefoneFixo
	 * @return void
	 * @ParamType telefoneFixo string
	 * @ReturnType void
	 */
	public function setTelefoneFixo($telefoneFixo) {
		$this->telefoneFixo = $telefoneFixo;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getTelefoneCelular() {
		return $this->telefoneCelular;
	}

	/**
	 * @access public
	 * @param string telefoneCelular
	 * @return void
	 * @ParamType telefoneCelular string
	 * @ReturnType void
	 */
	public function setTelefoneCelular($telefoneCelular) {
		$this->telefoneCelular = $telefoneCelular;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getCPF() {
		return $this->CPF;
	}

	/**
	 * @access public
	 * @param string CPF
	 * @return void
	 * @ParamType CPF string
	 * @ReturnType void
	 */
	public function setCPF($CPF) {
		$this->CPF = $CPF;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * @access public
	 * @param string email
	 * @return void
	 * @ParamType email string
	 * @ReturnType void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * @access public
	 * @return boolean
	 * @ReturnType boolean
	 */
	public function getSexo() {
		return $this->sexo;
	}

	/**
	 * @access public
	 * @param boolean sexo
	 * @return void
	 * @ParamType sexo boolean
	 * @ReturnType void
	 */
	public function setSexo($sexo) {
		$this->sexo = $sexo;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getDataNasc() {
		return $this->dataNasc;
	}

	/**
	 * @access public
	 * @param string dataNasc
	 * @return void
	 * @ParamType dataNasc string
	 * @ReturnType void
	 */
	public function setDataNasc($dataNasc) {
		$this->dataNasc = $dataNasc;
	}
}
?>