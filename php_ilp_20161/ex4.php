<?php
    $in = fscanf(STDIN, "%d");
    list($n) = $in;

    $ans = 0; // Número de alunos com CR acima de 7

    $count = 1;
    $in = fscanf(STDIN, "%d");
    list($sum) = $in;
    while($sum != -1) {
        if($count == $n) {
            if($sum / $n > 7)
                $ans++;
            $sum = 0;
            $count = 0;
        }

        $in = fscanf(STDIN, "%d");
        list($aux) = $in;
        $sum += $aux;
        $count++;
    }

    echo $ans,"\n";
?>
