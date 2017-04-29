<?php
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Formulario.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class Resposta {
	private $_resposta;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Formulario
	 * @AssociationMultiplicity 1
	 */
	public $_tem;

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
	public function getResposta() {
		return $this->_resposta;
	}

	/**
	 * @access public
	 * @param aResposta
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setResposta($aResposta) {
		$this->_resposta = $aResposta;
	}
}
?>