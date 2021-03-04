<?php
    $g1 = $_POST['g1'];
    $g2 = $_POST['g2'];
    $g3 = $_POST['g3'];
    $g4 = $_POST['g4'];
    $g5 = $_POST['g5'];
    $galao = $_POST['galao'];

    echo $g1;
    echo $g2;
    echo $g3;
    echo $g4;
    echo $g5;
    echo $galao;

    $msg = "Você tem garrafa 1 - $g1 L, garrafa 2 - $g2 L, garrafa 3 - $g2 L, garrafa 4 - $g2 L, garrafa 5 - $g2 L, para um galão de $galao";

    header("location:index.php?msg=$msg");
?>