<?php
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Paciente.php');
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Nutricionista.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class OrientacoesNutricionais {
	/**
	 * @AttributeType string
	 */
	private $_nome;
	/**
	 * @AttributeType string
	 */
	private $_orientacao;
	/**
	 * @AttributeType string
	 */
	private $_data;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Paciente
	 * @AssociationMultiplicity 1..*
	 */
	public $_possui = array();
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Nutricionista
	 * @AssociationMultiplicity 1
	 */
	public $_faz;

	/**
	 * @access public
	 */
	public function Incluir() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Utilizar() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Editar() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Imprimir() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function EnviarViaEmail() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function ConsultarManuais() {
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
	 * @return string
	 * @ReturnType string
	 */
	public function getOrientacao() {
		return $this->_orientacao;
	}

	/**
	 * @access public
	 * @param string aOrientacao
	 * @return void
	 * @ParamType aOrientacao string
	 * @ReturnType void
	 */
	public function setOrientacao($aOrientacao) {
		$this->_orientacao = $aOrientacao;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getData() {
		return $this->_data;
	}

	/**
	 * @access public
	 * @param string aData
	 * @return void
	 * @ParamType aData string
	 * @ReturnType void
	 */
	public function setData($aData) {
		$this->_data = $aData;
	}
}
?>