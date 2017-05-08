<?php
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Nutricionista.php');
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Endereco.php');
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Pessoa.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class Paciente extends Pessoa {
	/**
	 * @AttributeType boolean
	 */
	public $inativo;
	/**
	 * @AttributeType boolean
	 */
	public $arquivado;
	/**
	 * @AttributeType string
	 */
	public $diagnostico;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Nutricionista
	 * @AssociationMultiplicity 1..*
	 */
	//public $tem = array();
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Endereco
	 * @AssociationMultiplicity 1..*
	 */
	//public $possui = array();

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
	 * @return boolean
	 * @ReturnType boolean
	 */
	public function getArquivado() {
		return $this->arquivado;
	}

	/**
	 * @access public
	 * @param boolean arquivado
	 * @return void
	 * @ParamType arquivado boolean
	 * @ReturnType void
	 */
	public function setArquivado($arquivado) {
		$this->arquivado = $arquivado;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getDiagnostico() {
		return $this->diagnostico;
	}

	/**
	 * @access public
	 * @param string diagnostico
	 * @return void
	 * @ParamType diagnostico string
	 * @ReturnType void
	 */
	public function setDiagnostico($diagnostico) {
		$this->diagnostico = $diagnostico;
	}
}
?>