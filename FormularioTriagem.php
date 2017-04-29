<?php
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Paciente.php');
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/GravidadeDoenca.php');
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Nutricionista.php');

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
	private $_faixaEtaria;
	/**
	 * @AttributeType boolean
	 */
	private $_inativo;
	/**
	 * @AttributeType string
	 */
	private $_nome;
	/**
	 * @AttributeType string
	 */
	private $_dataCriacao;
	/**
	 * @AttributeType string
	 */
	private $_descricao;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Paciente
	 * @AssociationMultiplicity 1..*
	 */
	public $_possui = array();
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.GravidadeDoenca
	 * @AssociationMultiplicity 1..*
	 */
	public $_compoe = array();
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Nutricionista
	 * @AssociationMultiplicity 1
	 */
	public $_pertence;

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
	 * @return boolean
	 * @ReturnType boolean
	 */
	public function getInativo() {
		return $this->_inativo;
	}

	/**
	 * @access public
	 * @param boolean aInativo
	 * @return void
	 * @ParamType aInativo boolean
	 * @ReturnType void
	 */
	public function setInativo($aInativo) {
		$this->_inativo = $aInativo;
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
	public function getDataCriacao() {
		return $this->_dataCriacao;
	}

	/**
	 * @access public
	 * @param string aDataCriacao
	 * @return void
	 * @ParamType aDataCriacao string
	 * @ReturnType void
	 */
	public function setDataCriacao($aDataCriacao) {
		$this->_dataCriacao = $aDataCriacao;
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
}
?>