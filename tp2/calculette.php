<?php
    $x = (int)readline("Saisir un entier x : ");
    $y = (int)readline("Saisir un entier y : ");
    echo $x ." + ". $y ." = ". $x+$y.PHP_EOL;
    echo $x ." - ". $y." = ".$x-$y.PHP_EOL;
    echo $x ." * ". $y ." = ". $x*$y.PHP_EOL;
    echo $x ." / ". $y ." = ". $x/$y.PHP_EOL;
    echo $x ." % ". $y ." = ". $x%$y.PHP_EOL;
    echo $x ." ** ". $y ." = ". $x**$y.PHP_EOL;
    if($x > $y)
    {
        echo "Le plus grand est : " . $x;
    }
    else
    {
        echo "Le plus grand est : " . $y;
    }
?>