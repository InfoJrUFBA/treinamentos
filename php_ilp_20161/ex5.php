<?php
    $in = fscanf(STDIN, "%d");
    list($n) = $in;

    $nums = array();
    for($i = 0; $i < $n; $i++) {
        $in = fscanf(STDIN, "%d");
        list($nums[$i]) = $in;
    }

    foreach ($nums as $num) {
        if(!($num % 2))
            echo $num," ";
    }
    echo "\n";

    foreach ($nums as $num) {
        if($num % 2)
            echo $num," ";
    }
    echo "\n";
?>
