<?php
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Paciente.php');
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Nutricionista.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class OrientacoesNutricionais {
	/**
	 * @AttributeType string
	 */
	public $nome;
	/**
	 * @AttributeType string
	 */
	public $orientacao;
	/**
	 * @AttributeType string
	 */
	public $data;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Paciente
	 * @AssociationMultiplicity 1..*
	 */
	//public $possui = array();
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Nutricionista
	 * @AssociationMultiplicity 1
	 */
	//public $faz;

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
	public function getOrientacao() {
		return $this->orientacao;
	}

	/**
	 * @access public
	 * @param string orientacao
	 * @return void
	 * @ParamType orientacao string
	 * @ReturnType void
	 */
	public function setOrientacao($orientacao) {
		$this->orientacao = $orientacao;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getData() {
		return $this->data;
	}

	/**
	 * @access public
	 * @param string data
	 * @return void
	 * @ParamType data string
	 * @ReturnType void
	 */
	public function setData($data) {
		$this->data = $data;
	}
}
?>