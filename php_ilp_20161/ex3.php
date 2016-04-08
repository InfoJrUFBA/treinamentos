<?php
    $in = fscanf(STDIN, "%d");
    list($livro) = $in;

    switch ($livro) {
        case 1:
            echo "A\n";
            break;
        case 2:
            echo "B\n";
            break;
        case 3:
            echo "C\n";
            break;
        case 4:
            echo "D\n";
            break;
        case 5:
            echo "E\n";
            break;
        default:
            echo "F\n";
    };
?>
