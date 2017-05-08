<?php

//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/FormularioTriagem.php');
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Paciente.php');
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/OrientacoesNutricionais.php');
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Pessoa.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */
class Nutricionista extends Pessoa {

    /**
     * @AttributeType string
     */
    public $CRN;

    /**
     * @AttributeType boolean
     */
    public $coordenador;

    /**
     * @AttributeType string
     */
    public $senha;

    /**
     * @AttributeType boolean
     */
    public $inativo;

    /**
     * @AssociationType AvaliacaoNutricionalCLASSES.FormularioTriagem
     * @AssociationMultiplicity 0..*
     */
    //public $pertence = array();
    /**
     * @AssociationType AvaliacaoNutricionalCLASSES.Paciente
     * @AssociationMultiplicity 1..*
     */
    //public $tem = array();
    /**
     * @AssociationType AvaliacaoNutricionalCLASSES.OrientacoesNutricionais
     * @AssociationMultiplicity 0..*
     */
    //public $faz = array();

    /**
     * @access public
     */
    
    public function __construct($nome) {
        
        
    }
    
    public function Incluir() {
        $db = Database::getInstance();
        $db->doQuery();
    }

    /**
     * @access public
     */
    public function Alterar($id) {
        // Not yet implemented
    }

    /**
     * @access public
     */
    public function Visualizar($id) {
        // Not yet implemented
    }

    /**
     * @access public
     */
    public function Inativar($id) {
        // Not yet implemented
    }

    /**
     * @access public
     */
    public function Login($email, $senha) {
        // Not yet implemented
    }

    /**
     * @access public
     * @return string
     * @ReturnType string
     */
    public function getCRN() {
        return $this->CRN;
    }

    /**
     * @access public
     * @param string CRN
     * @return void
     * @ParamType CRN string
     * @ReturnType void
     */
    public function setCRN($CRN) {
        $this->CRN = $CRN;
    }

    /**
     * @access public
     * @return string
     * @ReturnType string
     */
    public function getSenha() {
        return $this->senha;
    }

    /**
     * @access public
     * @param string senha
     * @return void
     * @ParamType senha string
     * @ReturnType void
     */
    public function setSenha($senha) {
        $this->senha = $senha;
    }

    /**
     * @access public
     * @return boolean
     * @ReturnType boolean
     */
    public function getCoordenador() {
        return $this->coordenador;
    }

    /**
     * @access public
     * @param boolean coordenador
     * @return void
     * @ParamType coordenador boolean
     * @ReturnType void
     */
    public function setCoordenador($coordenador) {
        $this->coordenador = $coordenador;
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

}

?>