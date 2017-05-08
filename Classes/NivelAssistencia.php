<?php
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/FormularioTriagem.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class NivelAssistencia {
	/**
	 * @AttributeType string
	 */
	public $nome;
	/**
	 * @AttributeType string
	 */
	public $descricao;
	/**
	 * @AttributeType double
	 */
	public $pontuacao;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.FormularioTriagem
	 * @AssociationMultiplicity 1
	 */
	//public $compoe;

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
	 * @return string
	 * @ReturnType string
	 */
	public function getDescricao() {
		return $this->descricao;
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
	 * @return double
	 * @ReturnType double
	 */
	public function getPontuacao() {
		return $this->pontuacao;
	}

	/**
	 * @access public
	 * @param double pontuacao
	 * @return void
	 * @ParamType pontuacao double
	 * @ReturnType void
	 */
	public function setPontuacao($pontuacao) {
		$this->pontuacao = $pontuacao;
	}
}
?>