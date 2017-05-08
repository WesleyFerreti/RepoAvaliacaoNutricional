<?php
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Paciente.php');
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/MembroAmputado.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class AvaliacaoAntropometrica {
	/**
	 * @AttributeType double
	 */
        public $altura;
	/**
	 * @AttributeType double
	 */
        public $peso;
	/**
	 * @AttributeType double
	 */
        public $cbAferida;
	/**
	 * @AttributeType string
	 */
        public $cbClas;
	/**
	 * @AttributeType boolean
	 */
        public $amputado;
	/**
	 * @AttributeType boolean
	 */
        public $acamado;
	/**
	 * @AttributeType double
	 */
        public $alturaJoelho;
	/**
	 * @AttributeType double
	 */
        public $larguraPanturrilha;
	/**
	 * @AttributeType string
	 */
        public $circunferenciaBraco;
	/**
	 * @AttributeType string
	 */
        public $data;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Paciente
	 * @AssociationMultiplicity 1
	 */
	//public $possui;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.MembroAmputado
	 * @AssociationMultiplicity 0..*
	 */
	//public $compoe = array();

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
		return $this->altura;
	}

	/**
	 * @access public
	 * @param double altura
	 * @return void
	 * @ParamType altura double
	 * @ReturnType void
	 */
	public function setAltura($altura) {
		$this->altura = $altura;
	}

	/**
	 * @access public
	 * @return double
	 * @ReturnType double
	 */
	public function getLarguraPanturrilha() {
		return $this->larguraPanturrilha;
	}

	/**
	 * @access public
	 * @param double larguraPanturrilha
	 * @return void
	 * @ParamType larguraPanturrilha double
	 * @ReturnType void
	 */
	public function setLarguraPanturrilha($larguraPanturrilha) {
		$this->larguraPanturrilha = $larguraPanturrilha;
	}

	/**
	 * @access public
	 * @return double
	 * @ReturnType double
	 */
	public function getPeso() {
		return $this->peso;
	}

	/**
	 * @access public
	 * @param double peso
	 * @return void
	 * @ParamType peso double
	 * @ReturnType void
	 */
	public function setPeso($peso) {
		$this->peso = $peso;
	}

	/**
	 * @access public
	 * @return double
	 * @ReturnType double
	 */
	public function getAlturaJoelho() {
		return $this->alturaJoelho;
	}

	/**
	 * @access public
	 * @param double alturaJoelho
	 * @return void
	 * @ParamType alturaJoelho double
	 * @ReturnType void
	 */
	public function setAlturaJoelho($alturaJoelho) {
		$this->alturaJoelho = $alturaJoelho;
	}

	/**
	 * @access public
	 * @return boolean
	 * @ReturnType boolean
	 */
	public function getAcamado() {
		return $this->acamado;
	}

	/**
	 * @access public
	 * @param boolean acamado
	 * @return void
	 * @ParamType acamado boolean
	 * @ReturnType void
	 */
	public function setAcamado($acamado) {
		$this->acamado = $acamado;
	}

	/**
	 * @access public
	 * @return boolean
	 * @ReturnType boolean
	 */
	public function getAmputado() {
		return $this->amputado;
	}

	/**
	 * @access public
	 * @param boolean amputado
	 * @return void
	 * @ParamType amputado boolean
	 * @ReturnType void
	 */
	public function setAmputado($amputado) {
		$this->amputado = $amputado;
	}

	/**
	 * @access public
	 * @return double
	 * @ReturnType double
	 */
	public function getCbAferida() {
		return $this->cbAferida;
	}

	/**
	 * @access public
	 * @param double cbAferida
	 * @return void
	 * @ParamType cbAferida double
	 * @ReturnType void
	 */
	public function setCbAferida($cbAferida) {
		$this->cbAferida = $cbAferida;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getCbClas() {
		return $this->cbClas;
	}

	/**
	 * @access public
	 * @param string cbClas
	 * @return void
	 * @ParamType cbClas string
	 * @ReturnType void
	 */
	public function setCbClas($cbClas) {
		$this->cbClas = $cbClas;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getData() {
		return $this->data;
	}

	/**
	 * @access public
	 * @param string data
	 * @return void
	 * @ParamType data string
	 * @ReturnType void
	 */
	public function setData($data) {
		$this->data = $data;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getCircunferenciaBraco() {
		return $this->circunferenciaBraco;
	}

	/**
	 * @access public
	 * @param string circunferenciaBraco
	 * @return void
	 * @ParamType circunferenciaBraco string
	 * @ReturnType void
	 */
	public function setCircunferenciaBraco($circunferenciaBraco) {
		$this->circunferenciaBraco = $circunferenciaBraco;
	}
}
?>