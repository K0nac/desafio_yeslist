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
                <input name="galao" type="number" step="0.01">
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