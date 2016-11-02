<?php
class lutador{
	private $nome;
	private $nacionalidade;
	private $idade;
	private $altura;
	private $peso;
	private $categoria;
	private $vitorias;
	private $derrotas;
	private $empates;
	// Metodos especiais e Construtor
        function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
            $this->nome = $no;
            $this->nacionalidade = $na;
            $this->idade = $id;
            $this->altura = $al;
            $this->peso = $pe;
            $this->categoria = $this->setCategoria($pe);
            $this->vitorias  = $vi;
            $this->derrotas = $de;
            $this->empates = $em;
        }
        function getNome() {
            return $this->nome;
        }

        function getNacionalidade() {
            return $this->nacionalidade;
        }

        function getIdade() {
            return $this->idade;
        }

        function getAltura() {
            return $this->altura;
        }

        function getPeso() {
            return $this->peso;
        }

        function getCategoria() {
            return $this->categoria;
        }

        function getVitorias() {
            return $this->vitorias;
        }

        function getDerrotas() {
            return $this->derrotas;
        }

        function getEmpates() {
            return $this->empates;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

        function setNacionalidade($nacionalidade) {
            $this->nacionalidade = $nacionalidade;
        }

        function setIdade($idade) {
            $this->idade = $idade;
        }

        function setAltura($altura) {
            $this->altura = $altura;
        }

        function setPeso($peso) {
            $this->peso = $peso;
            $this->setcategoria($peso);
        }

        function setCategoria($categoria){
            if($categoria<52.2){
                echo"<p>Peso muito baixo</p>";
            } else if($categoria<=70.2){
                $this->categoria = "leve";
                }else if($categoria<=83.9){
                    $this->categoria = "medio";
                }else if($categoria<=120.2){
                    $this->categoria = "pesado";
                }else {
                    $this->categoria = $categoria;
                    echo"<p>Muito pesado<p>";
                }
        }

        function setVitorias($vitorias) {
            $this->vitorias = $vitorias;
        }

        function setDerrotas($derrotas) {
            $this->derrotas = $derrotas;
        }

        function setEmpates($empates) {
            $this->empates = $empates;
        }
       
}


