<?php
    $garrafas = $_POST['g'];
    $galao = $_POST['galao'];
    $maiorNum = 0;
    $menorNum = 0;
    $indexMaior = 0;
    $indexMenor = 0;
    $resto = 0;


    /* Solução do projeto */

    while ($galao > 0) {
        /* Pega o menor numero da array */
        $menorNum = min($garrafas);
        $indexMenor = array_search($menorNum, $garrafas);
        unset($garrafas[$indexMenor]);

        /* Subtrai o galao com o MENOR numero*/
        $galao = $galao - $menorNum;
        if($galao < 0){
            $resto = abs($galao);
            $galao = 0;

        }else{
            /* Pega o maior numero da array */
            $maiorNum = max($garrafas);
            $indexMaior = array_search($maiorNum, $garrafas);
            unset($garrafas[$indexMaior]);
            
            /* Subtrai o galao  com o MAIOR numero*/
            $galao = $galao - $maiorNum;
            
            if($galao < 0){
                $resto = abs($galao);
                $galao = 0;
            
            
            }
        }
    }


    /* $msg = "Você tem garrafa1 - {$g[0]}L, garrafa2 - {$g[1]}L, garrafa3 - {$g[2]}L, garrafa4 - {$g[3]}L, garrafa5 - {$g[4]}L, para um galão de $galao"; */

    $msg = "$maiorNum";
    echo "maior/menor numero da array - $maiorNum - $menorNum <br>";
    echo "indice no qual vou excluir - $indexMaior - $indexMenor <br>";
    echo "quanto sobra no galao {$galao}L <br>";
    echo "Quanto de agua sobrou na garrafa {$resto}L <br>";
    print_r($garrafas);
    /* header("location:index.php?msg=$msg"); */

?>