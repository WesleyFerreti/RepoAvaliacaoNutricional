<?php
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/FormularioTriagem.php');
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/OpcaoResposta.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class Pergunta {
	private $_pergunta;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.FormularioTriagem
	 * @AssociationMultiplicity 1..*
	 */
	public $_compoe = array();
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.OpcaoResposta
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
	 */
	public function getPergunta() {
		return $this->_pergunta;
	}

	/**
	 * @access public
	 * @param aPergunta
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setPergunta($aPergunta) {
		$this->_pergunta = $aPergunta;
	}
}
?>