<?php
    require_once 'lutador.php';
    require_once 'lutadorDAO.php';
class luta {
    //Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    //Construtor
    function __construct() {
        
    }
    // Metodos de Luta
    public function marcarluta($l1, $l2){
        if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
            $this->aprovado = true; 
            $this->desafiado = $l1;
            $this->desafiante = $l2;
            echo"<br>Luta Marcada"; 
        } else {
            $this->aprovado = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    
    public function lutar(){
        echo"<br>". $this->getaprovada();
        if($this->aprovada == 0){
            $desafiandoDAO = new lutadorDAO();
            $desafianteDAO = new lutadorDAO();
            
            $desafiandoDAO->apresentar($this->getDesafiante());
            $desafianteDAO->apresentar($this->getDesafiado());
            $vencedor = rand(0,2);
            switch($vencedor){
            case 0: //Empate
                $desafiandoDAO->empatarluta($this->getDesafiado());
                $desafianteDAO->empatarluta($this->getDesafiante());
                echo"<p> A luta empatou";
                break;
            case 1: // Desafiante venceu
                $desafiandoDAO->perderluta($this->getDesafiado());
                $desafianteDAO->ganharluta($this->getDesafiante());
                echo"<p> O Desafiante: " . $this->desafiante->getnome() . " venceu";
                break;
            case 2: //Desafiante perdeu
                $desafiandoDAO->ganharluta($this->getDesafiado());
                $desafianteDAO->perderluta($this->getDesafiante());
                echo"<p> O Desafiado: " . $this->desafiado->getnome() . " venceu";
                break;
            }
        }else{
            echo"<p> Luta inválida";
             $this->motivo();
            }
            
        }
        
                
    public function motivo(){
            if($this->aprovada == true){
                echo"<p>Luta aprovada";
            }
            if($this->desafiante == null){
                echo"<p> desafiante é null";
            }
            if($this->desafiado == null){
                echo"<p> desafiante é null";
            }
    }
    

    //Metodos Especiais
    function getDesafiado() {
        return $this->desafiado;
    }

    function getDesafiante() {
        return $this->desafiante;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovada() {
        return $this->aprovada;
    }

    function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }

    
    
}

