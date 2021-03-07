<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio - Yeslist</title>
</head>
<body>
    <div class="container">

        <form action="response.php" method="post" class="box">
            <div class="tittle">
                Yeslist
            </div>
            <div class="input-group">
                <label for="">Quantos litros tem na garrafa 1 ?</label>
                <input name="g[0]" type="number" step="0.01">
            </div>
            <div class="input-group">
                <label for="">Quantos litros tem na garrafa 2 ?</label>
                <input name="g[1]" type="number" step="0.01">
            </div>
            <div class="input-group">
                <label for="">Quantos litros tem na garrafa 3 ?</label>
                <input name="g[2]" type="number" step="0.01">
            </div>
            <div class="input-group">
                <label for="">Quantos litros tem na garrafa 4 ?</label>
                <input name="g[3]" type="number" step="0.01">
            </div>
            <div class="input-group ">
                <label for="">Quantos litros tem na garrafa 5 ?</label>
                <input name="g[4]" type="number" step="0.01">
            </div>
            <div class="input-group-galao">
                <label for="">Quantidade de àgua no galão (litros):</label>
                <input name="galao" type="number" step="0.01" required>
            </div>
            <div class="button">
                <button type="submit">Calcular</button>
            </div>

            <div class="msgFinal" name="result">
                <?php
                    if($_GET){

                        /* Pega as variavel enviadas via GET pelo response.php */
                            $result = $_GET['result'];
                            $resto = $_GET['resto'];
                            $galao = $_GET['galao'];

                            /* Verifica se a quantidade de agua no galao não é maior que as garrafas */
                            if($galao > 0){
                                echo "<h2>SOLUÇÃO</h2>";
                                echo "Foi utilizado todas as garrafas <b>[{$result}L].</b> <br>";
                                echo "Ainda tem <b>{$galao}L</b> no galão.";
                            }else{ 
                                echo "<h3>SOLUÇÃO</h3>";
                                echo "Foram utilizado as garrafas de <b>[{$result}L].</b><br>";

                                /* Se tiver resto de agua dentro de uma garrafa */
                                /* mostra a mensagem a baixo, caso não tenha, não mostra nada */
                                if($resto > 0){
                                    echo "Sobrou <b>[{$resto}L]</b> dentro de uma garrafa.";
                                }
                            }
                        }
                       
                ?>
            </div>
        </form>
    </div>
</body>
</html>