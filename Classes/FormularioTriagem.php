<?php
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Paciente.php');
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/GravidadeDoenca.php');
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Nutricionista.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class FormularioTriagem {
	/**
	 * @AttributeType int
	 * Idoso 1; Adulto 2; Crian�a 3; Homem 4; mulher 5;
	 */
	public $faixaEtaria;
	/**
	 * @AttributeType boolean
	 */
	public $inativo;
	/**
	 * @AttributeType string
	 */
	public $nome;
	/**
	 * @AttributeType string
	 */
	public $dataCriacao;
	/**
	 * @AttributeType string
	 */
	public $descricao;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Paciente
	 * @AssociationMultiplicity 1..*
	 */
	//public $possui = array();
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.GravidadeDoenca
	 * @AssociationMultiplicity 1..*
	 */
	//public $compoe = array();
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Nutricionista
	 * @AssociationMultiplicity 1
	 */
	//public $pertence;

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
	public function CalcularNivelAssistencia() {
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
		return $this->faixaEtaria;
	}

	/**
	 * @access public
	 * @param int faixaEtaria
	 * @return void
	 * @ParamType faixaEtaria int
	 * @ReturnType void
	 */
	public function setFaixaEtaria($faixaEtaria) {
		$this->faixaEtaria = $faixaEtaria;
	}

	/**
	 * @access public
	 * @return boolean
	 * @ReturnType boolean
	 */
	public function getInativo() {
		return $this->inativo;
	}

	/**
	 * @access public
	 * @param boolean inativo
	 * @return void
	 * @ParamType inativo boolean
	 * @ReturnType void
	 */
	public function setInativo($inativo) {
		$this->inativo = $inativo;
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
	public function getDataCriacao() {
		return $this->dataCriacao;
	}

	/**
	 * @access public
	 * @param string dataCriacao
	 * @return void
	 * @ParamType dataCriacao string
	 * @ReturnType void
	 */
	public function setDataCriacao($dataCriacao) {
		$this->dataCriacao = $dataCriacao;
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
}
?>