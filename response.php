<?php
    $garrafas = $_POST['g'];
    $galao = $_POST['galao'];
    $maiorNum = 0;
    $menorNum = 0;
    $indexMaior = 0;
    $indexMenor = 0;
    $resto = 0;

    /* -----========------ Solução do projeto ------========--------- */
    /* Este while Retira valores nulos da array */
    while (array_search(null, $garrafas)) {
        $nulo = array_search(null, $garrafas);
        unset($garrafas[$nulo]);
    }

    /* Este while ficara percorrendo até que o galão seja igual a 0 */
    while ($galao > 0 && $garrafas == TRUE) {
        /* Pega o menor numero da array */
        $menorNum = min($garrafas);
        $indexMenor = array_search($menorNum, $garrafas);
        unset($garrafas[$indexMenor]);
        $array[] = $menorNum;

        /* Subtrai o galao com o MENOR numero*/
        $galao = $galao - $menorNum;

        /* Caso a subtração a cima fique negativa, quer dizer que a "garrafa" */
        /* Conseguiu preencher todo o galão e ainda sobrou algo dentro dela */
        /* Este if verificara isso e converte o resultado negativo do galao  */
        /* Para positivo e o coloca dentro da variavel $resto */
        if($galao < 0){
            $resto = abs($galao);
            $galao = 0;

            /* Caso a subtração não fique negativa, quer dizer que a garrafa esvaziou */
            /* e ainda tem agua dentro do galão entao o while continua */
        }else{
            /* Pega o maior numero da array */
            $maiorNum = max($garrafas);
            $indexMaior = array_search($maiorNum, $garrafas);
            unset($garrafas[$indexMaior]);
            $array[] = $maiorNum;

            /* Subtrai o galao  com o MAIOR numero*/
            $galao = $galao - $maiorNum;
            
            /* Enfim verifica novamente se a subtração ficou negativa*/
            /* Caso fique negativa, quer dizer que o galão esvaziou  */
            /* e o valor negativo é o "resto" da agua na garrafa */
            /* Se ainda houver agua no galão o while se repete */
            if($galao < 0){
                $resto = abs($galao);
                $galao = 0;
            
            }
        }

    }
        /* Transforma a array em uma string */
        $result = implode("L, ", $array);

        /* Volta para index enviando a resposta($result) a sobra($resto) */
        /* e a quantidade de sobra do galao($galao) */
        $msg = "result=$result&resto=$resto&galao=$galao";
        
        header("location:index.php?$msg");
?>