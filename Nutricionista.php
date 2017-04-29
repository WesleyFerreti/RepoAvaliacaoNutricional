<?php
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/FormularioTriagem.php');
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Paciente.php');
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/OrientacoesNutricionais.php');
require_once('Pessoa.php');
require_once('conexaoDB.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class Nutricionista extends Pessoa {
    
	/**
	 * @AttributeType string
	 */
	private $_cRN;
	/**
	 * @AttributeType boolean
	 */
	private $_coordenador;
	/**
	 * @AttributeType string
	 */
	private $_senha;
	/**
	 * @AttributeType boolean
	 */
	private $_inativo;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.FormularioTriagem
	 * @AssociationMultiplicity 0..*
	 */
	public $_pertence = array();
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Paciente
	 * @AssociationMultiplicity 1..*
	 */
	public $_tem = array();
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.OrientacoesNutricionais
	 * @AssociationMultiplicity 0..*
	 */
	public $_faz = array();

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
	public function Visualizar($db) {
		// Not yet implemented
        $array = $db->Query("SELECT * FROM `nutricionista`");
        print_r($array);
	}

	/**
	 * @access public
	 */
	public function Inativar() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Login() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Nutricionista() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getCRN() {
		return $this->_cRN;
	}

	/**
	 * @access public
	 * @param string aCRN
	 * @return void
	 * @ParamType aCRN string
	 * @ReturnType void
	 */
	public function setCRN($aCRN) {
		$this->_cRN = $aCRN;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getSenha() {
		return $this->_senha;
	}

	/**
	 * @access public
	 * @param string aSenha
	 * @return void
	 * @ParamType aSenha string
	 * @ReturnType void
	 */
	public function setSenha($aSenha) {
		$this->_senha = $aSenha;
	}

	/**
	 * @access public
	 * @return boolean
	 * @ReturnType boolean
	 */
	public function getCoordenador() {
		return $this->_coordenador;
	}

	/**
	 * @access public
	 * @param boolean aCoordenador
	 * @return void
	 * @ParamType aCoordenador boolean
	 * @ReturnType void
	 */
	public function setCoordenador($aCoordenador) {
		$this->_coordenador = $aCoordenador;
	}

	/**
	 * @access public
	 * @return boolean
	 * @ReturnType boolean
	 */
	public function getInativo() {
		return $this->_inativo;
	}

	/**
	 * @access public
	 * @param boolean aInativo
	 * @return void
	 * @ParamType aInativo boolean
	 * @ReturnType void
	 */
	public function setInativo($aInativo) {
		$this->_inativo = $aInativo;
	}
}
?>