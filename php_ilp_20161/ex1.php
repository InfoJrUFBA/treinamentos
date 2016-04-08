<?php
    $in = fscanf(STDIN, "%d%d");
    list($a, $b) = $in;

    echo $a * 2 + $b % $a,"\n";
?>
