<?php
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Paciente.php');
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Nutricionista.php');
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Dieta.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class PrescricaoDietetica {
	/**
	 * @AttributeType string
	 */
	public $data;
	/**
	 * @AttributeType string
	 */
	public $metaCalorica;
	/**
	 * @AttributeType string
	 */
	public $metaProteica;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Paciente
	 * @AssociationMultiplicity 1
	 */
	//public $possui;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Nutricionista
	 * @AssociationMultiplicity 1
	 */
	//public $faz;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Dieta
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
	 * @param data
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setData($data) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getMetaCalorica() {
		return $this->metaCalorica;
	}

	/**
	 * @access public
	 * @param string metaCalorica
	 * @return void
	 * @ParamType metaCalorica string
	 * @ReturnType void
	 */
	public function setMetaCalorica($metaCalorica) {
		$this->metaCalorica = $metaCalorica;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getMetaProteica() {
		return $this->metaProteica;
	}

	/**
	 * @access public
	 * @param string metaProteica
	 * @return void
	 * @ParamType metaProteica string
	 * @ReturnType void
	 */
	public function setMetaProteica($metaProteica) {
		$this->metaProteica = $metaProteica;
	}
}
?>