<?php
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Paciente.php');
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Nutricionista.php');
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Dieta.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class PrescricaoDietetica {
	/**
	 * @AttributeType string
	 */
	private $_data;
	/**
	 * @AttributeType string
	 */
	private $_metaCalorica;
	/**
	 * @AttributeType string
	 */
	private $_metaProteica;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Paciente
	 * @AssociationMultiplicity 1
	 */
	public $_possui;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Nutricionista
	 * @AssociationMultiplicity 1
	 */
	public $_faz;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Dieta
	 * @AssociationMultiplicity 1..*
	 */
	public $_tem = array();

	/**
	 * @access public
	 */
	public function Incluir() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function CalcularMetaCalorica() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function CalcularMetaProteica() {
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
	public function Visualizar() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Exportar() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Imprimir() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function PrescricaoDietetica() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function getData() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param aData
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setData($aData) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getMetaCalorica() {
		return $this->_metaCalorica;
	}

	/**
	 * @access public
	 * @param string aMetaCalorica
	 * @return void
	 * @ParamType aMetaCalorica string
	 * @ReturnType void
	 */
	public function setMetaCalorica($aMetaCalorica) {
		$this->_metaCalorica = $aMetaCalorica;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getMetaProteica() {
		return $this->_metaProteica;
	}

	/**
	 * @access public
	 * @param string aMetaProteica
	 * @return void
	 * @ParamType aMetaProteica string
	 * @ReturnType void
	 */
	public function setMetaProteica($aMetaProteica) {
		$this->_metaProteica = $aMetaProteica;
	}
}
?>