<?php

require_once 'lutador.php';
class LutadorDAO {
    
    
    
    public function apresentar($lutador){
        echo"<p>-------------------------</p>";
        echo"<p> LUTADOR </p>";
        echo"<p>Nome: " . $lutador->getNome();
        echo"<p>Nacionalidade: ". $lutador->getNacionalidade();
        echo"<p>Idade: " . $lutador->getIdade();
        echo"<p>Altura: ". $lutador->getAltura();
        echo"<p>Peso: ". $lutador->getPeso();
        echo"<p>Categoria: ". $lutador->getCategoria();
        echo"<p>Vitórias: " . $lutador->getVitorias();
        echo"<p>Derrotas: " . $lutador->getDerrotas();
        echo"<p>Empates: " . $lutador->getEmpates();
        echo"<p>-------------------------</p>";
        echo"<br>";
    }
    public function status($lutador){
        echo"<p>-------------------------</p>";
        echo"<p>Nome: </p>" . $lutador->getNome();
        echo"<p>Peso: </p>". $lutador->getPeso();
        echo"<p>Vitórias: </p>" . $lutador->getVitorias();
        echo"<p>Derrotas: </p>" . $lutador->getDerrotas();
        echo"<p>Empates: </p>" . $lutador->getEmpates();
        echo"<p>-------------------------</p>";
        echo"<br>";
    }
    public function ganharluta($lutador){
        $lutador->setvitorias($lutador->getvitorias()+1);
    }
    public function perderluta($lutador){
        $lutador->setderrotas($lutador->getderrotas()+1);
    }
    public function empatarluta($lutador){
        $lutador->setempates($lutador->getempates()+1);
    }
}
