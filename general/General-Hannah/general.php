<!DOCTYPE html>
<html>
<head>
    <title>Jogo General</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="Imagens/logo.png"/>
    <?php

    $jogador = isset($_GET['jogador']) ? $_GET['jogador'] : '';
    ?>

    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body> 
    
    <div class="p-3 mb-2 bg-info text-dark">
    <center>
<form method="get">
       <label for="jogador"> Digite seu nome: </label>
    

<div class="input-group  ">
    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2" name="jogador" id="jogador" value="<?php echo "$jogador"?>">
    <button class="btn btn-outline-secondary" type="submit" name="Rolar" value="Rolar" id="button-addon2">Rolar</button>
</div>
        

</form> 
<?php

if (isset($_GET['jogador'])){
    echo "<br>Jogador: $jogador";
    echo "<br><br>";


    $arrayjogador = array();
    for ($i=0; $i < 5; $i++) { 
        $arrayjogador[$i] = rand(1,6);
        switch ($arrayjogador[$i]) {
            case '1':
            echo '<img id="dado" src="img/1.png">';
                break;
            case '2':
                echo '<img id="dado" src="img/2.png">';
                break;
            case '3':
                echo '<img id="dado" src="img/3.png">';
                break;
            case '4':
                echo '<img id="dado" src="img/4.png">';
            break;
            case '5':
                echo '<img id="dado" src="img/5.png">';
            break;
            case '6':
                echo '<img id="dado" src="img/6.png">';
            break;
            }
}
        echo "<br>";
        echo "Computador";
        echo "<br>";

$arrayComputador = array();
    for ($i=0; $i < 5; $i++) { 
        $arrayComputador[$i] = rand(1,6);
        switch ($arrayComputador[$i]) {
            case '1':
            echo '<img id="dado" src="img/1.png">';
                break;
            case '2':
                echo '<img id="dado" src="img/2.png">';
                break;
            case '3':
                echo '<img id="dado" src="img/3.png">';
                break;
            case '4':
                echo '<img id="dado" src="img/4.png">';
            break;
            case '5':
                echo '<img id="dado" src="img/5.png">';
            break;
            case '6':
                echo '<img id="dado" src="img/6.png">';
            break;
            }
}
    
//  Player    //

    $cont = 0; 
    $cont2 = 0; 
    $cont3 = 0; 
    $cont4 = 0; 
    $cont5 = 0; 
    $cont6 = 0;

    $jogadas = 0; 
    $jogadas2 = 0; 
    $jogadas3 = 0; 
    $jogadas4 = 0; 
    $jogadas5 = 0; 
    $jogadas6 = 0;
    $trinca = 0; 
    $quadra = 0; 

    $fullhouse = 0; 
    $sqcb = 0; 
    $sqca = 0; 
    $general = 0;
    $aleatorio = 0; 
    $total = 0;

    $soma = 0; 
    $soma2 = 0; 
    $soma3 = 0; 
    $soma4 = 0; 
    $soma5 = 0; 
    $soma6 = 0; 

//  Pc    //


    $pc = 0; 
    $pc2 = 0; 
    $pc3 = 0; 
    $pc4 = 0; 
    $pc5 = 0; 
    $pc6 = 0;

    $jogadaspc = 0; 
    $jogadaspc2 = 0; 
    $jogadaspc3 = 0; 
    $jogadaspc4 = 0; 
    $jogadaspc5 = 0; 
    $jogadaspc6 = 0;

    $trincapc = 0; 
    $quadrapc = 0; 
    $fullhousepc = 0; 
    $sqbpc = 0; 
    $sqcapc = 0; 
    $generalpc = 0; 
    $aleatoriopc = 0; 
    $totalpc = 0;



    
//achar numero Player//

    foreach ($arrayjogador as $dado) {
        if ($dado == 1) {
            $cont++;
        }if ($dado == 2) {
            $cont2++;
        }if ($dado == 3) {
            $cont3++;
        }if ($dado == 4) {
            $cont4++;
        }if ($dado == 5) {
            $cont5++;
        }if ($dado == 6) {
            $cont6++;
        }

//achar numero PC//
    foreach ($arrayComputador as $dado) {
        if ($dado == 1) {
            $pc++;
        }if ($dado == 2) {
            $pc2++;
        }if ($dado == 3) {
            $pc3++;
        }if ($dado == 4) {
            $pc4++;
        }if ($dado == 5) {
            $pc5++;
        }if ($dado == 6) {
            $pc6++;
        }




//Duplas Player//

    }if ($cont > 1) {
        $jogadas = $cont;
    }if ($cont2 > 1) {
        $jogadas2 = $cont2;
    }if ($cont3 > 1) {
        $jogadas3 = $cont3;
    }if ($cont4 > 1) {
        $jogadas4 = $cont4;
    }if ($cont5 > 1) {
        $jogadas5 = $cont5;
    }if ($cont6 > 1) {
        $jogadas6 = $cont6;
    }
//Duplas PC//

    }if ($pc > 1) {
        $jogadaspc = $pc;
    }if ($pc2 > 1) {
        $jogadaspc2 = $pc2;
    }if ($pc3 > 1) {
        $jogadaspc3 = $pc3;
    }if ($pc4 > 1) {
        $jogadaspc4 = $pc4;
    }if ($pc5 > 1) {
        $jogadaspc5 = $pc5;
    }if ($pc6 > 1) {
        $jogadaspc6 = $pc6;
    }


//Trincas Player//

    if ($jogadas > 2) {
        $trinca = 20;
    }if ($jogadas2 > 2) {
        $trinca = 20;
    }if ($jogadas3 > 2) {
        $trinca = 20;
    }if ($jogadas4 > 2) {
        $trinca = 20;
    }if ($jogadas5 > 2) {
        $trinca = 20;
    }if ($jogadas6 > 2) {
        $trinca = 20;
    }
//Trincas PC//

    if ($jogadaspc > 2) {
        $trincapc = 20;
    }if ($jogadaspc2 > 2) {
        $trincapc = 20;
    }if ($jogadaspc3 > 2) {
        $trincapc = 20;
    }if ($jogadaspc4 > 2) {
        $trincapc = 20;
    }if ($jogadaspc5 > 2) {
        $trincapc = 20;
    }if ($jogadaspc6 > 2) {
        $trincapc = 20;
    }


//Quadras Player//

    if ($jogadas > 3) {
        $quadra = 30;
    }if ($jogadas2 > 3) {
        $quadra = 30;
    }if ($jogadas3 > 3) {
        $quadra = 30;
    }if ($jogadas4 > 3) {
        $quadra = 30;
    }if ($jogadas5 > 3) {
        $quadra = 30;
    }if ($jogadas6 > 3) {
        $quadra = 30;
    }
//Quadras PC//

    if ($jogadaspc > 3) {
        $quadrapc = 30;
    }if ($jogadaspc2 > 3) {
        $quadrapc = 30;
    }if ($jogadaspc3 > 3) {
        $quadrapc = 30;
    }if ($jogadaspc4 > 3) {
        $quadrapc = 30;
    }if ($jogadaspc5 > 3) {
        $quadrapc = 30;
    }if ($jogadaspc6 > 3) {
        $quadrapc = 30;
    }

//Full house Player//

        if ($cont == 3) {
            if ($cont2 == 2 or $cont3 == 2 or $cont4 == 2 or $cont5 == 2 or $cont6 == 2) {
               $fullhouse = 25;
        }
    }
    if ($cont2 == 3) {
            if ($cont == 2 or $cont3 == 2 or $cont4 == 2 or $cont5 == 2 or $cont6 == 2) {
               $fullhouse = 25;
        }
    }
    if ($cont3 == 3) {
            if ($cont2 == 2 or $cont == 2 or $cont4 == 2 or $cont5 == 2 or $cont6 == 2) {
               $fullhouse = 25;
        }
    }
      if ($cont4 == 3) {
            if ($cont2 == 2 or $cont3 == 2 or $cont == 2 or $cont5 == 2 or $cont6 == 2) {
               $fullhouse = 25;
        }
    }  
      if ($cont5 == 3) {
            if ($cont2 == 2 or $cont3 == 2 or $cont4 == 2 or $cont == 2 or $cont6 == 2) {
               $fullhouse = 25;
        }
    }
      if ($cont6 == 3) {
            if ($cont2 == 2 or $cont3 == 2 or $cont4 == 2 or $cont5 == 2 or $cont == 2) {
               $fullhouse = 25;
        }
    }

//Full house PC//

        if ($pc == 3) {
            if ($pc2 == 2 or $pc3 == 2 or $pc4 == 2 or $pc5 == 2 or $pc6 == 2) {
               $fullhousepc = 25;
        }
    }
    if ($pc2 == 3) {
            if ($pc == 2 or $pc3 == 2 or $pc4 == 2 or $pc5 == 2 or $pc6 == 2) {
               $fullhousepc = 25;
        }
    }
    if ($pc3 == 3) {
            if ($pc2 == 2 or $pc == 2 or $pc4 == 2 or $pc5 == 2 or $pc6 == 2) {
               $fullhousepc = 25;
        }
    }
      if ($pc4 == 3) {
            if ($pc2 == 2 or $pc3 == 2 or $pc == 2 or $pc5 == 2 or $pc6 == 2) {
               $fullhousepc = 25;
        }
    }  
      if ($pc5 == 3) {
            if ($pc2 == 2 or $pc3 == 2 or $pc4 == 2 or $pc == 2 or $pc6 == 2) {
               $fullhousepc = 25;
        }
    }
      if ($pc6 == 3) {
            if ($pc2 == 2 or $pc3 == 2 or $pc4 == 2 or $pc5 == 2 or $pc == 2) {
               $fullhousepc = 25;
        }
    }
      
//Sequência baixa Player//

    if ($cont == 1 and $cont2 == 1 and $cont3 == 1 and $cont4 == 1 and $cont5 == 1) {
        $sqcb = 40;
    }
//Sequência baixa PC//

    if ($pc == 1 and $pc2 == 1 and $pc3 == 1 and $pc4 == 1 and $pc5 == 1) {
        $sqcbpc = 40;
    }


//Sequência alta Player//

    if ($cont2 == 1 and $cont3 == 1 and $cont4 == 1 and $cont5 == 1 and $cont6 == 1) {
        $sqca = 30;
    }
//Sequência alta PC//

    if ($pc2 == 1 and $pc3 == 1 and $pc4 == 1 and $pc5 == 1 and $pc6 == 1) {
        $sqcapc = 30;
    }

//Aleatório Player//
        
        $aleatorio = $jogadas + $jogadas2 + $jogadas3 + $jogadas4 + $jogadas5 + $jogadas6;
//Aleatório PC//
    
   $aleatoriopc = $jogadaspc + $jogadaspc2 + $jogadaspc3 + $jogadaspc4 + $jogadaspc5 + $jogadaspc6;


//General Player//

    if ($cont == 5) {
        $general = 50;
    }
    if ($cont2 == 5) {
        $general = 50;
    }
    if ($cont3 == 5) {
        $general = 50;
    }
    if ($cont4 == 5) {
        $general = 50;
    }
    if ($cont5 == 5) {
        $general = 50;
    }
    if ($cont6 == 5) {
        $general = 50;
    }
//General PC//

    if ($pc == 5) {
        $generalpc = 50;
    }
    if ($pc2 == 5) {
        $generlapc = 50;
    }
    if ($pc3 == 5) {
        $generalpc = 50;
    }
    if ($pc4 == 5) {
        $generalpc = 50;
    }
    if ($pc5 == 5) {
        $generalpc = 50;
    }
    if ($pc6 == 5) {
        $generalpc = 50;
    }


//Total Player//

    $total = $jogadas + $jogadas2 + $jogadas3 + $jogadas4 + $jogadas5 + $jogadas6 + $trinca + $quadra + $fullhouse + $sqca +
    $sqcb + $aleatorio + $general;
        
//Total PC//

    $totalpc= $jogadaspc + $jogadaspc2 + $jogadas3 + $jogadaspc4 + $jogadaspc5 + $jogadaspc6 + 
    $trincapc + $quadrapc + $fullhousepc + $sqcapc + $sqbpc+ $aleatoriopc + $generalpc;    


    echo "<br><br>
    <table class= 'table'; border = 2px;>
    <tr>
        <td>Jogadas:</td>
        <td>$jogador </td>
        <td>Computador</td>
    </tr>
    <tr>
        <td>Dupla de 1:</td>
        <td>$jogadas</td>
        <td>$jogadaspc</td>
    </tr>
    <tr>
        <td>Dupla de 2:</td>
        <td>$jogadas2</td>
        <td>$jogadaspc2</td>
    </tr>
    <tr>
        <td>Dupla de 3:</td>
        <td>$jogadas3</td>
        <td>$jogadaspc3</td>

    </tr>
    <tr>
        <td>Dupla de 4:</td>
        <td>$jogadas4</td>
        <td>$jogadaspc4</td>

    </tr>
    <tr>
        <td>Dupla de 5:</td>
        <td>$jogadas5</td>
        <td>$jogadaspc5</td>

    </tr>
    <tr>
        <td>Dupla de 6:</td>
        <td>$jogadas6</td>
        <td>$jogadaspc6</td>

    </tr>
    <tr>
        <td>Trinca:</td>
        <td>$trinca</td>
        <td>$trincapc</td>
    </tr>
    <tr>
        <td>Quadra:</td>
        <td>$quadra</td>
        <td>$quadrapc</td>
    </tr>
    <tr>
        <td>Full house</td>
        <td>$fullhouse</td>
        <td>$fullhousepc</td>
    </tr>
    <tr>
        <td>Sequencia baixa</td>
        <td>$sqcb</td>
        <td>$sqbpc</td>
    </tr>
    <tr>
        <td>Sequencia Alta</td>
        <td>$sqca</td>
        <td>$sqcapc</td>
    </tr>
    <tr>
        <td>General</td>
        <td>$general</td>
        <td>$generalpc</td>
    </tr>
    <tr>
        <td>Aleatório</td>
        <td>$aleatorio</td>
        <td>$aleatoriopc</td>
    </tr>
    <tr>
        <td>Total de pontos</td>
        <td>$total</td>
        <td>$totalpc</td>
    </tr>
    ";












    if ($total > $totalpc) {
        echo "$jogador ganhou<br>";
    }
        if ($totalpc > $total) {
           echo "Computador ganhou<br>";
        }
    if ($total == $totalpc){
        echo "Empate<br>";
    }
    
    "
    </table>";

}
?>
</center>
</div>
</body>
</html>