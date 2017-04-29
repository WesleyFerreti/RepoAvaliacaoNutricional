<?php
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Nutricionista.php');
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Endereco.php');
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Pessoa.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class Paciente extends Pessoa {
	/**
	 * @AttributeType boolean
	 */
	private $_inativo;
	/**
	 * @AttributeType boolean
	 */
	private $_arquivado;
	/**
	 * @AttributeType string
	 */
	private $_diagnostico;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Nutricionista
	 * @AssociationMultiplicity 1..*
	 */
	public $_tem = array();
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Endereco
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
	public function Localizar() {
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
	public function Arquivar() {
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
	 */
	public function Transferir() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Paciente() {
		// Not yet implemented
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
	 * @return boolean
	 * @ReturnType boolean
	 */
	public function getArquivado() {
		return $this->_arquivado;
	}

	/**
	 * @access public
	 * @param boolean aArquivado
	 * @return void
	 * @ParamType aArquivado boolean
	 * @ReturnType void
	 */
	public function setArquivado($aArquivado) {
		$this->_arquivado = $aArquivado;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getDiagnostico() {
		return $this->_diagnostico;
	}

	/**
	 * @access public
	 * @param string aDiagnostico
	 * @return void
	 * @ParamType aDiagnostico string
	 * @ReturnType void
	 */
	public function setDiagnostico($aDiagnostico) {
		$this->_diagnostico = $aDiagnostico;
	}
}
?>