<?php
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Paciente.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class CorPele {
	/**
	 * @AttributeType string
	 */
        public $cor;
	/**
	 * @AttributeType string
	 */
        public $descricao;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Paciente
	 * @AssociationMultiplicity 0..*
	 */
	//public $tem = array();

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
	public function Visualizar() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param string descricao
	 * @return void
	 * @ParamType descricao string
	 * @ReturnType void
	 */
	public function setDescricao($descricao) {
		$this->descricao = $descricao;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getDescricao() {
		return $this->descricao;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getCor() {
		return $this->cor;
	}

	/**
	 * @access public
	 * @param string cor
	 * @return void
	 * @ParamType cor string
	 * @ReturnType void
	 */
	public function setCor($cor) {
		$this->cor = $cor;
	}
}
?>