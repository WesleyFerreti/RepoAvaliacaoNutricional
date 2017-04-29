<?php
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Paciente.php');
require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/MembroAputado.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class AvaliacaoAntropometrica {
	/**
	 * @AttributeType double
	 */
	private $_altura;
	/**
	 * @AttributeType double
	 */
	private $_peso;
	/**
	 * @AttributeType double
	 */
	private $_cbAferida;
	/**
	 * @AttributeType string
	 */
	private $_cbClas;
	/**
	 * @AttributeType boolean
	 */
	private $_amputado;
	/**
	 * @AttributeType boolean
	 */
	private $_acamado;
	/**
	 * @AttributeType double
	 */
	private $_alturaJoelho;
	/**
	 * @AttributeType double
	 */
	private $_larguraPanturrilha;
	/**
	 * @AttributeType string
	 */
	private $_circunferenciaBraco;
	/**
	 * @AttributeType string
	 */
	private $_data;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Paciente
	 * @AssociationMultiplicity 1
	 */
	public $_possui;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.MembroAputado
	 * @AssociationMultiplicity 0..*
	 */
	public $_compoe = array();

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
	public function Visualizar() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function EstimarPeso() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function EstimarAltura() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function CalcularIMC() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return double
	 * @ReturnType double
	 */
	public function getAltura() {
		return $this->_altura;
	}

	/**
	 * @access public
	 * @param double aAltura
	 * @return void
	 * @ParamType aAltura double
	 * @ReturnType void
	 */
	public function setAltura($aAltura) {
		$this->_altura = $aAltura;
	}

	/**
	 * @access public
	 * @return double
	 * @ReturnType double
	 */
	public function getLarguraPanturrilha() {
		return $this->_larguraPanturrilha;
	}

	/**
	 * @access public
	 * @param double aLarguraPanturrilha
	 * @return void
	 * @ParamType aLarguraPanturrilha double
	 * @ReturnType void
	 */
	public function setLarguraPanturrilha($aLarguraPanturrilha) {
		$this->_larguraPanturrilha = $aLarguraPanturrilha;
	}

	/**
	 * @access public
	 * @return double
	 * @ReturnType double
	 */
	public function getPeso() {
		return $this->_peso;
	}

	/**
	 * @access public
	 * @param double aPeso
	 * @return void
	 * @ParamType aPeso double
	 * @ReturnType void
	 */
	public function setPeso($aPeso) {
		$this->_peso = $aPeso;
	}

	/**
	 * @access public
	 * @return double
	 * @ReturnType double
	 */
	public function getAlturaJoelho() {
		return $this->_alturaJoelho;
	}

	/**
	 * @access public
	 * @param double aAlturaJoelho
	 * @return void
	 * @ParamType aAlturaJoelho double
	 * @ReturnType void
	 */
	public function setAlturaJoelho($aAlturaJoelho) {
		$this->_alturaJoelho = $aAlturaJoelho;
	}

	/**
	 * @access public
	 * @return boolean
	 * @ReturnType boolean
	 */
	public function getAcamado() {
		return $this->_acamado;
	}

	/**
	 * @access public
	 * @param boolean aAcamado
	 * @return void
	 * @ParamType aAcamado boolean
	 * @ReturnType void
	 */
	public function setAcamado($aAcamado) {
		$this->_acamado = $aAcamado;
	}

	/**
	 * @access public
	 * @return boolean
	 * @ReturnType boolean
	 */
	public function getAmputado() {
		return $this->_amputado;
	}

	/**
	 * @access public
	 * @param boolean aAmputado
	 * @return void
	 * @ParamType aAmputado boolean
	 * @ReturnType void
	 */
	public function setAmputado($aAmputado) {
		$this->_amputado = $aAmputado;
	}

	/**
	 * @access public
	 * @return double
	 * @ReturnType double
	 */
	public function getCbAferida() {
		return $this->_cbAferida;
	}

	/**
	 * @access public
	 * @param double aCbAferida
	 * @return void
	 * @ParamType aCbAferida double
	 * @ReturnType void
	 */
	public function setCbAferida($aCbAferida) {
		$this->_cbAferida = $aCbAferida;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getCbClas() {
		return $this->_cbClas;
	}

	/**
	 * @access public
	 * @param string aCbClas
	 * @return void
	 * @ParamType aCbClas string
	 * @ReturnType void
	 */
	public function setCbClas($aCbClas) {
		$this->_cbClas = $aCbClas;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getData() {
		return $this->_data;
	}

	/**
	 * @access public
	 * @param string aData
	 * @return void
	 * @ParamType aData string
	 * @ReturnType void
	 */
	public function setData($aData) {
		$this->_data = $aData;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getCircunferenciaBraco() {
		return $this->_circunferenciaBraco;
	}

	/**
	 * @access public
	 * @param string aCircunferenciaBraco
	 * @return void
	 * @ParamType aCircunferenciaBraco string
	 * @ReturnType void
	 */
	public function setCircunferenciaBraco($aCircunferenciaBraco) {
		$this->_circunferenciaBraco = $aCircunferenciaBraco;
	}
}
?>