<?php

// Complete the staircase function below.
function staircase($n) {
    for ($i = 1; $i <= $n; $i++){
        fwrite(STDOUT, str_repeat(' ', $n - $i));
        fwrite(STDOUT, str_repeat('#', $i));
        fwrite(STDOUT, "\n");
    }
}

$stdin = fopen("php://stdin", "r");

fscanf(STDIN, "%d\n", $n);

staircase($n);
    