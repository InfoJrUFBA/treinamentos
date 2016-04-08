<?php
    $in = fscanf(STDIN, "%s");
    list($st) = $in;

    $len = strlen($st);
    $i = 0;
    for(; $i < $len/2; $i++)
        if($st[$i] != $st[$len-1-$i])
            break;

    echo $i < $len/2 ? "N\n" : "S\n";
?>
