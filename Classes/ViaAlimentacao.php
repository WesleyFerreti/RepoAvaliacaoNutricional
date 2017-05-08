<?php
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/PrescricaoDietetica.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class ViaAlimentacao {
	/**
	 * @AttributeType string
	 */
	public $tipoVia;
	/**
	 * @AttributeType string
	 */
	public $descricao;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.PrescricaoDietetica
	 * @AssociationMultiplicity 1..*
	 */
	//public $tem = array();

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
	public function getTipoVia() {
		return $this->tipoVia;
	}

	/**
	 * @access public
	 * @param string tipoVia
	 * @return void
	 * @ParamType tipoVia string
	 * @ReturnType void
	 */
	public function setTipoVia($tipoVia) {
		$this->tipoVia = $tipoVia;
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