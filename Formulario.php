<?php
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Paciente.php');
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Nutricionista.php');
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Pergunta.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class Formulario {
	/**
	 * @AttributeType int
	 * Idoso 1; Adulto 2; Criança 3; Homem 4; mulher 5;
	 */
	private $_faixaEtaria;
	/**
	 * @AttributeType byte
	 */
	private $_quantidadePerguntas;
	/**
	 * @AttributeType byte
	 */
	private $_quntidadeMaximaPerguntas = 10;
	/**
	 * @AttributeType byte
	 */
	private $_quantidadeMinimaPerguntas = 5;
	private $_percentualUtilizacao;
	private $_inativo;
	private $_nome;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Paciente
	 * @AssociationMultiplicity 1..*
	 */
	public $_possui = array();
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Nutricionista
	 * @AssociationMultiplicity 1
	 */
	public $_pertence;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Pergunta
	 * @AssociationMultiplicity 1..*
	 * @AssociationKind Composition
	 */
	public $_tem = array();

	/**
	 * @access public
	 */
	public function Criar() {
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
	public function Editar() {
		// Not yet implemented
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
	public function Utilizar() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Formulario() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getFaixaEtaria() {
		return $this->_faixaEtaria;
	}

	/**
	 * @access public
	 * @param int aFaixaEtaria
	 * @return void
	 * @ParamType aFaixaEtaria int
	 * @ReturnType void
	 */
	public function setFaixaEtaria($aFaixaEtaria) {
		$this->_faixaEtaria = $aFaixaEtaria;
	}

	/**
	 * @access public
	 * @return int
	 * @ReturnType byte
	 */
	public function getQuantidadePerguntas() {
		return $this->_quantidadePerguntas;
	}

	/**
	 * @access public
	 * @param int aQuantidadePerguntas
	 * @return void
	 * @ParamType aQuantidadePerguntas byte
	 * @ReturnType void
	 */
	public function setQuantidadePerguntas($aQuantidadePerguntas) {
		$this->_quantidadePerguntas = $aQuantidadePerguntas;
	}

	/**
	 * @access public
	 * @return int
	 * @ReturnType byte
	 */
	public function getQuntidadeMaximaPerguntas() {
		return $this->_quntidadeMaximaPerguntas;
	}

	/**
	 * @access public
	 * @param int aQuntidadeMaximaPerguntas
	 * @return void
	 * @ParamType aQuntidadeMaximaPerguntas byte
	 * @ReturnType void
	 */
	public function setQuntidadeMaximaPerguntas($aQuntidadeMaximaPerguntas) {
		$this->_quntidadeMaximaPerguntas = $aQuntidadeMaximaPerguntas;
	}

	/**
	 * @access public
	 * @return int
	 * @ReturnType byte
	 */
	public function getQuantidadeMinimaPerguntas() {
		return $this->_quantidadeMinimaPerguntas;
	}

	/**
	 * @access public
	 * @param int aQuantidadeMinimaPerguntas
	 * @return void
	 * @ParamType aQuantidadeMinimaPerguntas byte
	 * @ReturnType void
	 */
	public function setQuantidadeMinimaPerguntas($aQuantidadeMinimaPerguntas) {
		$this->_quantidadeMinimaPerguntas = $aQuantidadeMinimaPerguntas;
	}

	/**
	 * @access public
	 */
	public function getPercentualUtilizacao() {
		return $this->_percentualUtilizacao;
	}

	/**
	 * @access public
	 * @param aPercentualUtilizacao
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setPercentualUtilizacao($aPercentualUtilizacao) {
		$this->_percentualUtilizacao = $aPercentualUtilizacao;
	}

	/**
	 * @access public
	 */
	public function getInativo() {
		return $this->_inativo;
	}

	/**
	 * @access public
	 * @param aInativo
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setInativo($aInativo) {
		$this->_inativo = $aInativo;
	}

	/**
	 * @access public
	 */
	public function getNome() {
		return $this->_nome;
	}

	/**
	 * @access public
	 * @param aNome
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setNome($aNome) {
		$this->_nome = $aNome;
	}
}
?>