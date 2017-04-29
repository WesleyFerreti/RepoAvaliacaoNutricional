<?php
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/FormularioTriagem.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class NivelAssistencia {
	/**
	 * @AttributeType string
	 */
	private $_nome;
	/**
	 * @AttributeType string
	 */
	private $_descricao;
	/**
	 * @AttributeType double
	 */
	private $_pontuacao;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.FormularioTriagem
	 * @AssociationMultiplicity 1
	 */
	public $_compoe;

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
	public function getDescricao() {
		return $this->_descricao;
	}

	/**
	 * @access public
	 * @param string aDescricao
	 * @return void
	 * @ParamType aDescricao string
	 * @ReturnType void
	 */
	public function setDescricao($aDescricao) {
		$this->_descricao = $aDescricao;
	}

	/**
	 * @access public
	 * @return double
	 * @ReturnType double
	 */
	public function getPontuacao() {
		return $this->_pontuacao;
	}

	/**
	 * @access public
	 * @param double aPontuacao
	 * @return void
	 * @ParamType aPontuacao double
	 * @ReturnType void
	 */
	public function setPontuacao($aPontuacao) {
		$this->_pontuacao = $aPontuacao;
	}
}
?>