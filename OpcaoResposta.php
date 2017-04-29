<?php
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Pergunta.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class OpcaoResposta {
	private $_resposta;
	private $_pontuacao;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Pergunta
	 * @AssociationMultiplicity 1
	 */
	public $_possui;

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
	public function CalcularClassificacao() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function CalcularNivelAssistencia() {
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

	/**
	 * @access public
	 */
	public function getPontuacao() {
		return $this->_pontuacao;
	}

	/**
	 * @access public
	 * @param aPontuacao
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setPontuacao($aPontuacao) {
		$this->_pontuacao = $aPontuacao;
	}
}
?>