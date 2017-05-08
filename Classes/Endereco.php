<?php
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Paciente.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class Endereco {
	/**
	 * @AttributeType string
	 */
	public $rua;
	/**
	 * @AttributeType string
	 */
	public $CEP;
	/**
	 * @AttributeType int
	 */
	public $numero;
	/**
	 * @AttributeType string
	 */
	public $complemento;
	/**
	 * @AttributeType string
	 */
	public $cidade;
	/**
	 * @AttributeType string
	 */
	public $bairro;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Paciente
	 * @AssociationMultiplicity 1..*
	 */
	//public $possui = array();

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
		return $this->rua;
	}

	/**
	 * @access public
	 * @param string rua
	 * @return void
	 * @ParamType rua string
	 * @ReturnType void
	 */
	public function setRua($rua) {
		$this->rua = $rua;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getCEP() {
		return $this->CEP;
	}

	/**
	 * @access public
	 * @param string CEP
	 * @return void
	 * @ParamType CEP string
	 * @ReturnType void
	 */
	public function setCEP($CEP) {
		$this->CEP = $CEP;
	}

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getNumero() {
		return $this->numero;
	}

	/**
	 * @access public
	 * @param int numero
	 * @return void
	 * @ParamType numero int
	 * @ReturnType void
	 */
	public function setNumero($numero) {
		$this->numero = $numero;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getComplemento() {
		return $this->complemento;
	}

	/**
	 * @access public
	 * @param string complemento
	 * @return void
	 * @ParamType complemento string
	 * @ReturnType void
	 */
	public function setComplemento($complemento) {
		$this->complemento = $complemento;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getCidade() {
		return $this->cidade;
	}

	/**
	 * @access public
	 * @param string cidade
	 * @return void
	 * @ParamType cidade string
	 * @ReturnType void
	 */
	public function setCidade($cidade) {
		$this->cidade = $cidade;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getBairro() {
		return $this->bairro;
	}

	/**
	 * @access public
	 * @param string bairro
	 * @return void
	 * @ParamType bairro string
	 * @ReturnType void
	 */
	public function setBairro($bairro) {
		$this->bairro = $bairro;
	}
}
?>