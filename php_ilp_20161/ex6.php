<?php
    $in = fscanf(STDIN, "%d");
    list($n) = $in;

    $notas = array();
    for($i = 0; $i < $n; $i++) {
        $in = fscanf(STDIN, "%s %d");
        list($nome, $nota) = $in;
        $notas[$nome] = $nota;
    }

    foreach ($notas as $nome => $nota) {
        if(!($nota % 2))
            echo $nome," ";
    }
    echo "\n";

    foreach ($notas as $nome => $nota) {
        if($nota % 2)
            echo $nome," ";
    }
    echo "\n";
?>
