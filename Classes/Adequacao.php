<?php
//require_once(realpath(dirname(__FILE__)) . '/../AvaliacaoNutricionalCLASSES/Refeicao.php');

/**
 * @access public
 * @author Wesley Ferreti
 * @package AvaliacaoNutricionalCLASSES
 */

class Adequacao{
	/**
	 * @AttributeType string
	 */
	public $alimento;
	/**
	 * @AttributeType string
	 */
	public $descricao;
	/**
	 * @AssociationType AvaliacaoNutricionalCLASSES.Refeicao
	 * @AssociationMultiplicity 1..*
	 */
	//public $possui = array();

	/**
	 * @access public
	 */
        public function load(){  
            
        }
        
	public function Incluir() {
         $db = Database::getInstance();   
	 $db->doQuery('insert into adequacao(alimento, descricao) values("'.$this->alimento.'", "'.$this->descricao.'")');
         
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
	public function getAlimento() {
		return $this->alimento;
	}

	/**
	 * @access public
	 * @param string alimento
	 * @return void
	 * @ParamType alimento string
	 * @ReturnType void
	 */
	public function setAlimento($alimento) {
		$this->alimento = $alimento;
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