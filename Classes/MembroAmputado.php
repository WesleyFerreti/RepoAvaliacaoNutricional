<?php
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/AvaliacaoAntropometrica.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class MembroAmputado {
	/**
	 * @AttributeType string
	 */
	public $nome;
	/**
	 * @AttributeType double
	 */
	public $percentual;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.AvaliacaoAntropometrica
	 * @AssociationMultiplicity 1..*
	 */
	//public $compoe = array();

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
	 * @return double
	 * @ReturnType double
	 */
	public function getPercentual() {
		return $this->percentual;
	}

	/**
	 * @access public
	 * @param double percentual
	 * @return void
	 * @ParamType percentual double
	 * @ReturnType void
	 */
	public function setPercentual($percentual) {
		$this->percentual = $percentual;
	}
}
?>