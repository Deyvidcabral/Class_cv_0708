<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Exercicio de Lutas</h1>
        <?php
        require_once 'luta.php';
        require_once 'lutadorDAO.php';
        require_once 'lutador.php';

        $vetorlut = array();
        
        $vetorlut[0] = new lutador("Pretty Boy", "França", 30, 1.75,68.9,11,2,1);
        
        $vetorlut[1] = new lutador("Putscript", "Brasil", 29, 1.68,68.9,12,3,1);

        $vetorlut[2] = new lutador("SnapShadow", "Eua", 21, 1.23, 78.2,4,2,3);
        
        $vetorlut[3] = new lutador("Dead Code", "Australia", 23, 2.00,75.0,4,12,41);
        
        $vetorlut[4] = new lutador("UfOCOBOL", "Brasil", 27, 2.01,78.0,12,4,1);

        $vetorlut[5] = new lutador("Nerdart", "Eua", 22, 1.85,68.0,8,9,4);
 
        //$vetorlut[0]->apresentar();
        //$vetorlut[1]->apresentar();
        //$vetorlut[2]->apresentar();
        //$vetorlut[3]->apresentar();
        //$vetorlut[4]->apresentar();
        //$vetorlut[5]->apresentar();
        
 
       

        
        echo"<br>";
        
        
        
        $usc = new luta();
        $usc->marcarluta($vetorlut[0], $vetorlut[1]);
        $usc->lutar();
        
        if($vetorlut[0]->getCategoria() === $vetorlut[1]->getCategoria()){
            echo"<br> Parte 1 ok";
        }
        if($vetorlut[0] != $vetorlut[1]){   
            echo"<br> Parte 2 ok";
        }
        
        ?>
    </body>
</html>
