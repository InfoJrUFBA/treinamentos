<?php
    $in = fscanf(STDIN, "%d%d%d");
    list($a, $b, $c) = $in;

    echo ($a + $b + $c)/3 >= 5 ? "RU\n" : "Chumbinho\n";
?>
