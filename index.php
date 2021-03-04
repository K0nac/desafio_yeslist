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
                <input name="g1" type="number">
            </div>
            <div class="input-group">
                <label for="">Quantos litros tem na garrafa 2 ?</label>
                <input name="g2" id="g2" type="number">
            </div>
            <div class="input-group">
                <label for="">Quantos litros tem na garrafa 3 ?</label>
                <input name="g3" type="number">
            </div>
            <div class="input-group">
                <label for="">Quantos litros tem na garrafa 4 ?</label>
                <input name="g4" type="number">
            </div>
            <div class="input-group">
                <label for="">Quantos litros tem na garrafa 5 ?</label>
                <input name="g5" type="number">
            </div>
            <div class="input-group">
                <label for="">Quantidade de àgua no galão (litros):</label>
                <input name="galao" type="number">
            </div>
            <div class="button">
                <button type="submit">Calcular</button>
            </div>

            <div name="result">
                <?php
                    if($_GET){
                        echo $_GET['msg'];
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>